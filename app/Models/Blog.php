<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'user_id',
        'title',
        'status',
        'slug',
        'content',
        'thumbnail',
        'user_id',
        'published_at',
        "meta_title",
        "meta_description",
        "meta_keywords",
    ];

    // Relasi ke user (penulis)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Cek apakah title berubah atau slug masih kosong
            if ($model->isDirty('title') || empty($model->slug)) {
                $model->slug = self::generateUniqueSlug($model->title, $model->id);
            }
        });

        Blog::saving(function ($blog) {
            if ($blog->published_at && $blog->published_at <= now()) {
                $blog->status = 'published';
            }
        });
    }

    protected static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug(Str::lower($title));
        $original = $slug;
        $count = 2;

        while (
            self::where('slug', $slug)
                ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$original}-{$count}";
            $count++;
        }

        return $slug;
    }
}
