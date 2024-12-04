<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layananpublik;
use Illuminate\Support\Facades\Storage;

class LayananpublikController 
{
    public function index(Request $request)
    {
        return view('admin.admin-layanan-publik',[
            'fasilitaspendidikan' => Layananpublik::where('kategori_fasilitas','pendidikan')->get(),
            'fasilitaspublik' => Layananpublik::where('kategori_fasilitas','publik')->get(),
            'layananpublik' => Layananpublik::all(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'kategori_fasilitas' => 'required',
            'nama_fasilitas' => 'required',
            'alamat'=>'required',
            'url_alamat'=>'required',
            'gambar_fasilitas' => 'image',
        ]);
        if($request->file('gambar_fasilitas')) {
            $validatedData['gambar_fasilitas'] = $request->file('gambar_fasilitas')->store('gambar_yang_tersimpan');
        }
        Layananpublik::create($validatedData);
        return redirect('/layananpublik')->with('success', 'Fasilitas baru berhasil ditambahkan');


       
    }

    public function update(Request $request, Layananpublik $layananpublik)
    {
        // dd($request);
        $validatedData = $request->validate([
            'kategori_fasilitas' => 'required',
            'nama_fasilitas' => 'required',
            'alamat' => 'required',
            'url_alamat' => 'required',
            'gambar_fasilitas' => 'image',
        ]);
        if($request->file('gambar_fasilitas')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_fasilitas'] = $request->file('gambar_fasilitas')->store('gambar_yang_tersimpan');
        }
        Layananpublik::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/layananpublik')->with('success', 'Pengumuman berhasil diupdate');
    }

    public function destroy(Layananpublik $layananpublik)
    {
        // Hapus gambar fasilitas jika ada
        if ($layananpublik->gambar_fasilitas) {
            Storage::delete($layananpublik->gambar_fasilitas);
        }

        $layananpublik->delete();
        return redirect('/layananpublik')->with('success', 'Fasilitas berhasil dihapus');
    }
}
