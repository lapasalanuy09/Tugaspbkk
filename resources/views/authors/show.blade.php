@extends('layouts.master')
@section('title', $author->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h1 class="subheader">Data Penulis</h1>

                <a href="{{ route('authors.index') }}" class="btn btn-primary btn-rounded btn-sm btn-30">Kembali</a>
            </div>

            <div class="card mt-3">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td>Nama</td>
                            <td><span class="font-weight-bold">{{ $author->name }}</span></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><span class="font-weight-bold">{{ $author->email }}</span></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><span class="font-weight-bold">{{ $author->address }}</span></td>
                        </tr>
                        <tr>
                            <td>Jumlah Buku</td>
                            <td><span class="font-weight-bold">{{ $author->books_count }}</span></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end gap-1">
                    <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning btn-rounded btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm btn-rounded btn-delete">Hapus</a>
                </div>
            </div>

            <h4 class="semibold mt-4">Buku</h4>
            <div class="card mt-2">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($author->books as $book)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $book->title }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('books.show', $book) }}"
                                            class="btn btn-sm btn-success btn-rounded">Lihat</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_html')
    <form action="{{ route('authors.destroy', $author) }}" method="post" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
@endsection

@push('custom_js')
    <script>
        let btnDelete = document.querySelector('.btn-delete');
        let deleteForm = document.querySelector('#delete-form');

        btnDelete.addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteForm.submit();
                }
            })
        });
    </script>
@endpush