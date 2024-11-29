<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class PengumumanController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-pengumuman', [
            'pengumumen' => Pengumuman::all()
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
            'judul' => 'required',
            'deskripsi_singkat' => 'required',
            'gambar_pengumuman'=>'image',
            'konten' => 'required',
        ]);
        if($request->file('gambar_pengumuman')) {
            $validatedData['gambar_pengumuman'] = $request->file('gambar_pengumuman')->store('gambar_yang_tersimpan');
        }
        Pengumuman::create($validatedData);
        return redirect('/pengumuman')->with('success', 'Pengumuman baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('/user/detailpengumuman',[
            'pengumuman' => $pengumuman,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        // dd($request);
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi_singkat' => 'required',
            'gambar_pengumuman' => 'image',
            'konten' => 'required',
        ]);
        if($request->file('gambar_pengumuman')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_pengumuman'] = $request->file('gambar_pengumuman')->store('gambar_yang_tersimpan');
        }
        pengumuman::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/pengumuman')->with('success', 'Pengumuman berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        // dd($request);
        if($pengumuman->gambar_pengumuman){
            Storage::delete($pengumuman->gambar_pengumuman);
        }
        pengumuman::destroy($pengumuman->id);
        return redirect('/pengumuman')->with('success', 'Pengumuman berhasil dihapus');
    }
}
