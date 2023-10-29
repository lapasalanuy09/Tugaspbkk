<h3>DAFTAR BUKU</h3>
<a href="{{route('books.create')}}">tambah buku</a>

@if (session()->has('pesan'))
    <div style="color: green;">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif

@foreach ($books as $book)
    <div>
        Judul: {{ $book->title }}
        <br>
        Penulis: {{ $book->author }}
        <br>
        Deskripsi: {{ $book->description }}
        <br>
        <a href="{{ route('books.show', $book->id) }}">Lihat</a>
        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

        <form action="{{ route('books.destroy', $book->id) }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" value="Hapus">
        </form>
    </div>

    <hr>
@endforeach
