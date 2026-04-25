<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //cara ke-1 menampilkan data query builder 
        //$dataBuku = DB::table('buku')->get();

        //cara 2 model ORM
        $dataBuku = Buku::orderBy('id', 'desc')->get();
        //dd($dataBuku);
        return view('pages.buku.daftar-buku', compact('dataBuku'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.buku.form-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->judul);
        $validated = $request->validate(
            [
                'judul'=>'required|min:3',
                'penulis'=>'required|min:3',
                'tahun_terbit'=>'required|numeric',
            ],
            [
                'judul.required'=>'judul buku tidak boleh dikosongkan',
                'judul.min'=>'judul buku terlalu pendek, minimal 3 karakter'
            ]
        );
        $validated['kategori_id'] = 1;
        Buku::create($validated);
        return redirect()->route('buku')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
