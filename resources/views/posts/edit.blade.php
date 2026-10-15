@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <h2>Edit Artikel</h2>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @method('PUT')
        @include('posts._form')
    </form>
@endsection