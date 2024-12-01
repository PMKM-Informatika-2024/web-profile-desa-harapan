@extends('layouts.adminlayout')
@section('child')
@section('title', 'Admin - Pengumuman - Desa Harapan')

<main class="content px-3 py-2">
    <div class="container-fluid" id="admin-pengumuman">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="mt-3 mb-3">
            <h4>Kelola Pengumuman</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Tambah Pengumuman Baru
                            <hr>
                        </h5>
                        <form id="tambahPengumumanForm" action="/pengumuman" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-3">
                                <label for="judulPengumuman"
                                    class="col-lg-2 col-md-3 col-sm-4 form-label">Judul:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input name="judul" type="text" class="form-control" id="judulPengumuman"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="deskripsiSingkat" class="col-lg-2 col-md-3 col-sm-4 form-label">Deskripsi
                                    Singkat:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input name="deskripsi_singkat" class="form-control" id="deskripsiSingkat"
                                        required></input>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="gambarPengumuman" class="col-lg-2 col-md-3 col-sm-4 form-label">Unggah
                                    Gambar:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input name="gambar_pengumuman" type="file" class="form-control"
                                        id="gambarPengumuman" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="Konten" class="col-lg-2 col-md-3 col-sm-4 form-label">Konten:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input hidden name="konten" class="form-control" id="Konten" required></input>
                                    <trix-editor input="Konten"></trix-editor>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-simpan">Simpan</button>
                                {{-- <a href="admin-pengumuman.htmx`l" class="btn btn-batal ms-2">Batal</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Dibuat</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Deskripsi Singkat</th>
                            <th>konten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="pengumumanTableBody">
                        @foreach ($pengumumen as $pengumuman)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pengumuman->created_at }}</td>
                                <td>{{ $pengumuman->judul }}</td>
                                <td><img src="{{ asset('storage/' . $pengumuman->gambar_pengumuman) }}" alt=""
                                        class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>{{ $pengumuman->deskripsi_singkat }}</td>
                                <td>{!! $pengumuman->konten !!}</td>
                                <td>
                                    <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#editPengumumanModal"
                                        onclick="loadEditData({{ $pengumuman }})"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="/pengumuman/{{ $pengumuman->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class=" btn btn-danger border-0"
                                            onclick="return confirm('Hapus data {{ $pengumuman->judul }}?')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Modal untuk Edit Perangkat -->
                <div class="modal fade" id="editPengumumanModal" tabindex="-1"
                    aria-labelledby="editPengumumanModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editPengumumanModalLabel">Edit Pengumuman</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editPengumumanForm" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    {{-- <input type="hidden" id="editIndex"> --}}
                                    <input type="hidden" name="id" id="editId">
                                    <input type="hidden" name="oldImage" id="editGambar">
                                    <div class="mb-3">
                                        <label for="editJudul" class="form-label">Judul</label>
                                        <input type="text" name="judul" class="form-control" id="editJudul"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editDeskripsi" class="form-label">Deskripsi Singkat</label>
                                        <input type="text" name="deskripsi_singkat" class="form-control"
                                            id="editDeskripsi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Konten</label>
                                        <input type="hidden" name="konten" class="form-control" id="editKonten"
                                            required>
                                        <trix-editor input="editKonten"></trix-editor>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editFoto" class="form-label">Foto</label>
                                        <img alt="" id="previewImage" class="img-thumbnail"
                                            style="width: 50px; height: 50px;">
                                        <input type="file" name="gambar_pengumuman" class="form-control"
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
<!-- Scripts -->


<script>
    function loadEditData(pengumuman) {
        // Isi nilai input dengan data dari parameter
        document.getElementById('editId').value = pengumuman.id;
        document.getElementById('editGambar').value = pengumuman.gambar_pengumuman;
        document.getElementById('editJudul').value = pengumuman.judul;
        document.getElementById('editDeskripsi').value = pengumuman.deskripsi_singkat;
        // document.getElementById('editKonten').value = pengumuman.konten;
        // Set content for Trix editor
        // const editKontenInput = document.getElementById('editKonten');
        // editKontenInput.value = pengumuman.konten;

        // Force Trix editor to update
        const trixEditor = document.querySelector('trix-editor[input="editKonten"]');
        trixEditor.editor.loadHTML(pengumuman.konten);


        const previewImage = document.getElementById('previewImage');
        if (pengumuman.gambar_pengumuman) {
            previewImage.src = `/storage/${pengumuman.gambar_pengumuman}`;
        } else {
            previewImage.src = ''; // Kosongkan jika tidak ada foto
        }

        // Ubah action form untuk mengarahkan ke route update yang sesuai
        const editForm = document.getElementById('editPengumumanForm');
        editForm.action = `/pengumuman/${pengumuman.id}`;
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
