@extends('layouts.layout')
@section('child')
    

  <!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Perangkat Desa</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Perangkat Desa -->
  <section id="perangkat-desa">
    <div class="container transition-container mt-5">
      <h4 class="subjudul text-center mb-5">STRUKTUR ORGANISASI PEMERINTAHAN <br> DESA HARAPAN <br>2020-2026</h4>
      <div class="row">
        
        <div class="container mt-4">
          <div class="container mt-4">
            <div class="row">
                @foreach ($perangkatdesas as $perangkatdesa)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $perangkatdesa->gambar_perangkatdesa) }}" class="card-img-top" style="object-fit: cover; object-position:top" alt="{{ $perangkatdesa->nama }}"  height="300px">
                            <div class="card-body">
                                <h3 class="card-title">{{ $perangkatdesa->nama }}</h3>
                                <h5 class="card-text">{{ $perangkatdesa->jabatan }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
  
  </section>
  <!-- End of Perangkat Desa -->
  @endsection
