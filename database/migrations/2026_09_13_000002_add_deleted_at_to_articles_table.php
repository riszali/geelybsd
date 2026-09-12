<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                if (!Schema::hasColumn('articles', 'category')) {
                    $table->string('category', 100)->default('News & Promo')->after('slug');
                }
                if (!Schema::hasColumn('articles', 'excerpt')) {
                    $table->text('excerpt')->nullable()->after('category');
                }
                if (!Schema::hasColumn('articles', 'image')) {
                    $table->string('image', 500)->nullable()->after('content');
                }
                if (!Schema::hasColumn('articles', 'author')) {
                    $table->string('author', 100)->default('Admin Geely BSD')->after('image');
                }
                if (!Schema::hasColumn('articles', 'meta_title')) {
                    $table->string('meta_title', 255)->nullable()->after('author');
                }
                if (!Schema::hasColumn('articles', 'meta_description')) {
                    $table->string('meta_description', 500)->nullable()->after('meta_title');
                }
                if (!Schema::hasColumn('articles', 'meta_keywords')) {
                    $table->string('meta_keywords', 300)->nullable()->after('meta_description');
                }
                if (!Schema::hasColumn('articles', 'is_published')) {
                    $table->boolean('is_published')->default(true)->index()->after('meta_keywords');
                }
                if (!Schema::hasColumn('articles', 'published_at')) {
                    $table->timestamp('published_at')->nullable()->index()->after('is_published');
                }
                if (!Schema::hasColumn('articles', 'views')) {
                    $table->unsignedBigInteger('views')->default(0)->after('published_at');
                }
                if (!Schema::hasColumn('articles', 'deleted_at')) {
                    $table->softDeletes()->after('updated_at');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                if (Schema::hasColumn('articles', 'deleted_at')) {
                    $table->dropSoftDeletes();
                }
            });
        }
    }
};