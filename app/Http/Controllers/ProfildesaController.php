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
            'gambar_desa_1' => 'image',
            'gambar_desa_2' => 'image',
            'gambar_desa_3' => 'image',
            'gambar_desa_4' => 'image',
            'gambar_desa_5' => 'image',
            'gambar_desa_6' => 'image',
            'visi_desa' => 'required',
            'misi_desa' => 'required',
            'total_jiwa' => 'required|integer',
            'total_kk' => 'required|integer',
            'total_dusun' => 'required|integer',
            'total_rt' => 'required|integer',
            'suku_melayu' => 'required|integer',
            'suku_melayusambas' => 'required|integer',
            'suku_tionghoa' => 'required|integer',
            'suku_dayak' => 'required|integer',
            'suku_jawa' => 'required|integer',
            'suku_bugis' => 'required|integer',
            'suku_lainnya' => 'required|integer',
            'agama_islam' => 'required|integer',
            'agama_katolik' => 'required|integer',
            'agama_protestan' => 'required|integer',
            'agama_buddha' => 'required|integer',
            'agama_hindu' => 'required|integer',
            'agama_konghucu' => 'required|integer',
            'peta_desa' => 'required',
            'kantor_desa' => 'required',

        ]);

        $gambarFields = [
            'gambar_desa_1', 'gambar_desa_2', 'gambar_desa_3',
            'gambar_desa_4', 'gambar_desa_5', 'gambar_desa_6'
        ];
        
        foreach ($gambarFields as $field) {
            if ($request->file($field)) {
                // Hapus gambar lama jika ada
                if ($request->input('oldImage' . substr($field, -1))) {
                    Storage::delete($request->input('oldImage' . substr($field, -1)));
                }
                // Simpan gambar baru
                $validatedData[$field] = $request->file($field)->store('gambar_yang_tersimpan');
            }
        }
        

        // if($request->file('gambar_desa_1')) {
        //     if($request->oldImage1){
        //         Storage::delete($request->oldImage1);
        //     }
        //     $validatedData['gambar_desa_1'] = $request->file('gambar_desa_1')->store('gambar_yang_tersimpan');
        // }
        // if($request->file('gambar_desa_2')) {
        //     if($request->oldImage2){
        //         Storage::delete($request->oldImage2);
        //     }
        //     $validatedData['gambar_desa_2'] = $request->file('gambar_desa_2')->store('gambar_yang_tersimpan');
        // }
        // if($request->file('gambar_desa_3')) {
        //     if($request->oldImage3){
        //         Storage::delete($request->oldImage3);
        //     }
        //     $validatedData['gambar_desa_3'] = $request->file('gambar_desa_3')->store('gambar_yang_tersimpan');
        // }
        // if($request->file('gambar_desa_4')) {
        //     if($request->oldImage4){
        //         Storage::delete($request->oldImage4);
        //     }
        //     $validatedData['gambar_desa_4'] = $request->file('gambar_desa_4')->store('gambar_yang_tersimpan');
        // }
        // if($request->file('gambar_desa_5')) {
        //     if($request->oldImage5){
        //         Storage::delete($request->oldImage5);
        //     }
        //     $validatedData['gambar_desa_5'] = $request->file('gambar_desa_5')->store('gambar_yang_tersimpan');
        // }
        // if($request->file('gambar_desa_6')) {
        //     if($request->oldImage6){
        //         Storage::delete($request->oldImage6);
        //     }
        //     $validatedData['gambar_desa_6'] = $request->file('gambar_desa_6')->store('gambar_yang_tersimpan');
        // }

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
