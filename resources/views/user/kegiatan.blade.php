@extends('layouts.layout')
@section('child')
@section('title', 'Kegiatan - Desa Harapan')
    
<!-- Banner -->
<section id="banner">
  <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Kegiatan</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->
  
  <!-- Kegiatan -->
  <section id="kegiatan">
    <div class="container-fluid transition-container py-5 mt-5 mb-5">
      <div class="row">
        <h2 class="subjudul text-center mb-5">Galeri Kegiatan Desa Harapan</h2>
        @foreach ($kegiatan as $k)
          <div class="col-lg-4 g-0 p-3">
            <div class="card-kegiatan position-relative ratio ratio-16x9">
              <img src="{{ asset('storage/' . $k->gambar_kegiatan) }}" alt="" class="img-fluid">
              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100 d-flex align-items-end p-3">
                <h5 class="text-start">{{ $k->nama_kegiatan }}</h5>
              </div>
            </div>
          </div>    
        @endforeach
      </div>
    </div>
  </section>
  <!-- End of Kegiatan -->
  
@endsection
  