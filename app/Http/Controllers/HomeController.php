<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function abc()
    {
        echo 'Ini adalah controller HomeController method abc';
        return view('welcome');
    }
}
