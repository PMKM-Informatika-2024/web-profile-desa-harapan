@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-kontak">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-3 mb-3">
                <h4>Kelola Kontak Desa</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <form action="/kontak/{{ $kontak->id }}" method="POST">
                                @csrf
                                @method('put')
                                <!-- WhatsApp -->
                                <input type="text" hidden name="id" value="{{ $kontak->id }}">
                                <div class="form-group row mb-3">
                                <label for="whatsapp" class="col-lg-2 col-md-3 col-sm-4 form-label">Nomor WhatsApp:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="text" name="no_whatsapp" class="form-control" id="whatsapp"
                                    value="{{ $kontak->no_whatsapp ?? '' }}" required>
                                </div>
                            </div>
                            
                            <!-- Instagram -->
                            <div class="form-group row mb-3">
                                <label for="instagram" class="col-lg-2 col-md-3 col-sm-4 form-label">Username
                                    Instagram:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="text" name="username_instagram" class="form-control" id="instagram"
                                    value="{{ $kontak->username_instagram ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group row mb-3">
                                <label for="email" class="col-lg-2 col-md-3 col-sm-4 form-label">Email:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="email" name="email" class="form-control" id="email"
                                    value="{{ $kontak->email ?? '' }}" required>
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
