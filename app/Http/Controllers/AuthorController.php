<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::orderBy('name')->paginate();

        return view('authors.index',  compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|min:12|max:255|email|unique:authors,email',
            'address' => 'nullable|max:255'
        ]);

        Author::create($request->all());

        return redirect()
            ->route('authors.index')
            ->with('success', 'Berhasil menambah data penulis baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        $author->loadCount('books');

        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|min:12|max:255|email|unique:authors,email,' . $author->id,
            'address' => 'nullable|max:255'
        ]);

        $author->update($request->all());

        return redirect()
            ->route('authors.show', $author)
            ->with('success', 'Berhasil memperbarui data penulis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()
            ->route('authors.index')
            ->with('success', 'Berhasil menghapus data penulis');
    }
}
