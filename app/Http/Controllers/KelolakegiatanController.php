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
        return view('admin.admin-kegiatan', [
            'kelolakegiatans' => Kelolakegiatan::all()
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
        // dd($request);
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required',
            'gambar_kegiatan'=>'image'
        ]);
        if($request->file('gambar_kegiatan')) {
            $validatedData['gambar_kegiatan'] = $request->file('gambar_kegiatan')->store('gambar_yang_tersimpan');
        }
        Kelolakegiatan::create($validatedData);
        return redirect('/kegiatan')->with('success', 'Kegiatan Desa baru berhasil ditambahkan');
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
        // dd($request);
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required',
            'gambar_kegiatan'=>'image'
        ]);
        if($request->file('gambar_kegiatan')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_kegiatan'] = $request->file('gambar_kegiatan')->store('gambar_yang_tersimpan');
        }

        Kelolakegiatan::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // dd($perangkatdesa->gambar_perangkatdesa);
        // dd($request->gambar_kegiatan);
        if($request->gambar_kegiatan){
            Storage::delete($request->gambar_kegiatan);
        }
        Kelolakegiatan::destroy($request->id);
        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil dihapus');
    }
}
