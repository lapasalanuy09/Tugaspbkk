<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penuli = Penulis::all();

        return view('penulis.index', compact('penuli'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                //1. validasi
                $request->validate([
                    'name' => 'required|max:255',
                    'email' => 'required|max:255|unique:penulis,email',
                    'address' => 'nullable',
                ]);

                //2. masukan data ke database
                $penuli = new Penulis();

                $penuli->name = $request->name;
                $penuli->email = $request->email;
                $penuli->address = $request->address;

                $penuli->save();

                //3. redirect
                return redirect()
                    ->route('penulis.index')
                    ->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(penulis $penuli)
    {
        return view('penulis.show', compact('penuli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penulis $penuli)
    {
        return view('penulis.edit', compact('penuli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penulis $penuli)
    {
//1. validasi
        $request->validate([
            'name' => 'required|max:255' . $penuli->id,
            'email' => 'required|max:255|unique:penulis,email',
            'address' => 'nullable',
        ]);

        //2. update
        $penuli->name = $request->name;
        $penuli->email = $request->email;
        $penuli->address = $request->address;

        $penuli->save();

        //3. redirect
        return redirect()
            ->route('penulis.index')
            ->with('pesan', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penulis $penuli)
    {
        $penuli->delete();

        return redirect()
            ->route('penulis.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
