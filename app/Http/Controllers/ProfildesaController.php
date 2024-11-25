<?php

namespace App\Http\Controllers;

use App\Models\Profildesa;
use Illuminate\Http\Request;

class ProfildesaController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-profile-desa', [
            'profildesa' => Profildesa::first()
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profildesa $profildesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profildesa $profildesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profildesa $profildesa)
    {
        $validatedData = $request->validate([
            'nama_desa' => 'required',
            'sejarah_desa' => 'required',
            'gambar_desa' => 'image',
            'visi_desa' => 'required',
            'misi_desa' => 'required',
            'total_jiwa' => 'required',
            'total_kk' => 'required',
            'total_dusun' => 'required',
            'total_rt' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'peta_desa' => 'required',
            'kantor_desa' => 'required',

        ]);
        Profildesa::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/profildesa')->with('success', 'Profil Desa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profildesa $profildesa)
    {
        //
    }
}
