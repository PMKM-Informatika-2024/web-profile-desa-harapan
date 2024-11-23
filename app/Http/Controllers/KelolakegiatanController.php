<?php

namespace App\Http\Controllers;

use App\Models\Kelolakegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelolakegiatanController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-kegiatan', []);
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
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar_perangkatdesa'=>'image'
        ]);
        if($request->file('gambar_perangkatdesa')) {
            $validatedData['gambar_perangkatdesa'] = $request->file('gambar_perangkatdesa')->store('gambar_yang_tersimpan');
        }
        Kelolakegiatan::create($validatedData);
        return redirect('/perangkatdesa')->with('success', 'Perangkat desa baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelolakegiatan $kelolakegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelolakegiatan $kelolakegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelolakegiatan $kelolakegiatan)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar_perangkatdesa' => 'image'
        ]);
        if($request->file('gambar_perangkatdesa')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_perangkatdesa'] = $request->file('gambar_perangkatdesa')->store('gambar_yang_tersimpan');
        }
        Kelolakegiatan::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/perangkatdesa')->with('success', 'Perangkat desa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelolakegiatan $kelolakegiatan)
    {
        // dd($perangkatdesa->gambar_perangkatdesa);
        if($kelolakegiatan->gambar_perangkatdesa){
            Storage::delete($kelolakegiatan->gambar_perangkatdesa);
        }
        Kelolakegiatan::destroy($kelolakegiatan->id);
        return redirect('/perangkatdesa')->with('success', 'Perangkat desa berhasil dihapus');
    }
}
