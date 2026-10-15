<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Artikel') - {{ config('app.name') }}</title>
    <style>
        body { font-family: sans-serif; max-width: 760px; margin: 2rem auto; padding: 0 1rem; color: #222; }
        a { color: #d63b2f; }
        article { border-bottom: 1px solid #ddd; padding: 1rem 0; }
        label { display: block; margin-top: 1rem; font-weight: bold; }
        input[type=text], textarea, select { width: 100%; padding: .5rem; box-sizing: border-box; }
        button, .btn { background: #d63b2f; color: #fff; border: 0; padding: .5rem 1rem; cursor: pointer; text-decoration: none; }
        .alert { background: #e6f7ea; padding: .75rem; margin: 1rem 0; }
        .error { color: #c00; }
        footer { margin-top: 3rem; color: #888; font-size: .85rem; }
    </style>
</head>
<body>
    <h1><a href="{{ route('posts.index') }}">{{ config('app.name') }}</a></h1>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @yield('content')

    <footer>&copy; {{ date('Y') }} {{ config('blog.author') }}</footer>
</body>
</html>