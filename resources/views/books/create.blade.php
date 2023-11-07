<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div>
        Judul buku:
        <input type="text" name="title" value="{{ old('title') }}">
        <br>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Penulis:
        <input type="text" name="author" value="{{ old('author') }}">
        <select name="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>

        <br>

        @error('author')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        Deskripsi:
        <textarea name="description">{{ old('description') }}</textarea>
        <br>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="Simpan">
    </div>
</form>