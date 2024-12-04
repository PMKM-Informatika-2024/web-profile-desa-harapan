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
                <h4>Kelola Video Profile Desa</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/videoprofile/{{ $videoprofile->id }}" method="POST">
                                @csrf
                                @method('put')
                                <input type="hidden" >
                                <div class="form-group row mt-3 mb-3">
                                    <label for="videoprofile" class="col-lg-2 col-md-3 col-sm-4 form-label">URL Video:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input name="url_video" type="text" class="form-control" id="videoprofile"
                                        placeholder="Masukkan tautan Video Profile" value="{{ $videoprofile->url_video }}" required>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-simpan">Simpan</button>
                                    </div>
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
