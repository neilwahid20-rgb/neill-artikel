@csrf

<label for="category_id">Kategori</label>
<select id="category_id" name="category_id">
    <option value="">- Tanpa kategori -</option>
    @foreach($categories as $category)
        <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id ?? '') == $category->id)>
            {{ $category->name }}
        </option>
    @endforeach
</select>
@error('category_id')
    <small class="error">{{ $message }}</small>
@enderror

<label for="title">Judul</label>
<input type="text" id="title" name="title" value="{{ old('title', $post->title ?? '') }}">
@error('title')
    <small class="error">{{ $message }}</small>
@enderror

<label for="content">Isi Artikel</label>
<textarea id="content" name="content" rows="8">{{ old('content', $post->content ?? '') }}</textarea>
@error('content')
    <small class="error">{{ $message }}</small>
@enderror

<p>
    <button type="submit">Simpan</button>
    <a href="{{ route('posts.index') }}">Batal</a>
</p>