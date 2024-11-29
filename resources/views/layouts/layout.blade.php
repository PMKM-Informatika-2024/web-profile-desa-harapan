<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Desa Harapan')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
  .nav-item.dropdown:hover .dropdown-menu {
  display: block;
}
.carousel-item img {
            width: 60%;
            height: auto; 
            margin: 0 auto;
        }

        .carousel-caption {
            font-size: 1rem;
        }
</style>
@yield('kid')
<body>
  <!-- Navbar -->
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark p-md-3">
      <div class="container-fluid">
        <a class="navbar-brand ms-3 d-flex align-items-center" href="#">
          <img src="/image/kab-sambas.png" width="50" class="me-2">
          <span style="line-height: 1.1; font-size:medium;">
            Desa<br>
            Harapan<br>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item ms-3">
              <a class="nav-link {{ Request::is('/') ? 'active-link' : '' }}" href="/" id="beranda">Beranda</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link {{ Request::is('profile-desa') ? 'active-link' : '' }}" href="/profile-desa" id="profile-desa">Profile Desa</a>
            </li>
            <li class="nav-item ms-3 dropdown">
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
            <li class="nav-item ms-3">
              <a class="nav-link {{ Request::is('layanan-publik') ? 'active-link' : '' }}" href="/layanan-publik" id="layanan-publik">Layanan Publik</a>
            </li>
            <li class="nav-item ms-3 dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('layanan-administrasi') || Request::is('daftar-pengumuman') || Request::is('daftar-kegiatan') ? 'active-link' : '' }}" href="#" id="informasi-publik" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Informasi Publik
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/layanan-administrasi" id="layanan-administrasi">Layanan
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

  <!-- Content -->
  @yield('child')
  <!-- End of Content -->

  <!-- Footer -->
  <footer class="text-center text-dark bg-light p-4 border-top">
    <p>Copyright &copy; 2024 Desa Harapan</p>
  </footer>
  <!-- End of Footer -->

  <!-- Tombol Kembali ke Atas -->
  <button onclick="scrollToTop()" id="backToTopBtn" class="btn">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>


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

      closeBtn.style.display = 'none';

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

    // untuk menjalankan counter
    document.addEventListener("DOMContentLoaded", function () {
      const counters = document.querySelectorAll(".counter");

      counters.forEach(counter => {
        const updateCounter = () => {
          const target = +counter.getAttribute("data-target");
          const count = +counter.innerText;

          const increment = target / 400;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCounter, 10);
          } else {
            counter.innerText = target;
          }
        };

        updateCounter();
      });
    });

    // Diagram Lingkaran Suku
    const sukuCtx = document.getElementById('sukuChart').getContext('2d');
    const sukuChart = new Chart(sukuCtx, {
      type: 'pie',
      data: {
        labels: ['Melayu', 'Melayu Sambas', 'Tionghoa', 'Dayak', 'Jawa', 'Bugis', 'Lainnya'],
        datasets: [{
          label: 'Jumlah Suku',
          data: [421, 5662, 11, 11, 1, 150, 177],
          backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'magenta'],
          hoverOffset: 0
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle'
            }
          },
          datalabels: {
            color: '#000',
            anchor: 'end',
            align: 'end',
            offset: -50,
            formatter: (value, context) => {
              const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
              const percentage = (value / total * 100).toFixed(1) + '%';
              return percentage;
            },
            font: {
              weight: 'medium'
            }
          }
        },
        layout: {
          padding: 0
        }
      },
      plugins: [ChartDataLabels]
    });

    // Diagram Lingkaran Agama
    const agamaCtx = document.getElementById('agamaChart').getContext('2d');
    const agamaChart = new Chart(agamaCtx, {
      type: 'pie',
      data: {
        labels: ['Islam', 'Katolik', 'Protestan', 'Buddha', 'Hindu', 'Kong Hu Chu'],
        datasets: [{
          label: 'Jumlah Agama',
          data: [5380, 123, 68, 1, 786, 85],
          backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'magenta'],
          hoverOffset: 0
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle'
            }
          },
          datalabels: {
            color: '#000',
            anchor: 'end',
            align: 'end',
            offset: -50,
            formatter: (value, context) => {
              const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
              const percentage = (value / total * 100).toFixed(1) + '%';
              return percentage;
            },
            font: {
              weight: 'medium'
            }
          }
        },
        layout: {
          padding: 0
        }
      },
      plugins: [ChartDataLabels]
    });

  </script>
</body>

</html>