@extends('layouts.layout')
@section('kid')
@section('title', 'Detail Pengumuman - Desa Harapan')

    <style>
      nav{
        background: linear-gradient(135deg, #001F3F, #002e5c, #0d2b3f, #213346, #001637);
      }
    </style>
@endsection
@section('child')

<!-- End of Banner -->
  <!-- Pengumuman -->
  <section id="pengumuman" style="margin-top: 120px; margin-bottom: 20px" >
    <div class="container col-lg-8 col-md-10 col-sm-12 my-4 p-4" style="background-color: #f8f9fa; border-radius: 8px;">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="mb-3">{{ $detailpengumuman->judul }}</h3>
          <p class="text-muted mb-1">
            by <span>Admin Desa</span> / <span>{{ $detailpengumuman->created_at->format('d-m-Y') }}</span>
          </p>
        </div>
        <div class="col-12 text-center my-3">
          <img src="{{ asset('storage/'. $detailpengumuman->gambar_pengumuman) }}" alt="Gambar Pengumuman" class="img-fluid"
            style="max-width: 800px; border-radius: 0px;">
        </div>
        <div class="col-12">
          <p class="text-justify mt-3 ms-5 me-5">
            {!! $detailpengumuman->konten !!}
          </p>
        </div>
      </div>
    </div>

  </section>
  <!-- End of Pengumuman -->

@endsection
