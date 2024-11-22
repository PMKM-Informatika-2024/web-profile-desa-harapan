<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Desa Sungai Keran</title>
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&family=Lora:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 0.875rem;
            opacity: 1;
            overflow-y: scroll;
            margin: 0;
        }

        a {
            cursor: pointer;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        li {
            list-style: none;
        }

        h4 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.3rem;
            color: rgb(196, 0, 39);
        }

        .card-body .jumlah {
            font-weight: bold;
        }

        h5 {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="sticky-top" style="height: 100vh; overflow-y: auto;">
            <!-- Content fo Sidebar -->
            <div class="h100">
                <div class="sidebar-logo collapsed-icon">
                    <a href="#">Desa Sungai Keran</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="admin" class="sidebar-link {{ Request::is('admin') ? 'active-link' : '' }}"
                            id="admin-dashboard">
                            <i class="fa-solid fa-list pe-2"></i>
                            <span class="link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="profildesa"
                            class="sidebar-link {{ Request::is('adminprofildesa*') ? 'active' : '' }}"
                            id="admin-profile-desa">
                            <i class="fa-solid fa-id-card pe-2"></i>
                            <span class="link-text">Profile Desa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="perangkatdesa"
                            class="sidebar-link {{ Request::is('perangkatdesa*') ? 'active' : '' }}"
                            id="admin-perangkat-desa">
                            <i class="fa-solid fa-user-tie pe-2"></i>
                            <span class="link-text">Perangkat Desa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="lembagadesa"
                            class="sidebar-link {{ Request::is('adminlembagadesa*') ? 'active' : '' }}"
                            id="admin-lembaga-desa">
                            <i class="fa-solid fa-landmark pe-2"></i>
                            <span class="link-text">Lembaga Desa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="layananpublik"
                            class="sidebar-link {{ Request::is('adminlayananpublik*') ? 'active' : '' }}"
                            id="admin-layanan-publik">
                            <i class="fa-solid fa-hands-helping pe-2"></i>
                            <span class="link-text">Layanan Publik</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="layananadministrasi"
                            class="sidebar-link {{ Request::is('adminlayananadministrasi*') ? 'active' : '' }}"
                            id="admin-layanan-administrasi">
                            <i class="fa-solid fa-file-signature pe-2"></i>
                            <span class="link-text">Layanan Administrasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="pengumuman"
                            class="sidebar-link {{ Request::is('adminpengumuman*') ? 'active' : '' }}"
                            id="admin-pengumuman">
                            <i class="fa-solid fa-bullhorn pe-2"></i>
                            <span class="link-text">Pengumuman</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="kegiatan" class="sidebar-link {{ Request::is('adminkegiatan*') ? 'active' : '' }}"
                            id="admin-kegiatan">
                            <i class="fa-solid fa-calendar-day pe-2"></i>
                            <span class="link-text">Kegiatan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="kontak" class="sidebar-link {{ Request::is('adminkontak*') ? 'active' : '' }}"
                            id="admin-kontak">
                            <i class="fa-solid fa-address-book pe-2"></i>
                            <span class="link-text">Kontak</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="kelolapengguna"
                            class="sidebar-link {{ Request::is('adminkelolapengguna*') ? 'active' : '' }}"
                            id="kelola-pengguna">
                            <i class="fa-solid fa-user pe-2"></i>
                            <span class="link-text">Pengguna</span>
                        </a>
                    </li>
                </ul>

            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="img/6.jpg" class="avatar img-fluid" alt="User Avatar">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-user-gear pe-2"></i>
                                    Profile
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-right-from-bracket pe-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            {{-- dari sini --}}
            @yield('child')
            {{-- sampai sini --}}
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    @yield('kodejs')
    <script>
        const sidebarToggle = document.querySelector("#sidebar-toggle");
        sidebarToggle.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });

        // // Active sidebar
        // const currentUrl = window.location.href;
        // console.log(currentUrl);

        // const sidebarItems = [
        //   { id: 'admin-dashboard', url: 'admin' },
        //   { id: 'admin-profile-desa', url: 'adminprofiledesa' },
        //   { id: 'admin-perangkat-desa', url: 'adminperangkatdesa' },
        //   { id: 'admin-lembaga-desa', url: 'adminlembagadesa' },
        //   { id: 'admin-layanan-publik', url: 'adminlayananpublik' },
        //   { id: 'admin-layanan-administrasi', url: 'adminlayananadministrasi' },
        //   { id: 'admin-pengumuman', url: 'adminpengumuman' },
        //   { id: 'admin-kegiatan', url: 'adminkegiatan' },
        //   { id: 'admin-kontak', url: 'adminkontak' },
        //   { id: 'kelola-pengguna', url: 'adminkelolapengguna' }
        // ];

        // sidebarItems.forEach(item => {
        //   if (currentUrl.includes(item.url)) {
        //     const sidebarLink = document.getElementById(item.id);
        //     console.log('sidebar link: ', sidebarLink);

        //     if (sidebarLink) {
        //       sidebarLink.classList.add('active');
        //     }
        //   }
        // });
    </script>
</body>

</html>
