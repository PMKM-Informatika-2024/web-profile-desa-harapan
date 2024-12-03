@extends('layouts.adminlayout')
@section('child')
@section('title', 'Admin - Lembaga Desa - Desa Harapan')

    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-lembaga-desa">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-3 mb-3">
                <h4>Kelola Lembaga Desa</h4>
            </div>
            <div class="row">
                <div class="container">
                    <!-- Card Form untuk Tambah Lembaga -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahLembagaCard">
                                <div class="card-body">
                                    <hr>
                                    <form id="tambahLembagaForm" action="/lembagadesa" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="namaLembaga" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Lembaga:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="nama_lembaga" id="namaLembaga" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="namaKetua" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Ketua:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="nama_ketua" id="namaKetua" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="foto"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="file" name="gambar_lembaga" class="form-control" id="foto" accept="image/*"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-simpan">Simpan</button>
                                            {{-- <button type="button" class="btn btn-batal ms-2">Batal</button> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lembaga</th>
                                <th>Nama Ketua</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="lembagaTableBody">
                            @foreach ($lembagadesas as $lembagadesa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lembagadesa->nama_lembaga }}</td>
                                    <td>{{ $lembagadesa->nama_ketua }}</td>
                                    <td><img src="{{ asset('storage/' . $lembagadesa->gambar_lembaga) }}"
                                            alt="" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                    <td>
                                        <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editLembagaModal"
                                            onclick="loadEditData({{ $lembagadesa }})"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/lembagadesa/{{ $lembagadesa->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class=" btn btn-danger border-0"
                                                onclick="return confirm('Hapus data {{ $lembagadesa->nama }}?')"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal untuk Edit Perangkat -->
                    <div class="modal fade" id="editLembagaModal" tabindex="-1" aria-labelledby="editLembagaModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLembagaModalLabel">Edit Perangkat Desa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editLembagaForm" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="id" id="editId">
                                        <input type="hidden" name="oldImage" id="editGambar">
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">Nama</label>
                                            <input type="text" name="nama_lembaga" class="form-control" id="editNama"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editKetua" class="form-label">Nama Ketua</label>
                                            <input type="text" name="nama_ketua" class="form-control" id="editKetua"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editFoto" class="form-label">Foto</label>
                                            <img alt="" id="previewImage" class="img-thumbnail"
                                                style="width: 50px; height: 50px;">
                                            <input type="file" name="gambar_lembaga" class="form-control"
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
@section('kodejs')
    <script>
        function loadEditData(lembagadesa) {
            // Isi nilai input dengan data dari parameter
            document.getElementById('editId').value = lembagadesa.id;
            document.getElementById('editGambar').value = lembagadesa.gambar_lembaga;
            document.getElementById('editNama').value = lembagadesa.nama_lembaga;
            document.getElementById('editKetua').value = lembagadesa.nama_ketua;
            const previewImage = document.getElementById('previewImage');
            if (lembagadesa.gambar_lembaga) {
                previewImage.src = `/storage/${lembagadesa.gambar_lembaga}`;
            } else {
                previewImage.src = ''; // Kosongkan jika tidak ada foto
            }

            // Ubah action form untuk mengarahkan ke route update yang sesuai
            const editForm = document.getElementById('editLembagaForm');
            editForm.action = `/lembagadesa/${lembagadesa.id}`;
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
