@extends('layouts.adminlayout')
@section('child')
@section('title', 'Admin - Layanan Publik - Desa Harapan')

<main class="content px-3 py-2">
    <div class="container-fluid" id="admin-layanan-publik">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="mt-3 mb-3">
            <h4>Kelola Layanan Publik</h4>
        </div>
        <div class="row">
            <div class="container">
                <!-- Card Form untuk Tambah Fasilitas -->
                <div class="row">
                    <div class="col-12">
                        <div class="card" id="tambahFasilitasCard">
                            <div class="card-body">
                                <h5>Tambah Fasilitas Desa
                                    <hr>
                                </h5>
                                <form id="tambahFasilitasForm" action="/layananpublik" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- Dropdown untuk memilih kategori fasilitas -->
                                    <div class="form-group row mb-3">
                                        <label for="kategoriFasilitas"
                                            class="col-lg-2 col-md-3 col-sm-4 form-label">Kategori
                                            Fasilitas:</label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <select name="kategori_fasilitas" class="form-control"
                                                id="kategoriFasilitas" required>
                                                <option value="">-- pilih kategori --</option>
                                                <option value="pendidikan">Pendidikan</option>
                                                <option value="publik">Publik</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Input Nama Fasilitas -->
                                    <div class="form-group row mb-3">
                                        <label for="namaFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                            Fasilitas:</label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input name="nama_fasilitas" type="text" class="form-control"
                                                id="namaFasilitas" required>
                                        </div>
                                    </div>

                                    <!-- Input Foto -->
                                    <div class="form-group row mb-3">
                                        <label for="foto"
                                            class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input name="gambar_fasilitas" type="file" class="form-control"
                                                id="foto" accept="image/*">
                                        </div>
                                    </div>
                                    <!-- Input Alamat -->
                                    <div class="form-group row mb-3">
                                        <label for="alamat"
                                            class="col-lg-2 col-md-3 col-sm-4 form-label">Alamat:</label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input name="alamat" type="text" class="form-control"
                                                id="alamat"></input>
                                        </div>
                                    </div>
                                    <!-- Input URL Alamat -->
                                    <div class="form-group row mb-3">
                                        <label for="url_alamat_pendidikan"
                                            class="col-lg-2 col-md-3 col-sm-4 form-label">URL Alamat:</label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input name="url_alamat" type="text" class="form-control"
                                                id="url_alamat_pendidikan"></input>
                                        </div>
                                    </div>
                                    <!-- Tombol Submit -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-simpan">Simpan</button>
                                        {{-- <button type="button" onclick="toggleTambahFasilitasCard()"
                                class="btn btn-batal ms-2">Batal</button> --}}
                                    </div>
                                    {{-- 
                          <!-- Form untuk Fasilitas Pendidikan -->
                          <div id="formPendidikan" style="display: none;">
                            
                          </div>
                          <!-- Form untuk Fasilitas Publik -->
                          <div id="formPublik" style="display: none;">
                            
                          </div> --}}

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- Tabel Fasilitas Pendidikan -->
                    <h5 class="mt-3">Fasilitas Pendidikan</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>alamat</th>
                                <th>URL Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="fasilitasPendidikanTableBody">
                            <!-- Data fasilitas pendidikan akan ditambahkan di sini -->
                            @foreach ($fasilitaspendidikan as $fpendidikan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fpendidikan->kategori_fasilitas }}</td>
                                    <td>{{ $fpendidikan->nama_fasilitas }}</td>
                                    <td>{{ $fpendidikan->alamat }}</td>
                                    <td>{{ $fpendidikan->url_alamat }}</td>
                                    <td><img src="{{ asset('storage/' . $fpendidikan->gambar_fasilitas) }}"
                                            alt="" class="img-thumbnail" style="width: 50px; height: 50px;">
                                    </td>
                                    <td>
                                        <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editPerangkatModal"
                                            onclick="loadEditData({{ $fpendidikan }})"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/layananpublik/{{ $fpendidikan->id }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class=" btn btn-danger border-0"
                                                onclick="return confirm('Hapus data {{ $fpendidikan->nama_fasilitas }}?')"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Tabel Fasilitas Kesehatan -->
                    <h5 class="mt-5">Fasilitas Publik</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>URL Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="fasilitasPublikTableBody">
                            @foreach ($fasilitaspublik as $fpublik)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fpublik->kategori_fasilitas }}</td>
                                    <td>{{ $fpublik->nama_fasilitas }}</td>
                                    <td>{{ $fpublik->alamat }}</td>
                                    <td>{{ $fpublik->url_alamat }}</td>
                                    <td><img src="{{ asset('storage/' . $fpublik->gambar_fasilitas) }}" alt=""
                                            class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                    <td>
                                        <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editPerangkatModal"
                                            onclick="loadEditData({{ $fpublik }})"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/layananpublik/{{ $fpublik->id }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class=" btn btn-danger border-0"
                                                onclick="return confirm('Hapus data {{ $fpublik->nama_fasilitas }}?')"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal untuk Edit Perangkat -->
                    <div class="modal fade" id="editPerangkatModal" tabindex="-1"
                        aria-labelledby="editPerangkatModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPerangkatModalLabel">Edit Layanan Publik

                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editPerangkatForm" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="id" id="editId">
                                        <input type="hidden" name="oldImage" id="editGambar">
                                        <div class="mb-3">
                                            <label for="editKategoriFasilitas" class="form-label">Kategori</label>
                                            {{-- <input type="text" name="kategori_fasilitas" class="form-control"
                                                id="editKategoriFasilitas" required> --}}
                                            <select name="kategori_fasilitas" class="form-control"
                                                id="editKategoriFasilitas" required>
                                                <option value="pendidikan">Pendidikan</option>
                                                <option value="publik">Publik</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editNamaFasilitas" class="form-label">Nama</label>
                                            <input type="text" name="nama_fasilitas" class="form-control"
                                                id="editNamaFasilitas" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editlAlamat" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                id="editAlamat" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editurlAlamat" class="form-label">URL Alamat</label>
                                            <input type="text" name="url_alamat" class="form-control"
                                                id="editurlAlamat" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editFoto" class="form-label">Foto</label>
                                            <img alt="" id="previewImage" class="img-thumbnail"
                                                style="width: 50px; height: 50px;">
                                            <input type="file" name="gambar_fasilitas" class="form-control"
                                                id="editFoto" accept="image/*" onchange="changeImage(event)">
                                        </div>
                                        <button type="submit" class="btn btn-edit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal stops here --}}
                </div>
            </div>
        </div>
</main>
@endsection

{{-- New Revisi --}}


{{-- End of New Revisi --}}

@section('kodejs')
{{-- !-- Scripts --> --}}


<script>
    function loadEditData(layananpublik) {
        console.log(layananpublik);
        // Isi nilai input dengan data dari parameter
        document.getElementById('editId').value = layananpublik.id;
        document.getElementById('editKategoriFasilitas').value = layananpublik.kategori_fasilitas;
        document.getElementById('editNamaFasilitas').value = layananpublik.nama_fasilitas;
        document.getElementById('editGambar').value = layananpublik.gambar_fasilitas;
        document.getElementById('editurlAlamat').value = layananpublik.url_alamat;
        document.getElementById('editAlamat').value = layananpublik.alamat;
        const previewImage = document.getElementById('previewImage');
        if (layananpublik.gambar_fasilitas) {
            previewImage.src = `/storage/${layananpublik.gambar_fasilitas}`;
        } else {
            previewImage.src = ''; // Kosongkan jika tidak ada foto
        }

        // Ubah action form untuk mengarahkan ke route update yang sesuai
        const editForm = document.getElementById('editPerangkatForm');
        editForm.action = `/layananpublik/${layananpublik.id}`;
    }

    function changeImage(event) {
        const previewImage = document.getElementById('previewImage');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                console.log(e.target.result);

                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
