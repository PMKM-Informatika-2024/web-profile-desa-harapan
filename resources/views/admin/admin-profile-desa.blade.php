@extends('layouts.adminlayout')
@section('child')
@section('title', 'Admin - Profile Desa - Desa Harapan')

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
                                    <input type="hidden" name="sejarah_desa" class="form-control" id="sejarahDesa" value="{!! $profildesa->sejarah_desa !!}" required></input>
                                    <trix-editor input="sejarahDesa"></trix-editor>
                                </div>
                            </div>
                            <!-- Visi Desa -->
                            <div class="form-group row mb-3">
                                <label for="visiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Visi Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="hidden" name="visi_desa" class="form-control" id="visiDesa" value="{!! $profildesa->visi_desa !!}" required></input>
                                    <trix-editor input="visiDesa"></trix-editor>
                                </div>
                            </div>
                            <!-- Misi Desa -->
                            <div class="form-group row mb-3">
                                <label for="misiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Misi Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="hidden" name="misi_desa" class="form-control" id="misiDesa" value="{!! $profildesa->misi_desa !!}" required></input>
                                    <trix-editor input="misiDesa"></trix-editor>
                                </div>
                            </div>
                            <br>

                            <!-- Foto Desa -->

                            <input type="hidden" name="oldImage1" value="{{ $profildesa->gambar_desa_1 }}">
                            <input type="hidden" name="oldImage2" value="{{ $profildesa->gambar_desa_2 }}">
                            <input type="hidden" name="oldImage3" value="{{ $profildesa->gambar_desa_3 }}">
                            <input type="hidden" name="oldImage4" value="{{ $profildesa->gambar_desa_4 }}">
                            <input type="hidden" name="oldImage5" value="{{ $profildesa->gambar_desa_5 }}">
                            <input type="hidden" name="oldImage6" value="{{ $profildesa->gambar_desa_6 }}">

                            
                            <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <img src="{{ asset('storage/' . $profildesa->gambar_desa_1) }}" alt="" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    <br>
                                    <br>
                                    <input name="gambar_desa_1" type="file" class="form-control" id="fotoDesa1" accept="image/*" 
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label"></label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <img src="{{ asset('storage/' . $profildesa->gambar_desa_2) }}" alt="" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    <br>
                                    <br>
                                    <input name="gambar_desa_2" type="file" class="form-control" id="fotoDesa2" accept="image/*" 
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label"></label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <img src="{{ asset('storage/' . $profildesa->gambar_desa_3) }}" alt="" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    <br>
                                    <br>
                                    <input name="gambar_desa_3" type="file" class="form-control" id="fotoDesa3" accept="image/*" 
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label"></label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <img src="{{ asset('storage/' . $profildesa->gambar_desa_4) }}" alt="" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    <br>
                                    <br>
                                    <input name="gambar_desa_4" type="file" class="form-control" id="fotoDesa4" accept="image/*" 
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label"></label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <img src="{{ asset('storage/' . $profildesa->gambar_desa_5) }}" alt="" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    <br>
                                    <br>
                                    <input name="gambar_desa_5" type="file" class="form-control" id="fotoDesa5" accept="image/*" 
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label"></label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <img src="{{ asset('storage/' . $profildesa->gambar_desa_6) }}" alt="" class="img-thumbnail" style="width: 100px; height: 100px;">
                                    <br>
                                    <br>
                                    <input name="gambar_desa_6" type="file" class="form-control" id="fotoDesa6" accept="image/*" 
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>
                            <br>
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
                            <br>
                            <!-- Suku -->
                            <div class="form-group row mt-3 mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Suku:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <div class="row gx-3 gy-2">
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuMelayu" class="form-label">Melayu</label>
                                            <input type="number" name="suku_melayu" value="{{ $profildesa->suku_melayu }}" class="form-control" id="sukuMelayu" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuMelayuSambas" class="form-label">Melayu Sambas</label>
                                            <input type="number" name="suku_melayusambas" value="{{ $profildesa->suku_melayusambas }}" class="form-control" id="sukuMelayuSambas" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuTionghoa" class="form-label">Tionghoa</label>
                                            <input type="number" name="suku_tionghoa" value="{{ $profildesa->suku_tionghoa }}" class="form-control" id="sukuTionghoa" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuDayak" class="form-label">Dayak</label>
                                            <input type="number" name="suku_dayak" value="{{ $profildesa->suku_dayak }}" class="form-control" id="sukuDayak" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuJawa" class="form-label">Jawa</label>
                                            <input type="number" name="suku_jawa" value="{{ $profildesa->suku_jawa }}" class="form-control" id="sukuJawa" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuBugis" class="form-label">Bugis</label>
                                            <input type="number" name="suku_bugis" value="{{ $profildesa->suku_bugis }}" class="form-control" id="sukuBugis" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="sukuLainnya" class="form-label">Lainnya</label>
                                            <input type="number" name="suku_lainnya" value="{{ $profildesa->suku_lainnya }}" class="form-control" id="sukuLainnya" placeholder=""
                                                min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Agama -->
                            <div class="form-group row mt-3 mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Agama:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <div class="row gx-3 gy-2">
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaIslam" class="form-label">Islam</label>
                                            <input type="number" name="agama_islam" value="{{ $profildesa->agama_islam }}" class="form-control" id="agamaIslam" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKatolik" class="form-label">Katolik</label>
                                            <input type="number" name="agama_katolik" value="{{ $profildesa->agama_katolik }}" class="form-control" id="agamaKatolik" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaProtestan" class="form-label">Protestan</label>
                                            <input type="number" name="agama_protestan" value="{{ $profildesa->agama_protestan }}" class="form-control" id="agamaProtestan"
                                                placeholder="" min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaBuddha" class="form-label">Buddha</label>
                                            <input type="number" name="agama_buddha" value="{{ $profildesa->agama_buddha }}" class="form-control" id="agamaBuddha" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaHindu" class="form-label">Hindu</label>
                                            <input type="number" name="agama_hindu" value="{{ $profildesa->agama_hindu }}" class="form-control" id="agamaHindu" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKonghuchu" class="form-label">Konghuchu</label>
                                            <input type="number" name="agama_konghucu" value="{{ $profildesa->agama_konghucu }}" class="form-control" id="agamaKonghuchu"
                                                placeholder="" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Peta Desa -->
                            <div class="form-group row mt-3 mb-3">
                                <label for="petaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Peta Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input name="peta_desa" type="text" class="form-control" id="petaDesa"
                                        placeholder="Masukkan tautan alamat peta Desa" value="{{ $profildesa->peta_desa }}" required>
                                </div>
                            </div>
                            <br>
                            <!-- Kantor Desa -->
                            <div class="form-group row mb-3">
                                <label for="kantorDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Kantor Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="hidden" name="kantor_desa" class="form-control" id="kantorDesa" value="{!! $profildesa->kantor_desa !!}" required></input>
                                    <trix-editor input="kantorDesa"></trix-editor>
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
        
    </script>
@endsection
