<?php

namespace App\Http\Controllers;

use App\Models\Layananpublik;
use App\Http\Requests\StoreLayananpublikRequest;
use App\Http\Requests\UpdateLayananpublikRequest;
use Illuminate\Http\Request;

class LayananpublikController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-layanan-publik', [
        'layananpublikpendidikan' => Layananpublik::where('kategori_fasilitas', 'pendidikan')->get(),
        'layananpublikkesehatan' => Layananpublik::where('kategori_fasilitas', 'kesehatan')->get()

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'kategori_fasilitas' => 'required',
            'nama_fasilitas' => 'required',
            'url_alamat' => 'required',
            'gambar_fasilitas'=>'image'
        ]);
        if($request->file('gambar_fasilitas')) {
            $validatedData['gambar_fasilitas'] = $request->file('gambar_fasilitas')->store('gambar_yang_tersimpan');
        }
        Layananpublik::create($validatedData);
        return redirect('/layananpublik')->with('success', 'layanan Publik berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layananpublik $layananpublik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layananpublik $layananpublik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLayananpublikRequest $request, Layananpublik $layananpublik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layananpublik $layananpublik)
    {
        //
    }
}
