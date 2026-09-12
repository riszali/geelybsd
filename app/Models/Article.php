<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'author_id',
        'title',
        'slug',
        'category',
        'excerpt',
        'content',
        'image',
        'author',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_published',
        'published_at',
        'views',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'views'        => 'integer',
        'author_id'    => 'integer',
    ];

    /**
     * Relasi ke User pembuat artikel
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Scope artikel yang aktif dan sudah terbit
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now())
                     ->orderByDesc('published_at');
    }

    /**
     * Generate otomatis slug unik saat title diset
     */
    public static function createUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;
        $counter = 1;

        while (static::where('slug', $slug)->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }

    /**
     * Estimasi waktu baca artikel dalam menit
     */
    public function getReadingTimeAttribute(): int
    {
        $words = str_word_count(strip_tags($this->content));
        return max(1, (int) ceil($words / 200));
    }

    /**
     * Format tanggal publikasi dalam bahasa Indonesia
     */
    public function getFormattedDateAttribute(): string
    {
        return $this->published_at 
            ? Carbon::parse($this->published_at)->locale('id')->isoFormat('D MMMM Y')
            : '-';
    }

    /**
     * Fallback URL Gambar Utama
     */
    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            if (Str::startsWith($this->image, ['http://', 'https://'])) {
                return $this->image;
            }

            // Bersihkan prefix jika sudah ada kata 'storage/' di awal
            $cleanPath = ltrim(preg_replace('/^storage\//', '', $this->image), '/');
            return asset('storage/' . $cleanPath);
        }

        return asset('assets/images/ex5/dama.jpeg');
    }
}