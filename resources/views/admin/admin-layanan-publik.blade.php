@extends('layouts.adminlayout')
@section('child')
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
                        <form id="tambahFasilitasForm" action="/layananpublik" method="POST" enctype="multipart/form-data">
                          @csrf
                          <!-- Dropdown untuk memilih kategori fasilitas -->
                          <div class="form-group row mb-3">
                            <label for="kategoriFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Kategori
                              Fasilitas:</label>
                            <div class="col-lg-10 col-md-9 col-sm-8">
                              <select name="kategori_fasilitas" class="form-control" id="kategoriFasilitas" onchange="tampilkanFormKategori()"
                                required>
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
                              <input name="nama_fasilitas" type="text" class="form-control" id="namaFasilitas" required>
                            </div>
                          </div>
  
                          <!-- Form untuk Fasilitas Pendidikan -->
                          <div id="formPendidikan" style="display: none;">
                            <!-- Input Foto -->
                            <div class="form-group row mb-3">
                              <label for="fotoPendidikan" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="gambar_fasilitas" type="file" class="form-control" id="fotoPendidikan" accept="image/*">
                              </div>
                            </div>
                            <!-- Input Akreditasi -->
                            <div class="form-group row mb-3">
                              <label for="akreditasi" class="col-lg-2 col-md-3 col-sm-4 form-label">Akreditasi:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <select name="akreditasi" class="form-control" id="akreditasi" required>
                                  <option value=" " default>-- Pilih Akreditasi --</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>
                                </select>
                              </div>
                            </div>
                            <!-- Input Alamat -->
                            <div class="form-group row mb-3">
                              <label for="alamat" class="col-lg-2 col-md-3 col-sm-4 form-label">Alamat:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <textarea name="alamat" type="text" class="form-control" id="alamat"></textarea>
                              </div>
                            </div>
                            <!-- Input Jumlah Tenaga Pengajar -->
                            <div class="form-group row mb-3">
                              <label for="jumlahTenagaPengajar" class="col-lg-2 col-md-3 col-sm-4 form-label">Jumlah
                                Tenaga Pengajar:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="jumlah_tenaga_pengajar" type="number" class="form-control" id="jumlahTenagaPengajar">
                              </div>
                            </div>
                            <!-- Input Jumlah Murid -->
                            <div class="form-group row mb-3">
                              <label for="jumlahMurid" class="col-lg-2 col-md-3 col-sm-4 form-label">Jumlah Murid:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="jumlah_murid" type="number" class="form-control" id="jumlahMurid">
                              </div>
                            </div>
                            <!-- Input Fasilitas Utama -->
                            <div class="form-group row mb-3">
                              <label for="fasilitasUtama" class="col-lg-2 col-md-3 col-sm-4 form-label">Fasilitas
                                Utama:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <textarea name="fasilitas_utama" class="form-control" id="fasilitasUtama"></textarea>
                              </div>
                            </div>
                            <!-- Input Visi dan Misi -->
                            <div class="form-group row mb-3">
                              <label for="visi" class="col-lg-2 col-md-3 col-sm-4 form-label">Visi:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <textarea name="visi" class="form-control" id="visi"></textarea>
                              </div>
                            </div>
                            <div class="form-group row mb-3">
                              <label for="misi" class="col-lg-2 col-md-3 col-sm-4 form-label">Misi:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <textarea name="misi" class="form-control" id="misi"></textarea>
                              </div>
                            </div>
                            <!-- Input Kontak -->
                            <div class="form-group row mb-3">
                              <label for="kontak" class="col-lg-2 col-md-3 col-sm-4 form-label">Kontak:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="kontak" type="text" class="form-control" id="kontak">
                              </div>
                            </div>
                            <!-- Input Jam Operasional -->
                            <div class="form-group row mb-3">
                              <label for="jamOperasional" class="col-lg-2 col-md-3 col-sm-4 form-label">Jam
                                Operasional:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="jam_operasional" type="text" class="form-control" id="jamOperasional">
                              </div>
                            </div>
                          </div>
  
                          <!-- Form untuk Fasilitas Publik -->
                          <div id="formPublik" style="display: none;">
                            <!-- Input Foto -->
                            <div class="form-group row mb-3">
                              <label for="fotoPublik" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="gambar_fasilitas" type="file" class="form-control" id="fotoPublik" accept="image/*">
                              </div>
                            </div>
                            <!-- Input Alamat -->
                            <div class="form-group row mb-3">
                              <label for="alamat" class="col-lg-2 col-md-3 col-sm-4 form-label">Alamat:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <textarea name="alamat" type="text" class="form-control" id="alamat"></textarea>
                              </div>
                            </div>
                            <!-- Input Fasilitas Utama -->
                            <div class="form-group row mb-3">
                              <label for="fasilitasUtama" class="col-lg-2 col-md-3 col-sm-4 form-label">Fasilitas
                                Utama:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <textarea name="fasilitas_utama" class="form-control" id="fasilitasUtama"></textarea>
                              </div>
                            </div>
                            <!-- Input Jam Operasional -->
                            <div class="form-group row mb-3">
                              <label for="jamOperasional" class="col-lg-2 col-md-3 col-sm-4 form-label">Jam
                                Operasional:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="jam_operasional" type="text" class="form-control" id="jamOperasional">
                              </div>
                            </div>
                            <!-- Input Kontak -->
                            <div class="form-group row mb-3">
                              <label for="kontak" class="col-lg-2 col-md-3 col-sm-4 form-label">Kontak:</label>
                              <div class="col-lg-10 col-md-9 col-sm-8">
                                <input name="kontak" type="text" class="form-control" id="kontak">
                              </div>
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
  
                  <div>
                    <!-- Tabel Fasilitas Pendidikan -->
                    <h5 class="mt-3">Fasilitas Pendidikan</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                {{-- <th>URL Alamat</th> --}}
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="fasilitasPendidikanTableBody">
                            <!-- Data fasilitas pendidikan akan ditambahkan di sini -->
                            @foreach ($layananpublik as $fasilitas)
                            @if ($fasilitas->kategori_fasilitas === 'pendidikan')
                                
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $fasilitas->kategori_fasilitas }}</td>
                              <td>{{ $fasilitas->nama_fasilitas }}</td>
                              {{-- <td>{{ $fasilitaspendidikan->url_alamat }}</td> --}}
                              <td><img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}"
                                alt="" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>
                                  <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                  data-bs-target="#editPerangkatModal"
                                  onclick="loadEditData({{ $fasilitas }})"><i
                                  class="fa-solid fa-pen-to-square"></i></a>
                                  <form action="/layananpublik/{{ $fasilitas->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class=" btn btn-danger border-0"
                                    onclick="return confirm('Hapus data {{ $fasilitas->nama_fasilitas }}?')"><i
                                    class="fa-solid fa-trash-can"></i></button>
                                  </form>
                                </td>
                                @endif
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
                                {{-- <th>URL Alamat</th> --}}
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="fasilitasPublikTableBody">
                            <!-- Data fasilitas kesehatan akan ditambahkan di sini -->
                            @foreach ($layananpublik as $fasilitas)
                            <tr>
                              @if ($fasilitas->kategori_fasilitas === 'publik')
                                  
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $fasilitas->kategori_fasilitas }}</td>
                              <td>{{ $fasilitas->nama_fasilitas }}</td>
                              {{-- <td>{{ $fasilitaspublik->url_alamat }}</td> --}}
                              <td><img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}"
                                alt="" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>
                                  <a class=" btn btn-warning" href="javascript:void(0)" data-bs-toggle="modal"
                                  data-bs-target="#editPerangkatModal"
                                  onclick="loadEditData({{ $fasilitas }})"><i
                                  class="fa-solid fa-pen-to-square"></i></a>
                                  <form action="/layananpublik/{{ $fasilitas->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class=" btn btn-danger border-0"
                                    onclick="return confirm('Hapus data {{ $fasilitas->nama_fasilitas }}?')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                              </form>
                                      </td>
                                </tr>
                              @endif
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal untuk Edit Perangkat -->
                    <div class="modal fade" id="editPerangkatModal" tabindex="-1" aria-labelledby="editPerangkatModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPerangkatModalLabel">Edit Layanan Public

                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editPerangkatForm" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        {{-- <input type="hidden" id="editIndex"> --}}
                                        <input type="hidden" name="id" id="editId">
                                        <input type="hidden" name="oldImage" id="editGambar">
                                        <div class="mb-3">
                                            <label for="editKategoriFasilitas" class="form-label">Kategori</label>
                                            <input type="text" name="kategori_fasilitas" class="form-control" id="editKategoriFasilitas"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">Nama</label>
                                            <input type="text" name="nama_fasilitas" class="form-control" id="editNama"
                                                required>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="editurlAlamat" class="form-label">URL Alamat</label>
                                            <input type="text" name="url_alamat" class="form-control" id="editurlAlamat"
                                                required>
                                        </div> --}}
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
            document.getElementById('editGambar').value = layananpublik.gambar_fasilitas;
            document.getElementById('editNama').value = layananpublik.nama_fasilitas;
            //document.getElementById('editurlAlamat').value = layananpublik.url_alamat;  
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
        
        function tampilkanFormKategori() {
          const kategori = document.getElementById('kategoriFasilitas').value;
          document.getElementById('formPendidikan').style.display = kategori === 'pendidikan' ? 'block' : 'none';
          document.getElementById('formPublik').style.display = kategori === 'publik' ? 'block' : 'none';
        }

        function toggleTambahFasilitasCard() {
            const card = document.getElementById('tambahFasilitasCard');
            card.style.display = card.style.display === 'none' ? 'block' : 'none';
        }


    </script>
@endsection
