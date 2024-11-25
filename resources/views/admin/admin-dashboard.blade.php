@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-dashboard">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-3 mb-3">
                <h4>Dashboard</h4>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">
                                        1234
                                    </h4>
                                    <p class="jumlah mb-2">
                                        Jumlah Dusun
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">
                                        1234
                                    </h4>
                                    <p class="jumlah mb-2">
                                        Jumlah RW
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">
                                        1234
                                    </h4>
                                    <p class="jumlah mb-2">
                                        Jumlah RT
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">
                                        1234
                                    </h4>
                                    <p class="jumlah mb-2">
                                        Jumlah Penduduk
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <!-- Card 1 (col-lg-8) -->
                <div class="col-lg-8 col-md-12 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="card-title">Peta Desa</h5>
                                </div>
                            </div>
                            <!-- Google Maps Embed -->
                            <div class="mt-3">
                                
                                    {{-- src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17596.69517182833!2d108.89841217452445!3d0.692050119300173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e305ab91cca753%3A0x10d868d0d0d897e3!2sSungai%20Keran%20Village%20Office!5e0!3m2!1sen!2sid!4v1728940315050!5m2!1sen!2sid"
                                    width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24806.394029058163!2d108.97054280403697!3d1.1830134235617937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e48329fac4dbb1%3A0x88547da6bafe7ddc!2sHarapan%2C%20Kec.%20Pemangkat%2C%20Kabupaten%20Sambas%2C%20Kalimantan%20Barat!5e1!3m2!1sid!2sid!4v1732284595655!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 (col-lg-4) -->
                <div class="col-lg-4 col-md-12 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="card-title">Alamat Kantor Desa</h5>
                                </div>
                            </div>
                            <div class="mt-3 text-muted">
                                <p>Jalan Desa No. 123, Sungai Keran, Kecamatan Sungai Raya Kepulauan, Kabupaten Ketapang,
                                    Kalimantan
                                    Barat, Indonesia.</p>
                                <p>Telepon: (021) 1234567</p>
                                <p>Email: kantor@sungaikeran.go.id</p>
                                <p>Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
