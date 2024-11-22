@extends('layouts.layout')
@section('child')
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
                    <tr>
                        <td>1</td>
                        <td>22 Oktober 2024</td>
                        <td>Pengumuman Pendaftaran Layanan Desa</td>
                        <td><a href="pengumuman1.html" class="btn btn-more">Selengkapnya</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>20 Oktober 2024</td>
                        <td>Rapat Koordinasi Bulanan</td>
                        <td><a href="pengumuman2.html" class="btn btn-more">Selengkapnya</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>18 Oktober 2024</td>
                        <td>Penyampaian Informasi Pelayanan Publik</td>
                        <td><a href="pengumuman3.html" class="btn btn-more">Selengkapnya</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>15 Oktober 2024</td>
                        <td>Program Bantu Jaminan Sosial</td>
                        <td><a href="pengumuman4.html" class="btn btn-more">Selengkapnya</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>10 Oktober 2024</td>
                        <td>Update Program Pengembangan Desa</td>
                        <td><a href="pengumuman5.html" class="btn btn-more">Selengkapnya</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- End of Pengumuman -->
@endsection
