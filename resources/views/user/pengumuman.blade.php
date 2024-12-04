@extends('layouts.layout')
@section('child')
@section('title', 'Pengumuman - Desa Harapan')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Pengumuman</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Pengumuman -->
    <section id="pengumuman" class="py-5">
        <div class="container transition-container mb-3 justify-content-center">
            <h2 class="subjudul text-center fw-bold">Pengumuman</h2>
            <hr class=" mb-5 " style="width: 150px; margin: 0 auto; border: 2px solid black; opacity: 1; margin-top:10px">
            <div class="row g-4 justify-content-center">
                @foreach ($pengumuman as $p)
                    <div class="col-lg-4 col-md-6">
                        <!-- Card Klikable -->
                        <div class="card shadow-sm border-0 h-100">
                            <a href="/detailpengumuman/{{ $p->id }}" target="_blank" class="text-decoration-none">
                                    
                                <!-- Gambar -->
                                <img src="{{ asset('storage/' . $p->gambar_pengumuman) }}" 
                                style="height: 200px; object-fit: cover; object-position: center;" 
                                    class="card-img-top rounded-top">
                                <!-- Konten -->
                                <div class="card-body d-flex flex-column p-3">
                                    <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 0.8rem;">
                                        <!-- Ikon Tanggal -->
                                        <span>
                                            <i class="fas fa-calendar-alt" style="margin-right: 8px;"></i>
                                            {{ $p->created_at->format('d-m-Y') }}
                                        </span>
                                        <!-- Ikon Penulis -->
                                        <span>
                                            <i class="fas fa-user" style="margin-right: 8px;"></i>
                                            Admin
                                        </span>
                                    </div>
                                    <!-- Judul -->
                                    <h5 class="card-title fw-bold text-dark mb-1" style="margin-top:3px;">
                                        {{ $p->judul }}
                                    </h5>
                                    <!-- Deskripsi Singkat -->
                                    <p class="card-text text-muted small">
                                        <p>{{ $p->deskripsi_singkat }}
                                        </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- End of Pengumuman -->
@endsection
