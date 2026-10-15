@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <p><a class="btn" href="{{ route('posts.create') }}">+ Artikel Baru</a></p>

    @forelse($posts as $post)
        <article>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <small>Kategori: {{ $post->category?->name ?? 'Tanpa kategori' }}</small>
            <p>{{ Str::limit($post->content, 120) }}</p>
            <small>{{ $post->created_at->format('d M Y') }}</small> |
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus artikel ini?')">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </article>
    @empty
        <p>Belum ada artikel.</p>
    @endforelse
@endsection