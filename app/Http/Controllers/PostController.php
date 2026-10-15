<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('category')->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::orderBy('name')->get();

        return view('posts.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        $categories = Category::orderBy('name')->get();

        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}