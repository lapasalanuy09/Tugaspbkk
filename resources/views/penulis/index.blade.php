<h3>DAFTAR PENULIS</h3>
<a href="{{route('penulis.create')}}">tambah penulis</a>

@if (session()->has('pesan'))
    <div style="color: rgb(33, 239, 198);">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif

@foreach ($penuli as $penuli)
    <div>
        Nama: {{ $penuli->name }}
        <br>
        email: {{ $penuli->email }}
        <br>
        Address: {{ $penuli->address }}
        <br>
        <a href="{{ route('penulis.show', $penuli->id) }}">Lihat</a>
        <a href="{{ route('penulis.edit', $penuli->id) }}">Edit</a>

        <form action="{{ route('penulis.destroy', $penuli->id) }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" value="Hapus">
        </form>
    </div>

    <hr>
@endforeach
