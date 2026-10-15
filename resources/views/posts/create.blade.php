@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('content')
    <h2>Tambah Artikel</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @include('posts._form')
    </form>
@endsection