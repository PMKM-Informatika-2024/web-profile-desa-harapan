<?php

namespace App\Http\Controllers;

use App\Models\Videoprofile;
use Illuminate\Http\Request;

class VideoprofileController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-video-profile',[
            'videoprofile' => Videoprofile::first(),
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videoprofile $videoprofile)
    {
        // dd($request);
        $validatedData = $request->validate([
            'url_video' => 'required',
        ]);
        Videoprofile::where('id', $videoprofile->id)
            ->update($validatedData);

        return redirect('/videoprofile')->with('success', 'Video Profile Desa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
