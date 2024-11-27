@extends('layouts.adminlayout')
@section('child')
@section('title', 'Dashboard - Desa Harapan')
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
                                        {{ $dashboard->total_dusun }}
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
                                        {{ $dashboard->total_rw }}
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
                                        {{ $dashboard->total_rt }}
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
                                        {{ $dashboard->total_jiwa }}
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
                                    <iframe src="{{ $dashboard->peta_desa }}" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                <p>{{ $dashboard->kantor_desa }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
