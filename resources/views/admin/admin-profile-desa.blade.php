@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-profile-desa">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-3 mb-3">
                <h4>Kelola Profile Desa</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/profildesa/{{ $profildesa->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                {{-- memanggil id --}}
                                <input type="text" hidden name="id" value="{{ $profildesa->id }}">
                                <!-- Nama Desa -->
                                <div class="form-group row mb-3">
                                    <label for="namaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="text" name="nama_desa" class="form-control" id="namaDesa"
                                        placeholder="Masukkan nama desa"  value="{{ $profildesa->nama_desa ?? '' }}">
                                </div>
                            </div>

                            <!-- Sejarah Desa -->
                            <div class="form-group row mb-3">
                                <label for="sejarahDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Sejarah Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <textarea name="sejarah_desa" class="form-control" id="sejarahDesa" placeholder="Masukkan Sejarah Desa" required>{{ $profildesa->sejarah_desa ?? '' }}</textarea>
                                </div>
                            </div>

                            <!-- Foto Desa -->
                            <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="hidden" name="oldImage" id="editGambar">
                                    <img src="{{ asset('storage/' . $profildesa->gambar_desa) }}" alt="" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    <br>
                                    <br>
                                    <input name="gambar_desa" type="file" class="form-control" id="fotoDesa" accept="image/*" 
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>



                            <!-- Visi Desa -->
                            <div class="form-group row mb-3">
                                <label for="visiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Visi Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <textarea name="visi_desa" class="form-control" id="visiDesa" placeholder="Masukkan Visi Desa" required>{{ $profildesa->visi_desa ?? '' }}</textarea>
                                </div>
                            </div>

                            <!-- Misi Desa -->
                            <div class="form-group row mb-3">
                                <label for="misiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Misi Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <textarea name="misi_desa" class="form-control" id="misiDesa" placeholder="Masukkan Misi Desa" required>{{ $profildesa->misi_desa ?? '' }}</textarea>
                                </div>
                            </div>

                            <!-- Additional Details (Total Jiwa, Total KK, Total Dusun, Total RT) -->
                            <div class="form-group row gx-3 gy-3">
                                <div class="col-lg-3 col-md-6">
                                    <label for="totalJiwa" class="form-label">Total Jiwa:</label>
                                    <input name="total_jiwa" type="number" class="form-control" id="totalJiwa" value="{{ $profildesa->total_jiwa ?? '' }}" required>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <label for="totalKK" class="form-label">Total KK:</label>
                                    <input name="total_kk" type="number" class="form-control" id="totalKK" value="{{ $profildesa->total_kk ?? '' }}" required>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <label for="totalDusun" class="form-label">Total Dusun:</label>
                                    <input name="total_dusun" type="number" class="form-control" id="totalDusun" value="{{ $profildesa->total_dusun ?? '' }}" required>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <label for="totalRT" class="form-label">Total RT:</label>
                                    <input name="total_rt" type="number" class="form-control" id="totalRT" value="{{ $profildesa->total_rt ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Suku -->
                            {{-- <div class="form-group row mt-3 mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Suku:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <div class="row gx-3 gy-2">
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuMelayu" class="form-label">Melayu</label>
                                            <input type="number" class="form-control" id="sukuMelayu" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuMadura" class="form-label">Madura</label>
                                            <input type="number" class="form-control" id="sukuMadura" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuTionghoa" class="form-label">Tionghoa</label>
                                            <input type="number" class="form-control" id="sukuTionghoa" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuDayak" class="form-label">Dayak</label>
                                            <input type="number" class="form-control" id="sukuDayak" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuJawa" class="form-label">Jawa</label>
                                            <input type="number" class="form-control" id="sukuJawa" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuBugis" class="form-label">Bugis</label>
                                            <input type="number" class="form-control" id="sukuBugis" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuLainnya" class="form-label">Lainnya</label>
                                            <input type="number" class="form-control" id="sukuLainnya" placeholder=""
                                                min="0">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Agama -->
                            {{-- <div class="form-group row mt-3 mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Agama:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <div class="row gx-3 gy-2">
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaIslam" class="form-label">Islam</label>
                                            <input type="number" class="form-control" id="agamaIslam" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKatolik" class="form-label">Katolik</label>
                                            <input type="number" class="form-control" id="agamaKatolik" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaProtestan" class="form-label">Protestan</label>
                                            <input type="number" class="form-control" id="agamaProtestan"
                                                placeholder="" min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaBuddha" class="form-label">Buddha</label>
                                            <input type="number" class="form-control" id="agamaBuddha" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaHindu" class="form-label">Hindu</label>
                                            <input type="number" class="form-control" id="agamaHindu" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKonghuchu" class="form-label">Konghuchu</label>
                                            <input type="number" class="form-control" id="agamaKonghuchu"
                                                placeholder="" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Peta Desa -->
                            <div class="form-group row mt-3 mb-3">
                                <label for="petaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Peta Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input name="peta_desa" type="url" class="form-control" id="petaDesa"
                                        placeholder="Masukkan tautan alamat peta Desa" value="{{ $profildesa->peta_desa }}" required>
                                </div>
                            </div>

                            <!-- Kantor Desa -->
                            <div class="form-group row mt-3 mb-3">
                                <label for="kantorDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Kantor Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <textarea name="kantor_desa" type="text" class="form-control" id="kantorDesa" placeholder="Masukkan alamat Kantor Desa" required>{{ $profildesa->kantor_desa }}</textarea>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-simpan">Simpan</button>
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
        
        // preview image
        // function previewImages() {
        //     const previewContainer = document.getElementById('imagePreview');
        //     const files = document.getElementById('fotoDesa').files;

        //     previewContainer.innerHTML = '';

        //     Array.from(files).forEach((file) => {
        //         const reader = new FileReader();

        //         reader.onload = function(event) {
        //             const imageDiv = document.createElement('div');
        //             imageDiv.style.position = 'relative';
        //             imageDiv.style.display = 'inline-block';
        //             imageDiv.style.marginRight = '10px';

        //             const img = document.createElement('img');
        //             img.src = event.target.result;
        //             img.style.width = '100px';
        //             img.style.height = 'auto';
        //             img.style.borderRadius = '5px';

        //             const removeBtn = document.createElement('span');
        //             removeBtn.innerHTML = '✖';
        //             removeBtn.style.position = 'absolute';
        //             removeBtn.style.top = '0';
        //             removeBtn.style.right = '0';
        //             removeBtn.style.color = 'red';
        //             removeBtn.style.cursor = 'pointer';
        //             removeBtn.onclick = function() {
        //                 // Remove the image and its corresponding file from the input
        //                 const newFileList = Array.from(files).filter(f => f !== file);
        //                 const dataTransfer = new DataTransfer();
        //                 newFileList.forEach(f => dataTransfer.items.add(f));
        //                 document.getElementById('fotoDesa').files = dataTransfer.files;

        //                 imageDiv.remove();
        //             };

        //             imageDiv.appendChild(img);
        //             imageDiv.appendChild(removeBtn);
        //             previewContainer.appendChild(imageDiv);
        //         };

        //         reader.readAsDataURL(file);
        //     });
        // }
    </script>
@endsection
