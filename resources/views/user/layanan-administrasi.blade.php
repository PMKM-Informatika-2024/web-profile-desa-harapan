@extends('layouts.layout')
@section('child')
    
  <!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Layanan Administrasi</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Informasi Layanan -->
  <section>
    <div class="container transition-container py-5 mt-5 mb-5">
      <div class="row">
        <!-- Layanan 1: Kependudukan -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-house-door-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Pelayanan Adminduk /KK, Akta Kematian,Akta Kelahiran, KIA, KTP dan Surat Pindah</h5>
              <p class="card-text">Dapatkan Pelayanan Adminduk /KK, Akta Kematian,Akta Kelahiran, KIA, KTP dan Surat Pindah dengan persyaratan berikut.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseKependudukan"
                aria-expanded="false" aria-controls="collapseKependudukan">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseKependudukan" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Fotokopi Kartu Keluarga</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan surat keterangan domisili</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 2: Surat Keterangan Usaha -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-briefcase-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Keterangan Usaha</h5>
              <p class="card-text">Ajukan surat keterangan usaha dengan mudah dan cepat.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseUsaha"
                aria-expanded="false" aria-controls="collapseUsaha">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseUsaha" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan surat keterangan usaha</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 3: Surat Keterangan Domisili -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-file-earmark-text-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Keterangan Domisili</h5>
              <p class="card-text">Ajukan Surat Keterangan Domisili untuk keperluan administrasi.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseDomisili"
                aria-expanded="false" aria-controls="collapseDomisili">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseDomisili" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Fotokopi Kartu Keluarga</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan SKTM</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 4: Surat Izin Membangun -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-calendar2-event-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Izin Membangun</h5>
              <p class="card-text">Dapatkan izin Membangun dengan prosedur yang cepat.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseMembangun"
                aria-expanded="false" aria-controls="collapseMembangun">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseKeramaian" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Rincian acara yang akan diselenggarakan</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 5: Surat Keterangan Kehilangan -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-exclamation-triangle-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Keterangan Kehilangan</h5>
              <p class="card-text">Laporkan kehilangan dokumen atau barang secara resmi.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseKehilangan"
                aria-expanded="false" aria-controls="collapseKehilangan">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseKehilangan" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Detail barang atau dokumen yang hilang</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 6: Surat Ahli Waris/ Surat Penyerahan Tanah -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-shop-window" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Ahli Waris/ Surat Penyerahan Tanah</h5>
              <p class="card-text">Ajukan Surat Ahli Waris/ Surat Penyerahan Tanah.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseAhliWaris"
                aria-expanded="false" aria-controls="collapseAhliWaris">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseAhliWaris" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Fotokopi NPWP (jika ada)</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan Ahli Waris/ Surat Penyerahan Tanah</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 6: Pelayanan Data terpadu Kesejateraaan Sosial (DTKS) -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-shop-window" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Pelayanan Data terpadu Kesejateraaan Sosial (DTKS)</h5>
              <p class="card-text">Ajukan Pelayanan Data terpadu Kesejateraaan Sosial (DTKS).</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseDTKS"
                aria-expanded="false" aria-controls="collapseDTKS">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseDTKS" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Fotokopi NPWP (jika ada)</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan Ahli Waris/ Surat Penyerahan Tanah</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End of Informasi Layanan -->
@endsection