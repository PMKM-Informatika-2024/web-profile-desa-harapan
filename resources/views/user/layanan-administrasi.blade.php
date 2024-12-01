@extends('layouts.layout')
@section('child')
@section('title', 'Layanan Administrasi - Desa Harapan')
    
  <!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Layanan Administrasi</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Informasi Layanan -->
  <section>
    <div class="container transition-container py-5 mt-5 mb-5">
      <div class="row">
        @foreach ($layananadministrasi as $key => $administrasi)            
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-house-door-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">{{ $administrasi->nama_layanan }}</h5>
              <p class="card-text">{{ $administrasi->deskripsi }}</p>
            </div>
            
          </div>
          <!-- Konten Accordion -->
          <div class="accordion" id="accordionLayanan">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $key }}">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}"aria-expanded="false" aria-controls="collapse{{ $key }}">
                    Persyaratan :<i class="bi bi-chevron-down toggle-icon"></i>
                  </button>
                </h2>
                <div id="collapse{{ $key }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionLayanan">
                  <div class="accordion-body">
                    <ul>
                      @foreach (explode("\n", $administrasi->persyaratan) as $persyaratan)
                        <li>{!! trim($persyaratan) !!}</li> 
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
            @endforeach
      </div>
    </div>
  </section>
  <!-- End of Informasi Layanan -->
  @endsection