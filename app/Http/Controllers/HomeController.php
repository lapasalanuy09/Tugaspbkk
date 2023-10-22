<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo 'Ini adalah controller HomeController method index';
    }

    public function abc()
    {
        echo 'Ini adalah controller HomeController method abc';
    }
}
