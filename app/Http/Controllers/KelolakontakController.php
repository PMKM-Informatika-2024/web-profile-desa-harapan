<?php

namespace App\Http\Controllers;

use App\Models\Kelolakontak;
use Illuminate\Http\Request;
class KelolakontakController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $kontak = Kelolakontak::first();
        // dd($kontak); // Akan menampilkan isi $kontak di layar
        return view('admin.admin-kontak', [
            'kontak' => Kelolakontak::first()
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
    public function show(Kelolakontak $kelolakontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelolakontak $kelolakontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelolakontak $kelolakontak)
    {
        $validatedData = $request->validate([
            'no_whatsapp' => 'required',
            'username_instagram' => 'required',
            'username_facebook' => 'required',
            'email' => 'required'
        ]);
        Kelolakontak::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/kontak')->with('success', 'Kontak berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelolakontak $kelolakontak)
    {
        // 
    }
}
