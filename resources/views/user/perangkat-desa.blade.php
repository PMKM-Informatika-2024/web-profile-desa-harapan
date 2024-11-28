@extends('layouts.layout')
@section('child')
@section('title', 'Perangkat Desa - Desa Harapan')

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
                @foreach ($perangkatdesa as $perangkat)
                  @if ($perangkat->jabatan == 'KEPALA DESA')
                    <div class="container">
                      <div class="col-lg-4 col-sm-6 mx-auto">
                        <div class="mb-4">
                          <div class="card text-center border-0">
                            <div class="image-container position-relative p-3">
                              <img src="" class="image-fluid rounded-circle" alt="Kepala Desa"
                                style="height: 210px; width: 210px; object-fit: cover; display: none;" id="foto-kepala-desa">
                              <i class="fas fa-user-circle fa-10x text-muted" id="ikon-kepala-desa"></i>
                            </div>
                            <div class="card-body" style="font-size: 15px;">
                              <p class="card-title text-danger fw-medium" id="kepala-desa"{{ $perangkat->jabatan }}</p>
                              <p class="card-text" id="nama-kepala-desa">{{ $perangkat->nama }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @elseif($perangkat->jabatan == 'SEKRETARIS DESA')
                    <div class="container">
                      <div class="col-lg-4 col-sm-6 mx-auto">
                        <div class="mb-4">
                          <div class="card text-center border-0">
                            <div class="image-container position-relative p-3">
                              <img src="" class="image-fluid rounded-circle" alt="Sekretaris Desa"
                                style="height: 210px; width: 210px; object-fit: cover; display: none;" id="foto-sekretaris-desa">
                              <i class="fas fa-user-circle fa-10x text-muted" id="ikon-sekretaris-desa"></i>
                            </div>
                            <div class="card-body" style="font-size: 15px;">
                              <p class="card-title text-danger fw-medium" id="sekretasis-desa">{{ $perangkat->jabatan }}</p>
                              <p class="card-text" id="nama-sekretaris-desa">{{ $perangkat->nama }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  
                  @else
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="mb-4">
                            <div class="card text-center overflow-hidden border-0">
                              <div class="image-container position-relative p-3">
                                <img src="" class="image-fluid rounded-circle" alt="Kasi Pemerintahan"
                                  style="height: 210px; width: 210px; object-fit: cover; display: none;" id="foto-kasi-pemerintahan">
                                <i class="fas fa-user-circle fa-10x text-muted" id="ikon-kasi-pemerintahan"></i>
                              </div>
                              <div class="card-body" style="font-size: 15px;">
                                <p class="card-title text-danger fw-medium" id="kasi-pemerintahan">{{ $perangkat->jabatan }}</p>
                                <p class="card-text" id="nama-kasi-pemerintahan">{{ $perangkat->nama }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                  @endif
                @endforeach
            </div>
        </div>
        
  
  </section>
  <!-- End of Perangkat Desa -->
  @endsection
