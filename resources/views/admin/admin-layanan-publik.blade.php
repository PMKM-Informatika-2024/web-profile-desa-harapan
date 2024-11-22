@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-layanan-publik">
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
                                    <form action="/layananpublik" method="POST" enctype="multipart/form-data" id="tambahFasilitasForm">
                                        @csrf
                                        <!-- Dropdown untuk memilih kategori fasilitas -->
                                        <div class="form-group row mb-3">
                                            <label for="kategoriFasilitas"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Kategori
                                                Fasilitas:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <select name="kategori_fasilitas" class="form-control" id="kategoriFasilitas" required>
                                                    <option value="">-- pilih kategori --</option>
                                                    <option value="pendidikan">Pendidikan</option>
                                                    <option value="kesehatan">Kesehatan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Input Nama Fasilitas -->
                                        <div class="form-group row mb-3">
                                            <label for="namaFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Fasilitas:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="nama_fasilitas" type="text" class="form-control" id="namaFasilitas" required>
                                            </div>
                                        </div>

                                        <!-- Input URL Alfamat -->
                                        <div class="form-group row mb-3">
                                            <label for="urlAlamat" class="col-lg-2 col-md-3 col-sm-4 form-label">URL
                                                Alamat:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="url_alamat" type="url" class="form-control" id="urlAlamat" required>
                                            </div>
                                        </div>

                                        <!-- Input Foto -->
                                        <div class="form-group row mb-3">
                                            <label for="fotoFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto
                                                Fasilitas:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="gambar_fasilitas" type="file" class="form-control" id="fotoFasilitas"
                                                    accept="image/*" required>
                                            </div>
                                        </div>

                                        <!-- Tombol Submit -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-simpan">Simpan</button>                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Fasilitas Pendidikan -->
                    <h5 class="mt-3">Fasilitas Pendidikan</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>URL Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="fasilitasPendidikanTableBody">
                            <!-- Data fasilitas pendidikan akan ditambahkan di sini -->
                            @foreach ($layananpublikpendidikan as $fasilitaspendidikan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fasilitaspendidikan->kategori_fasilitas }}</td>
                                <td>{{ $fasilitaspendidikan->nama_fasilitas }}</td>
                                <td>{{ $fasilitaspendidikan->url_alamat }}</td>
                                <td><img src="{{ asset('storage/' . $fasilitaspendidikan->gambar_fasilitas) }}"
                                        alt="" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>
                                    <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#editPerangkatModal"
                                        onclick="loadEditData({{ $fasilitaspendidikan }})"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="/layananpublik/{{ $fasilitaspendidikan->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class=" btn btn-danger border-0"
                                            onclick="return confirm('Hapus data {{ $fasilitaspendidikan->nama }}?')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Tabel Fasilitas Kesehatan -->
                    <h5 class="mt-5">Fasilitas Kesehatan</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>URL Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="fasilitasPublikTableBody">
                            <!-- Data fasilitas kesehatan akan ditambahkan di sini -->
                            @foreach ($layananpublikkesehatan as $fasilitaskesehatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fasilitaskesehatan->kategori_fasilitas }}</td>
                                <td>{{ $fasilitaskesehatan->nama_fasilitas }}</td>
                                <td>{{ $fasilitaskesehatan->url_alamat }}</td>
                                <td><img src="{{ asset('storage/' . $fasilitaskesehatan->gambar_fasilitas) }}"
                                        alt="" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>
                                    <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#editPerangkatModal"
                                        onclick="loadEditData({{ $fasilitaskesehatan }})"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="/layananpublik/{{ $fasilitaskesehatan->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class=" btn btn-danger border-0"
                                            onclick="return confirm('Hapus data {{ $fasilitaskesehatan->nama }}?')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection



@section('kodejs')
    
@endsection
