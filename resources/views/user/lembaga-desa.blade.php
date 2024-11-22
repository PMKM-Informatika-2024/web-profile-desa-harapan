@extends('layouts.layout')
@section('child')
    
<!-- Banner -->
<section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Lembaga Desa</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Lembaga Desa -->
  <section id="lembaga-desa">
    <div class="container transition-container mt-5">
      <div class="row">
        <div class="container">
          <div class="col-lg-4 col-sm-6 mx-auto">
            <div class="mb-4">
              <div class="card text-center border-0">
                <div class="image-container position-relative p-3">
                  <img src="img/1.jpg" class="image-fluid rounded-circle" alt="Kepala Desa"
                    style="height: 210px; width: 210px; object-fit: cover;">
                </div>
                <div class="card-body" style="font-size: 15px;">
                  <p class="card-title text-danger fw-medium" id="kepala-desa">KEPALA DESA</p>
                  <p class="card-text" id="nama-kepala-desa">Nama Kepala Desa</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="lembaga-card">
                  <div class="lembaga-img-container">
                    <img src="foto-lembaga.jpg" alt="Foto Lembaga Desa" class="lembaga-img"
                      onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <i class="fas fa-building lembaga-icon" style="display:none;"></i>
                  </div>
                  <div class="lembaga-info">
                    <h3 class="lembaga-name">Lembaga Pemberdayaan Masyarakat Desa</h3>
                    <p class="lembaga-alamat">Jl. Desa Sejahtera No. 10</p>
                    <p class="lembaga-ketua">Ketua: Budi Santoso</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="lembaga-card">
                  <div class="lembaga-img-container">
                    <img src="foto-lembaga2.jpg" alt="Foto Lembaga Desa" class="lembaga-img"
                      onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <i class="fas fa-building lembaga-icon" style="display:none;"></i>
                  </div>
                  <div class="lembaga-info">
                    <h3 class="lembaga-name">Karang Taruna Desa</h3>
                    <p class="lembaga-alamat">Jl. Pemuda Desa No. 22</p>
                    <p class="lembaga-ketua">Ketua: Siti Aminah</p>
                  </div>
                </div>
              </div>

              <!-- Tambahkan kartu lainnya di sini -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Lembaga Desa -->
  
  @endsection
