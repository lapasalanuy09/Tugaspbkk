<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        //1. validasi
        $request->validate([
            'title' => 'required|max:255|unique:books,title',
            'author' => 'required|max:255',
            'description' => 'nullable',
        ]);

        //2. masukan data ke database
        $book = new Book();

        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;

        $book->save();

        //3. redirect
        return redirect()
            ->route('books.index')
            ->with('pesan', 'Data berhasil disimpan');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        //1. validasi
        $request->validate([
            'title' => 'required|max:255|unique:books,title,' . $book->id,
            'author' => 'required|max:255',
            'description' => 'nullable',
        ]);

        //2. update
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;

        $book->save();

        //3. redirect
        return redirect()
            ->route('books.index')
            ->with('pesan', 'Data berhasil diupdate');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
