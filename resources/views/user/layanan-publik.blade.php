@extends('layouts.layout')
@section('child')
@section('title', 'Layanan Publik - Desa Harapan')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Layanan Publik</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Fasilitas Pendidikan -->
    <section id="fasilitaspendidikan">
        <div class="container-fluid transition-container py-5 mt-5 mb-5">
          <div class="row">
            <h2 class="subjudul text-center mb-5">Fasilitas Pendidikan</h2>
            @foreach ($fasilitaspendidikan as $fpen)
                <div class="col-lg-4 col-md-6 g-0">
                    <div class="card-sekolah position-relative p-3">
                        <img src="{{ asset('storage/' . $fpen->gambar_fasilitas) }}" alt="{{ $fpen->nama_fasilitas }}" class="img-fluid">
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-90">
                                <h5>{{ $fpen->nama_fasilitas }}</h5>
                                <a href="{{ $fpen->url_alamat }}" target="_blank" class="btn btn-primary">Alamat</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </section>
    <!-- End of Fasilitas Pendidikan -->
<br>
<hr>
    <!-- Fasilitas Publik -->
    <section id="fasilitaspublik">
        <div class="container-fluid transition-container py-5 mt-5 mb-5">
          <div class="row">
            <h2 class="subjudul text-center mb-5">Fasilitas Publik</h2>
            @foreach ($fasilitaspublik as $fpub)
                <div class="col-lg-4 col-md-6 g-0">
                    <div class="card-sekolah position-relative p-3">
                        <img src="{{ asset('storage/' . $fpub->gambar_fasilitas) }}" alt="{{ $fpub->nama_fasilitas }}" class="img-fluid">
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-90">
                                <h5>{{ $fpub->nama_fasilitas }}</h5>
                                <a href="{{ $fpub->url_alamat }}" target="_blank" class="btn btn-primary">Alamat</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </section>
    <!-- End of Fasilitas Publik -->
@endsection
