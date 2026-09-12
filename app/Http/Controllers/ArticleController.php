<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Menampilkan Arsip Berita & Artikel Geely BSD
     */
    public function index(): View
    {
        $articles = Article::published()->paginate(9);
        $recentPosts = Article::published()->take(4)->get();

        return view('pages.news.index', compact('articles', 'recentPosts'));
    }

    /**
     * Menampilkan Detail Artikel Lengkap dengan SEO Rich Snippet
     */
    public function show(string $slug): View
    {
        $article = Article::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Rekam pembacaan unik / bertambah views
        $article->increment('views');

        // Rekomendasi artikel terkait
        $relatedArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get();

        return view('pages.news.show', compact('article', 'relatedArticles'));
    }
}