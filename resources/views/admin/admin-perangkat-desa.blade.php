@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-perangkat-desa">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-3 mb-3">
                <h4>Kelola Perangkat Desa</h4>
            </div>
            <div class="row">
                <div class="container">

                    <!-- Card Form untuk Tambah Perangkat -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahPerangkatCard">
                                <div class="card-body">
                                    <h5>Tambah Perangkat Desa
                                        <hr>
                                    </h5>
                                    <form action="/perangkatdesa" method="POST" id="tambahPerangkatForm"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="nama"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Nama:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="nama" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="jabatan"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Jabatan:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" name="jabatan" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="foto"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="file" class="form-control" name="gambar_perangkatdesa"
                                                    accept="image/*" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-simpan">Simpan</button>
                                            {{-- <button type="button" onclick="toggleTambahPerangkatCard()"
                            class="btn btn-batal ms-2">Batal</button> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="perangkatTableBody">
                            @foreach ($perangkatdesas as $perangkatdesa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $perangkatdesa->nama }}</td>
                                    <td>{{ $perangkatdesa->jabatan }}</td>
                                    <td><img src="{{ asset('storage/' . $perangkatdesa->gambar_perangkatdesa) }}"
                                            alt="" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                    <td>
                                        <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editPerangkatModal"
                                            onclick="loadEditData({{ $perangkatdesa }})"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/perangkatdesa/{{ $perangkatdesa->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class=" btn btn-danger border-0"
                                                onclick="return confirm('Hapus data {{ $perangkatdesa->nama }}?')"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>



                    <!-- Modal untuk Edit Perangkat -->
                    <div class="modal fade" id="editPerangkatModal" tabindex="-1" aria-labelledby="editPerangkatModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPerangkatModalLabel">Edit Perangkat Desa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editPerangkatForm" method="POST" enctype="multipart/form-data">
                                      @method('put')
                                      @csrf
                                        {{-- <input type="hidden" id="editIndex"> --}}
                                        <input type="hidden" name="id" id="editId">
                                        <input type="hidden" name="oldImage" id="editGambar" >
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="editNama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editJabatan" class="form-label">Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" id="editJabatan"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editFoto" class="form-label">Foto</label>
                                            <img alt="" id="previewImage" class="img-thumbnail"
                                                style="width: 50px; height: 50px;" >
                                            <input type="file" name="gambar_perangkatdesa" class="form-control"
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
        function loadEditData(perangkatdesa) {
            // Isi nilai input dengan data dari parameter
            document.getElementById('editId').value = perangkatdesa.id;
            document.getElementById('editGambar').value = perangkatdesa.gambar_perangkatdesa;
            document.getElementById('editNama').value = perangkatdesa.nama;
            document.getElementById('editJabatan').value = perangkatdesa.jabatan;
            const previewImage = document.getElementById('previewImage');
            if (perangkatdesa.gambar_perangkatdesa) {
                previewImage.src = `/storage/${perangkatdesa.gambar_perangkatdesa}`;
            } else {
                previewImage.src = ''; // Kosongkan jika tidak ada foto
            }

            // Ubah action form untuk mengarahkan ke route update yang sesuai
            const editForm = document.getElementById('editPerangkatForm');
            editForm.action = `/perangkatdesa/${perangkatdesa.id}`;
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
