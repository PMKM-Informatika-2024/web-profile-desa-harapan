<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layananpublik;
use Illuminate\Support\Facades\Storage;

class LayananPublikController 
{
    public function index(Request $request)
    {
        $kategori = $request->query('kategori', 'pendidikan'); // Default ke 'pendidikan'
        $layananpublik = Layananpublik::where('kategori_fasilitas', $kategori)->get();

        return view('admin.admin-layanan-publik', compact('layananpublik', 'kategori'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $rules = [
            'kategori_fasilitas' => 'required',
            'nama_fasilitas' => 'required',
            'alamat' => 'required',
            'gambar_fasilitas' => 'image|nullable',
            'fasilitas_utama' => 'required',
            'jam_operasional' => 'required',
            'kontak' => 'required',
        ];

        if ($request->kategori_fasilitas === 'pendidikan') {
            $rules = array_merge($rules, [
                'akreditasi' => 'nullable',
                'jumlah_tenaga_pengajar' => 'nullable',
                'jumlah_murid' => 'nullable',
                'visi' => 'nullable',
                'misi' => 'nullable',
            ]);
        }

        $validatedData = $request->validate($rules);

        if ($request->hasFile('gambar_fasilitas')) {
            $validatedData['gambar_fasilitas'] = $request->file('gambar_fasilitas')->store('gambar_yang_tersimpan');
        }

        Layananpublik::create($validatedData);
        return redirect('/layananpublik')->with('success', 'Layanan Publik berhasil ditambahkan');
    }

    public function update(Request $request, Layananpublik $layananpublik)
    {
        dd($request);
        $rules = [
            'kategori_fasilitas' => 'required',
            'nama_fasilitas' => 'required',
            'alamat' => 'required',
            'gambar_fasilitas' => 'image|nullable',
            'fasilitas_utama' => 'required',
            'jam_operasional' => 'required',
            'kontak' => 'required',
        ];

        if ($request->kategori_fasilitas === 'pendidikan') {
            $rules = array_merge($rules, [
                'akreditasi' => 'nullable',
                'jumlah_tenaga_pengajar' => 'nullable',
                'jumlah_murid' => 'nullable',
                'visi' => 'nullable',
                'misi' => 'nullable',
            ]);
        }

        $validatedData = $request->validate($rules);

        if ($request->hasFile('gambar_fasilitas')) {
            // Hapus gambar lama jika ada
            if ($layananpublik->gambar_fasilitas) {
                Storage::delete($layananpublik->gambar_fasilitas);
            }
            $validatedData['gambar_fasilitas'] = $request->file('gambar_fasilitas')->store('gambar_yang_tersimpan');
        }

        $layananpublik->update($validatedData);

        return redirect('/layananpublik')->with('success', 'Layanan Publik berhasil diperbarui');
    }

    public function destroy(Layananpublik $layananpublik)
    {
        // Hapus gambar fasilitas jika ada
        if ($layananpublik->gambar_fasilitas) {
            Storage::delete($layananpublik->gambar_fasilitas);
        }

        $layananpublik->delete();
        return redirect('/layananpublik')->with('success', 'Layanan Publik berhasil dihapus');
    }
}
