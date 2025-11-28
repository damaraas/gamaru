<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->get();

        return Inertia::render('Blog/index', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published') // hanya yang published
            ->firstOrFail();

        $blog->content = preg_replace(
            '/<p[^>]*>\s*(?:<strong>)?\s*Baca juga\s*:\s*(.*?)\s*(?:<\/strong>)?\s*<\/p>/is',
            '<p class="related-link">🔗 Baca juga: $1</p>',
            $blog->content
        );

        $blog->content = preg_replace(
            '/<p[^>]*>\s*(?:<strong>)?\s*Sumber\s*:\s*(.*?)(?:<\/strong>)?\s*<\/p>/is',
            '<p class="source-link">Sumber: $1</p>',
            $blog->content
        );

        return inertia('Blog/show', [
            'blog' => $blog,
            'meta' => [
                'title' => $blog->meta_title,
                'description' => $blog->meta_description,
                'keywords' => $blog->meta_keywords,
            ],
        ]);
    }
}
