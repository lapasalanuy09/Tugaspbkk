<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function view($npm)
    {
        $nama = 'Ratna';
        $npm = 'G1A021025';

        return view('mahasiswa.view', compact('npm', 'nama'));
    }
}
