<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminArticleController extends Controller
{
    /**
     * Menampilkan daftar seluruh artikel di Admin Portal
     */
    public function index(Request $request): View
    {
        $query = Article::query()->latest();

        if ($request->filled('search')) {
            $search = trim($request->input('search'));
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            if ($request->input('status') === 'published') {
                $query->where('is_published', true);
            } elseif ($request->input('status') === 'draft') {
                $query->where('is_published', false);
            }
        }

        $articles = $query->paginate(12)->withQueryString();

        $stats = [
            'total'     => Article::count(),
            'published' => Article::where('is_published', true)->count(),
            'draft'     => Article::where('is_published', false)->count(),
            'views'     => Article::sum('views'),
        ];

        return view('admin.articles.index', compact('articles', 'stats'));
    }

    /**
     * Form pembuatan artikel baru
     */
    public function create(): View
    {
        return view('admin.articles.editor', [
            'article' => new Article(),
            'isEdit'  => false,
        ]);
    }

    /**
     * Simpan artikel baru ke database
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'category'         => 'required|string|max:100',
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'required|string',
            'image'            => 'nullable|image|max:3072',
            'image_url'        => 'nullable|url|max:500',
            'author'           => 'nullable|string|max:100',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords'    => 'nullable|string|max:300',
            'is_published'     => 'nullable|boolean',
        ]);

        $slug = Article::createUniqueSlug($validated['title']);
        $imagePath = $validated['image_url'] ?? null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
        }

        $isPublished = $request->boolean('is_published', true);

        // Ambil ID user admin yang login untuk memenuhi kolom author_id di database
        $authorId = Auth::id() ?? (User::first()?->id ?? 1);
        $authorName = $validated['author'] ?: (Auth::user()?->name ?? 'Admin Geely BSD');

        $articleData = [
            'title'            => trim($validated['title']),
            'slug'             => $slug,
            'category'         => $validated['category'],
            'excerpt'          => $validated['excerpt'] ?: Str::limit(strip_tags($validated['content']), 160),
            'content'          => $validated['content'],
            'image'            => $imagePath,
            'author'           => $authorName,
            'meta_title'       => $validated['meta_title'] ?: $validated['title'],
            'meta_description' => $validated['meta_description'] ?: Str::limit(strip_tags($validated['content']), 155),
            'meta_keywords'    => $validated['meta_keywords'] ?: 'Geely BSD, Mobil Listrik, Test Drive Geely, Promo Geely Tangerang',
            'is_published'     => $isPublished,
            'published_at'     => $isPublished ? now() : null,
        ];

        // Jika tabel articles memiliki kolom author_id, masukkan otomatis
        if (Schema::hasColumn('articles', 'author_id')) {
            $articleData['author_id'] = $authorId;
        }

        Article::create($articleData);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dibuat dan dioptimasi untuk SEO.');
    }

    /**
     * Form edit artikel
     */
    public function edit(Article $article): View
    {
        return view('admin.articles.editor', [
            'article' => $article,
            'isEdit'  => true,
        ]);
    }

    /**
     * Update data artikel
     */
    public function update(Request $request, Article $article): RedirectResponse
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|max:255',
            'category'         => 'required|string|max:100',
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'required|string',
            'image'            => 'nullable|image|max:3072',
            'image_url'        => 'nullable|url|max:500',
            'author'           => 'nullable|string|max:100',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords'    => 'nullable|string|max:300',
            'is_published'     => 'nullable|boolean',
        ]);

        $slug = Str::slug($validated['slug']);
        if ($slug !== $article->slug) {
            $slug = Article::createUniqueSlug($slug, $article->id);
        }

        $imagePath = $article->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
        } elseif (!empty($validated['image_url'])) {
            $imagePath = $validated['image_url'];
        }

        $isPublished = $request->boolean('is_published');
        $publishedAt = $article->published_at;

        if ($isPublished && !$article->is_published) {
            $publishedAt = now();
        }

        $updateData = [
            'title'            => trim($validated['title']),
            'slug'             => $slug,
            'category'         => $validated['category'],
            'excerpt'          => $validated['excerpt'] ?: Str::limit(strip_tags($validated['content']), 160),
            'content'          => $validated['content'],
            'image'            => $imagePath,
            'author'           => $validated['author'] ?: ($article->author ?? 'Admin Geely BSD'),
            'meta_title'       => $validated['meta_title'] ?: $validated['title'],
            'meta_description' => $validated['meta_description'] ?: Str::limit(strip_tags($validated['content']), 155),
            'meta_keywords'    => $validated['meta_keywords'] ?: 'Geely BSD, Mobil Listrik, Test Drive Geely',
            'is_published'     => $isPublished,
            'published_at'     => $publishedAt,
        ];

        if (Schema::hasColumn('articles', 'author_id') && empty($article->author_id)) {
            $updateData['author_id'] = Auth::id() ?? (User::first()?->id ?? 1);
        }

        $article->update($updateData);

        return redirect()->route('admin.articles.index')->with('success', "Artikel '{$article->title}' berhasil diperbarui.");
    }

    /**
     * Hapus artikel
     */
    public function destroy(Article $article): RedirectResponse
    {
        $title = $article->title;
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', "Artikel '{$title}' berhasil dihapus.");
    }
}