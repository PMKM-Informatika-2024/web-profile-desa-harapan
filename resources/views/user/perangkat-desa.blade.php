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
                  @if (strtolower($perangkat->jabatan) == 'kepala desa')
                    <div class="container">
                      <div class="col-lg-4 col-sm-6 mx-auto">
                        <div class="mb-4">
                          <div class="card text-center border-0">
                            <div class="image-container position-relative p-3">
                              <img src="{{ asset('storage/' . $perangkat->gambar_perangkatdesa) }}" class="image-fluid rounded-circle" alt="Kepala Desa"
                                style="height: 210px; width: 210px; object-fit: cover; ;" id="foto-kepala-desa">
                            </div>
                            <div class="card-body" style="font-size: 15px;">
                              <p class="card-title text-danger fw-medium" id="kepala-desa">{{strtoupper($perangkat->jabatan) }}</p>
                              <p class="card-text" id="nama-kepala-desa">{{ strtoupper($perangkat->nama) }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @elseif(strtolower($perangkat->jabatan) == 'sekretaris desa')
                    <div class="container">
                      <div class="col-lg-4 col-sm-6 mx-auto">
                        <div class="mb-4">
                          <div class="card text-center border-0">
                            <div class="image-container position-relative p-3">
                              <img src="{{ asset('storage/' . $perangkat->gambar_perangkatdesa) }}" class="image-fluid rounded-circle" alt="Sekretaris Desa"
                                style="height: 210px; width: 210px; object-fit: cover; ;" id="foto-sekretaris-desa">
                            </div>
                            <div class="card-body" style="font-size: 15px;">
                              <p class="card-title text-danger fw-medium" id="sekretasis-desa">{{strtoupper($perangkat->jabatan) }}</p>
                              <p class="card-text" id="nama-sekretaris-desa">{{ strtoupper($perangkat->nama) }}</p>
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
                                <img src="{{ asset('storage/' . $perangkat->gambar_perangkatdesa) }}" class="image-fluid rounded-circle" alt="Kasi Pemerintahan"
                                  style="height: 210px; width: 210px; object-fit: cover; ;" id="foto-kasi-pemerintahan">
                              </div>
                              <div class="card-body" style="font-size: 15px;">
                                <p class="card-title text-danger fw-medium" id="kasi-pemerintahan">{{ strtoupper($perangkat->jabatan) }}</p>
                                <p class="card-text" id="nama-kasi-pemerintahan">{{ strtoupper($perangkat->nama) }}</p>
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
