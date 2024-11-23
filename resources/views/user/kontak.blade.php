@extends('layouts.layout')
@section('child')
    
  <!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Kontak Desa</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Kontak -->
  <section id="kontak">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
          <img src="/image/kontak.jpg" class="img-fluid image-kontak rounded" alt="Kontak Kami">
        </div>

        <!-- Info Kontak -->
        <div class="col-lg-6 py-5 mt-5">
          <h2 class="subjudul">Hubungi Kami</h2>

          <!-- WhatsApp Section -->
          <div class="d-flex align-items-center mt-3">
            <div class="me-3">
              <i class="fab fa-whatsapp fa-5x" style="color:#25D366;"></i>
            </div>
            <div>
              <p class="mb-1">Whatsapp</p>
              <p><a href="https://wa.me/your-wa-number" target="_blank">0888 xxxx xxxx</a></p>
            </div>
          </div>

          <!-- Instagram Section -->
          <div class="d-flex align-items-center mt-3">
            <div class="me-3">
              <i class="fab fa-instagram fa-5x" style="color: #E1306C;"></i>
            </div>
            <div>
              <p class="mb-1">Instagram</p>
              <p><a href="https://www.instagram.com/your-ig" target="_blank">@sungai_keran</a></p>
            </div>
          </div>

          <!-- Email Section -->
          <div class="d-flex align-items-center mt-3">
            <div class="me-3">
              <i class="fas fa-envelope fa-5x" style="color: #007bff;"></i>
            </div>
            <div>
              <p class="mb-1">Email</p>
              <p><a href="mailto:your.email" target="_blank">desaharapan@gmail.com</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End of Kontak -->
@endsection