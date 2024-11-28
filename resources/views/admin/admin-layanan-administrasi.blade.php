@extends('layouts.adminlayout')
@section('child')
@section('title', 'Admin - Layanan Administrasi - Desa Harapan')

    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-layanan-administrasi">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-3 mb-3">
                <h4>Kelola Layanan Administrasi</h4>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahFasilitasCard">
                                <div class="card-body">
                                    <h5>Tambah Layanan Administrasi
                                        <hr>
                                    </h5>
                                    <form id="tambahLayananForm" method="POST" action="/layananadministrasi">
                                        @csrf
                                        <!-- Input Nama Layanan -->
                                        <div class="form-group row mb-3">
                                            <label for="namaLayanan" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Layanan:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="namaLayanan" name="nama_layanan" required>
                                            </div>
                                        </div>

                                        <!-- Input Deskripsi Layanan -->
                                        <div class="form-group row mb-3">
                                            <label for="deskripsiLayanan"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Deskripsi:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <textarea class="form-control" id="deskripsiLayanan" name="deskripsi" required></textarea>
                                            </div>
                                        </div>

                                        <!-- Input Persyaratan Layanan -->
                                        <div class="form-group row mb-3">
                                            <label for="persyaratanLayanan"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Persyaratan:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <textarea class="form-control" id="persyaratanLayanan" name="persyaratan" required></textarea>
                                            </div>
                                        </div>

                                        <!-- Tombol Submit -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-simpan">Simpan</button>
                                            {{-- <button type="button" onclick="toggleTambahFasilitasCard()"
                                                class="btn btn-batal ms-2">Batal</button> --}}
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
                                <th>Layanan</th>
                                <th>Deskripsi</th>
                                <th>Persyaratan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="layananTableBody">
                            <!-- Layanan akan ditampilkan di sini -->
                            @foreach ($layananadministrasis as $layananadministrasi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $layananadministrasi->nama_layanan }}</td>
                                    <td>{{ $layananadministrasi->deskripsi }}</td>
                                    <td>{{ $layananadministrasi->persyaratan }}</td>
                                    <td>
                                        <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editLayananModal"
                                            onclick="loadEditData({{ $layananadministrasi }})"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/layananadministrasi/{{ $layananadministrasi->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class=" btn btn-danger border-0"
                                                onclick="return confirm('Hapus data {{ $layananadministrasi->nama }}?')"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal untuk Edit Layanan -->
                    <div class="modal fade" id="editLayananModal" tabindex="-1" aria-labelledby="editLayananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLayananModalLabel">Edit Layanan Administrasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editLayananForm" method="POST">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="id" id="editId"> <!-- Menyimpan index untuk mengedit -->
                                        <div class="mb-3">
                                            <label for="editNamaLayanan" class="form-label">Nama Layanan</label>
                                            <input type="text" name="nama_layanan" class="form-control" id="editNamaLayanan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editDeskripsiLayanan" class="form-label">Deskripsi</label>
                                            <textarea type="text" name="deskripsi" class="form-control" id="editDeskripsiLayanan" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editPersyaratanLayanan" class="form-label">Persyaratan</label>
                                            <textarea type="text" name="persyaratan" class="form-control" id="editPersyaratanLayanan" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-edit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



@section('kodejs')
    <script>

function loadEditData(layananadministrasi) {
            // Isi nilai input dengan data dari parameter
            document.getElementById('editId').value = layananadministrasi.id;
            document.getElementById('editNamaLayanan').value = layananadministrasi.nama_layanan;
            document.getElementById('editDeskripsiLayanan').value = layananadministrasi.deskripsi;
            document.getElementById('editPersyaratanLayanan').value = layananadministrasi.persyaratan;
            const editForm = document.getElementById('editLayananForm');
            editForm.action = `/layananadministrasi/${layananadministrasi.id}`;
            // const previewImage = document.getElementById('previewImage');
            // if (pengumuman.gambar_pengumuman) {
            //     previewImage.src = `/storage/${pengumuman.gambar_pengumuman}`;
            // } else {
            //     previewImage.src = ''; // Kosongkan jika tidak ada foto
            // }

            // Ubah action form untuk mengarahkan ke route update yang sesuai
        }

    //     // tambah layanan administrasi
    //     let layanan = [];

    //     // Fungsi untuk menampilkan layanan
    //     function displayLayanan() {
    //         const tableBody = document.getElementById('layananTableBody');
    //         tableBody.innerHTML = '';

    //         layanan.forEach((item, index) => {
    //             const row = `
    //   <tr>
    //     <td>${index + 1}</td>
    //     <td>${item.namaLayanan}</td>
    //     <td>${item.deskripsiLayanan}</td>
    //     <td>${item.persyaratanLayanan}</td>
    //     <td>
    //       <button class="btn btn-edit btn-sm" onclick="openEditModal(${index})">Edit</button>
    //       <button class="btn btn-hapus btn-sm" onclick="deleteLayanan(${index})">Hapus</button>
    //     </td>
    //   </tr>
    // `;
    //             tableBody.innerHTML += row;
    //         });
    //     }

    //     // Menambahkan layanan
    //     document.getElementById('tambahLayananForm').onsubmit = function(event) {
    //         event.preventDefault();
    //         const namaLayanan = document.getElementById('namaLayanan').value;
    //         const deskripsiLayanan = document.getElementById('deskripsiLayanan').value;
    //         const persyaratanLayanan = document.getElementById('persyaratanLayanan').value;

    //         layanan.push({
    //             namaLayanan,
    //             deskripsiLayanan,
    //             persyaratanLayanan
    //         });
    //         displayLayanan();
    //         document.getElementById('tambahLayananForm').reset();
    //         alert("Layanan berhasil disimpan!");
    //     };

    //     // Membuka modal edit
    //     function openEditModal(index) {
    //         document.getElementById('editIndex').value = index;
    //         document.getElementById('editNamaLayanan').value = layanan[index].namaLayanan;
    //         document.getElementById('editDeskripsiLayanan').value = layanan[index].deskripsiLayanan;
    //         document.getElementById('editPersyaratanLayanan').value = layanan[index].persyaratanLayanan;
    //         const myModal = new bootstrap.Modal(document.getElementById('editLayananModal'));
    //         myModal.show();
    //     }

    //     // Mengupdate layanan
    //     document.getElementById('editLayananForm').onsubmit = function(event) {
    //         event.preventDefault();
    //         const index = document.getElementById('editIndex').value;
    //         const namaLayanan = document.getElementById('editNamaLayanan').value;
    //         const deskripsiLayanan = document.getElementById('editDeskripsiLayanan').value;
    //         const persyaratanLayanan = document.getElementById('editPersyaratanLayanan').value;

    //         layanan[index] = {
    //             namaLayanan,
    //             deskripsiLayanan,
    //             persyaratanLayanan
    //         };
    //         displayLayanan();
    //         const myModal = bootstrap.Modal.getInstance(document.getElementById('editLayananModal'));
    //         myModal.hide();
    //         alert("Layanan berhasil diedit!");
    //     };

    //     // Menghapus layanan
    //     function deleteLayanan(index) {
    //         if (confirm("Apakah Anda yakin ingin menghapus layanan ini?")) {
    //             layanan.splice(index, 1);
    //             displayLayanan();
    //             alert("Layanan berhasil dihapus!");
    //         }
    //     }
    </script>
@endsection
