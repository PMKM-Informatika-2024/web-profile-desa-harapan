@extends('layouts.layout')
@section('child')
@section('title', 'Pengumuman - Desa Harapan')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Pengumuman</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Pengumuman -->
    <section id="pengumuman">
        <div class="container transition-container py-5 mb-5" style="background: none;">
            <div class="col-12 col-md-6 col-lg-4 ms-auto mb-3">
                <form class="d-flex justify-content-end">
                    <input type="text" class="form-control me-2" placeholder="Cari pengumuman..." aria-label="Search">
                    <button class="btn btn-more" type="submit">Cari</button>
                </form>
            </div>
            <table class="table table-bordered table-striped">
                <thead class="table-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Rincian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumuman as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->judul }}</td>
                        <td><a href="/detailpengumuman/{{ $p->id }}" class="btn btn-more">Selengkapnya</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- <a href="/pengumuman/{{ $pengumuman->id }}">Detail Pengumuman</a> --}}
        </div>
    </section>
    <!-- End of Pengumuman -->
@endsection
