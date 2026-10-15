@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h2>{{ $post->title }}</h2>
    <small>Dibuat {{ $post->created_at->diffForHumans() }}</small>

    <div>{!! nl2br(e($post->content)) !!}</div>

    <p><a href="{{ route('posts.index') }}">&laquo; Kembali ke daftar</a></p>
@endsection