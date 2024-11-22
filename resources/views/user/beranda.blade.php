<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Desa Sungai Keran</title>
  <link rel="stylesheet" href="/css/style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&family=Lora:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&family=OpenSans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .nav-item.dropdown:hover .dropdown-menu {
  display: block;
}
</style>
<body>

  <!-- Navbar -->
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark p-md-3">
      <div class="container-fluid">
        <a class="navbar-brand ms-3 d-flex align-items-center" href="#">
          <img src="image/logo.png" width="50" class="me-2">
          <span style="line-height: 1.1; font-size:medium;">
            Desa<br>
            Sungai<br>
            Keran
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="color: #f8f9fa;">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active-link' : '' }}" href="/" id="beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('profile-desa') ? 'active-link' : '' }}" href="/profile-desa" id="profile-desa">Profile Desa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('perangkat-desa') || Request::is('lembaga-desa') ? 'active-link' : '' }}" href="#" id="pemerintahan-desa" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Pemerintahan Desa
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/perangkat-desa" id="perangkat-desa">Perangkat Desa</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/lembaga-desa" id="lembaga-desa">Lembaga Desa</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('layanan-publik') ? 'active-link' : '' }}" href="/layanan-publik" id="layanan-publik">Layanan Publik</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="informasi-publik" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Informasi Publik
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item {{ Request::is('daftar-pengumuman') || Request::is('daftar-kegiatan') ? 'active-link' : '' }}" href="/layanan-administrasi" id="layanan-administrasi">Layanan
                    Administrasi Desa</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/daftar-pengumuman" id="pengumuman">Pengumuman</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/daftar-kegiatan" id="kegiatan">Kegiatan</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
              <a class="nav-link" href="/daftar-kontak"
                style="color:#f8f9fa ; background-color: #1E90FF; border-radius: 8px; padding-left: 15px; padding-right: 15px;">Kontak</a>
            </li>
          </ul>
          <!-- Tombol Close -->
          <button id="closeSidebar" class="btn-close" aria-label="Close"></button>
        </div>
      </div>
    </nav>
  </section>
  <!-- End of Navbar -->

  <!-- Banner -->
  <section id="banner-beranda">
    <div class="container-fluid banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h2 class="text-banner-h2"> Selamat Datang di </h2>
          <h1 class="text-banner-h1">Desa Sungai Keran</h1>
        </div>
        <div class="text-center mt-3">
          <a href="/profile-desa" class="btn-more">Lihat..</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->


  <!-- Content -->
  <section id="content" class="py-5">
    <div class="container transition-container col-lg-9 mt-5">
      <div class="row align-items-center">
        <div class="col-lg-5 mt-3 d-flex flex-column justify-content-between">
          <h2 class="subjudul">Mengenal Tentang Desa Sungai Keran...</h2>
          <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Nobis, dolorem. Odio
            impedit consequatur ipsam
            assumenda est quidem molestias deserunt eaque ad quis molestiae reiciendis optio
            blanditiis neque atque
            architecto laborum quibusdam voluptas nam, maiores cum eius voluptatem. Ab,
            blanditiis iusto sapiente nam
            iure provident culpa? Pariatur possimus modi consectetur nihil!.......</p>
          <a href="profil-desa.html" class="btn-more mt-5 ">Selengkapnya..</a>
        </div>
        <div class="col-lg-7 mt-3">
          <img src="img/1.jpg" class="image shadow-lg" alt="Desa Sungai Keran">
        </div>
      </div>
    </div>
  </section>
  <!-- End of Content -->

  <!-- Perangkat Desa -->
  <section id="perangkat-desa" class="py-5 mb-5">
    <div class="container-fluid transition-container perangkat-desa-container shadow">
      <div class="row mb-2 justify-content-center text-center">
        <div class="col-12">
          <h2 class="subjudul text-center">Perangkat Desa</h2>
        </div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-4 col-sm-6"> <!-- Ubah ukuran kolom -->
                <img src="img/1.jpg" class="d-block w-100 rounded shadow img-hover" alt="Kepala Desa">
                <div class="overlay">
                  <h5 class="text-center mt-2">Kepala Desa</h5>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6"> <!-- Ubah ukuran kolom -->
                <img src="img/2.jpg" class="d-block w-100 rounded shadow img-hover" alt="Sekretaris Desa">
                <div class="overlay">
                  <h5 class="text-center mt-2">Sekretaris Desa</h5>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6"> <!-- Ubah ukuran kolom -->
                <img src="img/3.jpg" class="d-block w-100 rounded shadow img-hover" alt="Kasi Pemerintahan">
                <div class="overlay">
                  <h5 class="text-center mt-2">Kasi Pemerintahan</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-4 col-sm-6"> <!-- Ubah ukuran kolom -->
                <img src="img/4.jpg" class="d-block w-100 rounded shadow img-hover" alt="Perangkat 4">
                <div class="overlay">
                  <h5 class="text-center mt-2">Perangkat 4</h5>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6"> <!-- Ubah ukuran kolom -->
                <img src="img/5.jpg" class="d-block w-100 rounded shadow img-hover" alt="Perangkat 5">
                <div class="overlay">
                  <h5 class="text-center mt-2">Perangkat 5</h5>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6"> <!-- Ubah ukuran kolom -->
                <img src="img/6.jpg" class="d-block w-100 rounded shadow img-hover" alt="Perangkat 6">
                <div class="overlay">
                  <h5 class="text-center mt-2">Perangkat 6</h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div class="row">
          <div class="col-lg-12 text-end pe-5 pb-3">
            <a href="perangkat-desa.html" class="btn-more">Selengkapnya...</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End of Perangkat Desa -->

  <!-- Pengumuman -->
  <section id="pengumuman" class="py-5">
    <div class="container transition-container mb-3 justify-content-center">
      <div class="row">
        <h2 class="subjudul text-center mb-5">Pengumuman</h2>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text text-muted">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text text-muted">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text text-muted">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Pengumuman -->

  <!-- Footer -->
  <footer class="d-flex flex-column align-items-center text-center text-dark bg-light p-4">
    <p>Copyright &copy; 2024 Desa Sungai Keran</p>
    <!-- Social Media Links -->
    <div class="contact-icons d-flex justify-content-center mt-0">
      <a href="https://wa.me/your-wa-number" target="_blank"><i class="fab fa-whatsapp"></i></a>
      <a href="https://www.instagram.com/your-ig" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="mailto:your-email" target="_blank"><i class="fas fa-envelope"></i></a>
    </div>
  </footer>

  <!-- Tombol Kembali ke Atas -->
  <button onclick="scrollToTop()" id="backToTopBtn" class="btn">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script>

    // Navbar
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    const scrollThreshold = 150; // Batas scroll untuk memicu hide

    window.addEventListener('scroll', function () {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Sembunyikan navbar saat scroll ke bawah
      if (scrollTop > scrollThreshold) {
        navbar.style.top = '-100px';
      }
      // Tampilkan navbar hanya saat di posisi paling atas
      else if (scrollTop === 0) {
        navbar.style.top = '0';
      }
    });


    // Menutup sidebar
    document.addEventListener('DOMContentLoaded', function () {
      const navbarCollapse = document.getElementById('navbarSupportedContent');
      const closeBtn = document.getElementById('closeSidebar');
      const toggleBtn = document.querySelector('.navbar-toggler');

      // Event listener untuk membuka dan menutup sidebar
      toggleBtn.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');
      });

      // Event listener untuk menutup sidebar menggunakan tombol 'X'
      closeBtn.addEventListener('click', function () {
        navbarCollapse.classList.remove('show'); // Menutup sidebar
        closeBtn.style.display = 'none'; // Sembunyikan tombol 'X'
        toggleBtn.style.display = 'block'; // Tampilkan ikon sidebar
      });

      // Event listener untuk menghilangkan ikon sidebar saat sidebar terbuka
      navbarCollapse.addEventListener('show.bs.collapse', function () {
        closeBtn.style.display = 'block'; // Tampilkan tombol 'X'
        toggleBtn.style.display = 'none'; // Sembunyikan ikon toggler
      });

      // Event listener untuk mengembalikan ikon sidebar saat sidebar ditutup
      navbarCollapse.addEventListener('hide.bs.collapse', function () {
        closeBtn.style.display = 'none'; // Sembunyikan tombol 'X'
        toggleBtn.style.display = 'block'; // Tampilkan ikon toggler
      });
    });


    // Ketika user scroll, tampilkan tombol
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      let backToTopBtn = document.getElementById("backToTopBtn");

      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopBtn.style.display = "block"; // Tampilkan tombol jika scroll lebih dari 20px
      } else {
        backToTopBtn.style.display = "none";  // Sembunyikan tombol jika posisi di atas
      }
    }

    // Fungsi untuk scroll ke atas
    function scrollToTop() {
      document.body.scrollTop = 0; // Untuk Safari
      document.documentElement.scrollTop = 0; // Untuk browser lain
    }

    // Fungsi untuk mengecek posisi elemen dan menambahkan kelas 'show'
    function checkPosition() {
      const containers = document.querySelectorAll('.transition-container');

      containers.forEach(container => {
        const containerPosition = container.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;

        if (containerPosition < screenPosition) {
          container.classList.add('show');
        }
      });
    }

    document.addEventListener('scroll', checkPosition);
    window.onload = checkPosition;

  </script>
</body>

</html>