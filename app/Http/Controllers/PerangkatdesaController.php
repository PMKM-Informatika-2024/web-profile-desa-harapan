<?php

namespace App\Http\Controllers;

use App\Models\Perangkatdesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PerangkatdesaController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-perangkat-desa', [
            'perangkatdesas' => Perangkatdesa::all()
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
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar_perangkatdesa'=>'image'
        ]);
        if($request->file('gambar_perangkatdesa')) {
            $validatedData['gambar_perangkatdesa'] = $request->file('gambar_perangkatdesa')->store('gambar_yang_tersimpan');
        }
        Perangkatdesa::create($validatedData);
        return redirect('/perangkatdesa')->with('success', 'Perangkat desa baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perangkatdesa $perangkatdesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perangkatdesa $perangkatdesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perangkatdesa $perangkatdesa)
    {
        // dd($perangkatdesa->id);
        // dd($request->input('id'));
        // dd($request->input('oldImage'));
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
        Perangkatdesa::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/perangkatdesa')->with('success', 'Perangkat desa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Perangkatdesa $perangkatdesa)
    {
        // dd($perangkatdesa->gambar_perangkatdesa);
        if($perangkatdesa->gambar_perangkatdesa){
            Storage::delete($perangkatdesa->gambar_perangkatdesa);
        }
        Perangkatdesa::destroy($perangkatdesa->id);
        return redirect('/perangkatdesa')->with('success', 'Perangkat desa berhasil dihapus');
    }
}
