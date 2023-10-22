<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function view($absen_mahasiswa)
    {
        $absen = 'hadir';
        $mapel = 'English Session';

        return view('buku.kehadiran', compact('absen', 'mapel'));
    }
}
