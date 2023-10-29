<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        Judul buku:
        <input type="text" name="title" value="{{ old('title', $book->title) }}" />

        <br>

        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Penulis:
        <input type="text" name="author" value="{{ old('author', $book->author) }}" />

        <br>

        @error('author')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Deskripsi:
        <textarea name="description">{{ old('description', $book->description) }}</textarea>

        <br>

        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
