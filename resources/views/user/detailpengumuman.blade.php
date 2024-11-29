@extends('layouts.layout')
@section('child')
    

  <!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="text-center">
                <h1 class="text-banner">Detail Pengumuman</h1>
            </div>
        </div>
    </div>
</section>
<!-- End of Banner -->
  <!-- Pengumuman -->
  <section id="pengumuman">
    <div class="container col-lg-8 col-md-10 col-sm-12 my-4 p-4" style="background-color: #f8f9fa; border-radius: 8px;">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="mb-3">{{ $detailpengumuman->judul }}</h3>
          <p class="text-muted mb-1">
            by <span>Admin Desa</span> / <span>{{ $detailpengumuman->created_at }}</span>
          </p>
        </div>
        <div class="col-12 text-center my-3">
          <img src="{{ asset('storage/'. $detailpengumuman->gambar_pengumuman) }}" alt="Gambar Pengumuman" class="img-fluid"
            style="max-width: 700px; border-radius: 0px;">
        </div>
        <div class="col-12">
          <p class="text-justify mt-3 ms-5 me-5">
            {{ $detailpengumuman->konten }}
          </p>
        </div>
      </div>
    </div>

  </section>
  <!-- End of Pengumuman -->

@endsection
