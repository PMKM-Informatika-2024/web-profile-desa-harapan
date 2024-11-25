@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-edit-pengumuman">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Edit Pengumuman
                                <hr>
                            </h5>
                            <form id="editPengumumanForm">
                                <div class="form-group row mb-3">
                                    <label for="tanggalPengumuman" class="col-lg-2 col-md-3 col-sm-4 form-label">Tanggal
                                        Dibuat:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="date" class="form-control" id="tanggalPengumuman" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="judulPengumuman"
                                        class="col-lg-2 col-md-3 col-sm-4 form-label">Judul:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="judulPengumuman" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="deskripsiSingkat" class="col-lg-2 col-md-3 col-sm-4 form-label">Deskripsi
                                        Singkat:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <textarea class="form-control" id="deskripsiSingkat" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="gambarPengumuman" class="col-lg-2 col-md-3 col-sm-4 form-label">Unggah
                                        Gambar:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="file" class="form-control-file" id="gambarPengumuman"
                                            accept="image/*">
                                        <img id="currentImage" src="" alt="Gambar Saat Ini" class="mt-2"
                                            style="width: 100px;">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
                                    <a href="admin-pengumuman.html" class="btn btn-batal ms-2">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('kodejs')
    <script>
        function showAlert() {
            alert("Data telah disimpan!");
        }

        // edit pengumuman
        // Mendapatkan parameter URL dan mengatur data pengumuman yang akan diedit
        const urlParams = new URLSearchParams(window.location.search);
        const index = urlParams.get('index');
        let pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];
        let selectedPengumuman = pengumuman[index];

        // Memasukkan data yang terpilih ke dalam form
        if (selectedPengumuman) {
            document.getElementById('tanggalPengumuman').value = selectedPengumuman.tanggal;
            document.getElementById('judulPengumuman').value = selectedPengumuman.judul;
            document.getElementById('deskripsiSingkat').value = selectedPengumuman.deskripsi;
            document.getElementById('currentImage').src = selectedPengumuman.gambar;
        } else {
            alert('Data pengumuman tidak ditemukan.');
        }

        // Fungsi untuk menyimpan perubahan pengumuman yang diedit
        document.getElementById('editPengumumanForm').onsubmit = function(event) {
            event.preventDefault();

            // Mengupdate data pengumuman
            selectedPengumuman.tanggal = document.getElementById('tanggalPengumuman').value;
            selectedPengumuman.judul = document.getElementById('judulPengumuman').value;
            selectedPengumuman.deskripsi = document.getElementById('deskripsiSingkat').value;

            const newGambar = document.getElementById('gambarPengumuman').files[0];
            if (newGambar) {
                selectedPengumuman.gambar = URL.createObjectURL(newGambar);
            }

            pengumuman[index] = selectedPengumuman;
            localStorage.setItem('pengumuman', JSON.stringify(pengumuman));

            alert('Perubahan berhasil disimpan');
            window.location.href = "admin-pengumuman.html";
        };

        // Fungsi untuk menambahkan pengumuman baru
        document.getElementById('tambahPengumumanForm').onsubmit = function(event) {
            event.preventDefault();
            const tanggal = document.getElementById('tanggalPengumuman').value;
            const judul = document.getElementById('judulPengumuman').value;
            const deskripsi = document.getElementById('deskripsiSingkat').value;
            const gambar = document.getElementById('gambarPengumuman').files[0];

            const newPengumuman = {
                tanggal,
                judul,
                deskripsi,
                gambar: URL.createObjectURL(gambar)
            };
            let pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];
            pengumuman.push(newPengumuman);
            localStorage.setItem('pengumuman', JSON.stringify(pengumuman));

            alert('Pengumuman berhasil disimpan');
            window.location.href = "admin-pengumuman.html";
        };

        // Fungsi untuk menghapus pengumuman berdasarkan index
        function hapusPengumuman(index) {
            if (confirm("Apakah Anda yakin ingin menghapus pengumuman ini?")) {
                let pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];
                pengumuman.splice(index, 1);
                localStorage.setItem('pengumuman', JSON.stringify(pengumuman));

                alert('Pengumuman berhasil dihapus');
                displayPengumuman();
            }
        }

        // Fungsi untuk menampilkan pengumuman di tabel
        function displayPengumuman() {
            const tableBody = document.getElementById('pengumumanTableBody');
            const pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];
            tableBody.innerHTML = "";

            pengumuman.forEach((pengumumanItem, index) => {
                const row = `
      <tr>
        <td>${index + 1}</td>
        <td>${pengumumanItem.tanggal}</td>
        <td>${pengumumanItem.judul}</td>
        <td>${pengumumanItem.deskripsi}</td>
        <td><img src="${pengumumanItem.gambar}" alt="Gambar Pengumuman" style="width: 50px; height: 50px;" class="img-thumbnail"></td>
        <td>
          <a href="admin-edit-pengumuman.html?index=${index}" class="btn btn-info btn-sm"> <i class="fas fa-eye"></i></a>
          <button class="btn btn-danger btn-sm" onclick="hapusPengumuman(${index})"> <i class="fas fa-trash"></i> Hapus</button>
        </td>
      </tr>
    `;
                tableBody.innerHTML += row;
            });
        }

        window.onload = displayPengumuman;
    </script>
@endsection
