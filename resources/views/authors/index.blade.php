@extends('layouts.master')
@section('title', 'Kelola Penulis')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h1 class="subheader">Kelola Penulis</h1>

                <a href="{{ route('authors.create') }}" class="btn btn-primary btn-rounded btn-sm btn-30"><i
                        class="fa fa-plus"></i> Tambah</a>
            </div>

            <div class="card mt-3">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author->email }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('authors.show', $author) }}"
                                            class="btn btn-sm btn-success btn-rounded">Lihat</a>
                                        <a href="{{ route('authors.edit', $author) }}"
                                            class="btn btn-sm btn-warning btn-rounded">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $authors->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection