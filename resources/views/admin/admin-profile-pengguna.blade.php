@extends('layouts.adminlayout')
@section('child')
@section('title', 'Admin - Profile Pengguna - Desa Harapan')


      <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-profile-pengguna">
          <div class="mt-3 mb-3">
            <h4>Profile Pengguna</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <form id="editProfileForm">

                    <!-- Foto Profil -->
                    <div class="form-group row mb-3">
                      <label for="fotoProfil" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto Profil:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <!-- Menampilkan Foto Profil yang sudah ada -->
                        <div id="currentProfilePic">
                          <img id="fotoPreview" src="" alt="Foto Profil" class="img-thumbnail" width="150"
                            style="display: none;">
                        </div>
                        <input type="file" class="form-control mt-2" id="fotoProfil" accept="image/*">
                      </div>
                    </div>

                    <!-- NIP/Username -->
                    <div class="form-group row mb-3">
                      <label for="nipUsername" class="col-lg-2 col-md-3 col-sm-4 form-label">NIP/Username:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="nipUsername" required value="12345678">
                      </div>
                    </div>

                    <!-- Nama Pengguna -->
                    <div class="form-group row mb-3">
                      <label for="namaPengguna" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="namaPengguna" required value="John Doe">
                      </div>
                    </div>

                    <!-- Alamat -->
                    <div class="form-group row mb-3">
                      <label for="alamat" class="col-lg-2 col-md-3 col-sm-4 form-label">Alamat:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <textarea class="form-control" id="alamat" required>Jl. Raya Desa No. 123</textarea>
                      </div>
                    </div>

                    <!-- No HP -->
                    <div class="form-group row mb-3">
                      <label for="noHp" class="col-lg-2 col-md-3 col-sm-4 form-label">No HP:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="tel" class="form-control" id="noHp" required value="081234567890">
                      </div>
                    </div>

                    <!-- Ganti Password -->
                    <div class="form-group row mb-3">
                      <p>Edit Password</p>
                      <label for="password" class="col-lg-2 col-md-3 col-sm-4 form-label">Password Lama:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="password" class="form-control" id="password">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="newPassword" class="col-lg-2 col-md-3 col-sm-4 form-label">*Password Baru:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="password" class="form-control" id="newPassword" required>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="confirmPassword" class="col-lg-2 col-md-3 col-sm-4 form-label">*Konfirmasi
                        Password:</label>
                      <div class="col-lg-10 col-md-9 col-sm-8">
                        <input type="password" class="form-control" id="confirmPassword" required>
                      </div>
                    </div>

                    <!-- Tombol Simpan dan Batal -->
                    <div class="d-flex justify-content-end mt-4">
                      <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
                      <a href="kelola-pengguna.html" class="btn btn-batal ms-2">Batal</a>
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
    
      // Mengambil data pengguna dari localStorage
      let pengguna = JSON.parse(localStorage.getItem('pengguna')) || [];

      // Fungsi untuk menampilkan profil pengguna
      function displayProfile() {
        const currentUser = pengguna[0];

        if (currentUser) {
          document.getElementById('nipUsername').value = currentUser.nipUsername;
          document.getElementById('namaPengguna').value = currentUser.nama;
          document.getElementById('alamat').value = currentUser.alamat;
          document.getElementById('noHp').value = currentUser.noHp;

          const fotoPreview = document.getElementById('fotoPreview');
          if (currentUser.foto) {
            fotoPreview.src = currentUser.foto;
            fotoPreview.style.display = 'block';
          }
        } else {
          alert('Data pengguna tidak ditemukan.');
        }
      }

      // Fungsi untuk menyimpan perubahan profil
      document.getElementById('editProfileForm').onsubmit = function (event) {
        event.preventDefault();

        const nipUsername = document.getElementById('nipUsername').value;
        const nama = document.getElementById('namaPengguna').value;
        const alamat = document.getElementById('alamat').value;
        const noHp = document.getElementById('noHp').value;
        const foto = document.getElementById('fotoProfil').files[0];

        const newFoto = foto ? URL.createObjectURL(foto) : pengguna[0].foto;

        pengguna[0] = {
          nipUsername,
          nama,
          alamat,
          noHp,
          foto: newFoto
        };

        localStorage.setItem('pengguna', JSON.stringify(pengguna));
        alert('Profil berhasil diperbarui!');
        displayProfile();
      };

      // Fungsi untuk menghapus profil pengguna
      function hapusProfil() {
        if (confirm("Apakah Anda yakin ingin menghapus profil ini?")) {
          pengguna.splice(0, 1);
          localStorage.setItem('pengguna', JSON.stringify(pengguna));
          alert('Profil berhasil dihapus!');
          displayProfile();
        }
      }

      window.onload = displayProfile;
    </script>
@endsection