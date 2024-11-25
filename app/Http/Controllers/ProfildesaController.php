<?php

namespace App\Http\Controllers;

use App\Models\Profildesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // dd($request);
        $validatedData = $request->validate([
            'nama_desa' => 'required',
            'sejarah_desa' => 'required',
            'gambar_desa' => 'image',
            'visi_desa' => 'required',
            'misi_desa' => 'required',
            'total_jiwa' => 'required|integer',
            'total_kk' => 'required|integer',
            'total_dusun' => 'required|integer',
            'total_rt' => 'required|integer',
            // 'suku' => 'required',
            // 'agama' => 'required',
            'peta_desa' => 'required',
            'kantor_desa' => 'required',

        ]);

        if($request->file('gambar_desa')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_desa'] = $request->file('gambar_desa')->store('gambar_yang_tersimpan');
        }

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
