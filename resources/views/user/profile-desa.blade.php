@extends('layouts.layout')
@section('child')
@section('title', 'Profile - Desa Harapan')
    
<!-- End of Navbar -->

<!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Profile Desa</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Content -->
  <section id="sejarah-desa" class="container transition-container py-5">
    <h2 class="subjudul text-center mb-4">Sejarah Desa</h2>
    <div class="row">
      <div class="container">
        <p>{!! $profildesa->sejarah_desa !!}</p>
      </div>
      <div class="container transition-container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <img src="{{ asset('storage/'.$profildesa->gambar_desa_1) }}" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="{{ asset('storage/'.$profildesa->gambar_desa_2) }}" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="{{ asset('storage/'.$profildesa->gambar_desa_3) }}" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="{{ asset('storage/'.$profildesa->gambar_desa_4) }}" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="{{ asset('storage/'.$profildesa->gambar_desa_5) }}" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="{{ asset('storage/'.$profildesa->gambar_desa_6) }}" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End of Content -->

  <!-- Visi Misi -->
  <section id="visi-misi" class="py-5">
    <div class="container transition-container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card-visimisi mb-3">
            <div class="card-header">
              <h5 class="mb-2">Visi</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{!! $profildesa->visi_desa !!}</p>
            </div>
          </div>
          <br>
          <div class="card-visimisi mt-3 mb-5">
            <div class="card-header">
              <h5 class="mb-2">Misi</h5>
            </div>
            <div class="card-body">
              {{-- <ol class="card-text" style="list-style-type: disc;">
                  @foreach (explode("\n", $profildesa->misi_desa) as $misi)
                    <li>{{ $misi }}</li>
                  @endforeach
              </ol> --}}
              <p>{!! $profildesa->misi_desa!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Visi Misi -->

  <!-- Kependudukan -->
  <section id="kependudukan" class="py-5">
    <div class="container-fluid transition-container">
      <h2 class="subjudul mb-5 text-center">Kependudukan</h2>
      <div class="row text-center justify-content-center">
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total Jiwa</h5>
              <span class="counter display-4" data-target="{{ $profildesa->total_jiwa }}">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total KK</h5>
              <span class="counter display-4" data-target="{{ $profildesa->total_kk }}">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Dusun</h5>
              <span class="counter display-4" data-target="{{ $profildesa->total_dusun }}">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Jumlah RT</h5>
              <span class="counter display-4" data-target="{{ $profildesa->total_rt }}">0</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid my-5 mt-1">
        <div class="row text-center justify-content-center">
          <!-- Diagram Lingkaran Suku -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Suku</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="sukuChart"></canvas>
            </div> 
          </div>

          <!-- Diagram Lingkaran Agama -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Agama</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="agamaChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kependudukan -->

  <!-- Kantor Desa -->
  <section id="kantor-desa" class="py-5">
    <div class="container transition-container">
      <h2 class="subjudul text-center mb-4">Kantor Desa & Balai Desa Harapan</h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          {{ $profildesa->kantor_desa }}          
        </div>
      </div>
      <br>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          {!! $profildesa->peta_desa !!}          
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kantor Desa -->
  @endsection
  