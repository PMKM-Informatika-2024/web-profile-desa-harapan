@extends('layouts.layout')
@section('child')
@section('title', 'Kegiatan - Desa Harapan')

<!-- Banner -->
<section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="text-center">
                <h1 class="text-banner">Kegiatan</h1>
            </div>
        </div>
    </div>
</section>
<!-- End of Banner -->

<!-- Kegiatan -->
<section id="kegiatan">
    <div class="container-fluid transition-container py-5 mt-5 mb-5">
        <div class="row">
            <h2 class="subjudul text-center mb-5">Galeri Kegiatan Desa Harapan</h2>
            @foreach ($kegiatan as $k)
                <div class="col-lg-4 g-0 p-3">
                    <div class="card-kegiatan position-relative image-container" href="javascript:void(0)"
                        data-bs-toggle="modal" data-bs-target="#kegiatanPicModal"
                        onclick="loadPicData({{ $k }})">
                        <img src="{{ asset('storage/' . $k->gambar_kegiatan) }}" alt=""
                            class="img-fluid image-container">
                        <div
                            class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100 d-flex align-items-end p-3">
                            <h5 class="text-start">{{ $k->nama_kegiatan }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="modal fade" id="kegiatanPicModal" tabindex="-1" aria-labelledby="kegiatanPicModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="kegiatanPicModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img alt="" id="previewImage" class="img-thumbnail">
            </div>
        </div>
    </div>
</div>
<!-- End of Kegiatan -->

@endsection
@section('kodejs')
<script>
    function loadPicData(k) {
        // Isi nilai input dengan data dari parameter

        document.getElementById('previewImage').value = k.gambar_kegiatan;
        document.getElementById('kegiatanPicModalLabel').textContent = k.nama_kegiatan;
        if (k.gambar_kegiatan) {
            previewImage.src = `/storage/${k.gambar_kegiatan}`;
        }
    }
</script>
@endsection
