@extends('layout.dashboard')

@section('content')
{{-- Img Banner Start --}}
<div style="position: relative; text-align: center;">
    <img src="https://sman4banjarbaru.sch.id/themes/template3/images/head.jpg" class="img-fluid"
        style="height: 300px; width: 100%" alt="...">
    <div
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 30px; font-weight: bold;">
        PROFILE SAYA
    </div>
</div>
{{-- Img Banner End --}}
{{-- Form --}}

<div class="container border border-2 rounded my-2 ">
    <form action=" {{ route('profile.update', $alumni->id) }} " method="POST">
        @method('put')
        @csrf
        {{-- Data diri --}}
        <div class="container mt-3 ">
            <div class="row align-items-start">
                <div class=" text-primary fw-bold col">
                    Data Diri
                </div>
                <div class="col">
                    <div class="mb-3 ">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Masukan Nama Lengkap Anda" value="{{ old('name', isset($alumni) ? $alumni->name : '') }}">
                        @error('name')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3"
                            placeholder="Masukan Alamat Lengkap Anda">{{ old('name', isset($alumni) ? $alumni->alamat : '') }}</textarea>
                        @error('address')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="birth" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="birth" name="birth" value="{{ old('name', isset($alumni) ? $alumni->birth : '') }}">
                        @error('birth')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="graduate" class="form-label">Angkatan</label>
                        <input type="number" class="form-control" id="graduate" name="graduate" placeholder="2020" value="{{ old('name', isset($alumni) ? $alumni->graduate : '') }}">
                        @error('graduate')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="class" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="class" name="class" placeholder="12 MIPA 1" value="{{ old('name', isset($alumni) ? $alumni->class : '') }}">
                        <label for="phone" class="form-label">Nomor WhatApps</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="081234567890" value="{{ old('name', isset($alumni) ? $alumni->phone : '') }}">
                        @error('phone')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        {{-- End Data diri --}}
        {{-- Universitas --}}
        <div class="container mt-3 ">
            <div class="row align-items-start">
                <div class=" text-primary fw-bold col">
                    Universitas
                </div>
                <div class="col">
                    <div class="mb-3 ">
                        <label for="university" class="form-label">Universitas</label>
                        <input type="text" class="form-control" id="university" name="university"
                            placeholder="Masukan Universitas Anda" value="{{ old('name', isset($alumni) ? $alumni->university : '') }}">
                        @error('university')
                        <span class="d-block text-danger mt-1"> {{ $message}} </span>
                        @enderror
                        <label for="major" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="major" name="major"
                            placeholder="Masukan Jurusan Anda" value="{{ old('name', isset($alumni) ? $alumni->major : '') }}">
                        @error('major')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <p>"Jika tidak berkuliah, silahkan isi TIDAK."</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Universitas --}}
        {{-- Pekerjaan --}}
        <div class="container  mt-2">
            <div class="row align-items-start">
                <div class="text-primary fw-bold col">
                    Pekerjaan
                </div>
                <div class="col">
                    <label for="job" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="job" name="job" placeholder="Masukan Pekerjaan Anda" value="{{ old('name', isset($alumni) ? $alumni->job : '') }}">
                    @error('job')
                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                    <label for="office_address" class="form-label">Alamat Kantor</label>
                    <textarea class="form-control" id="office_address" name="office_address" rows="3"
                        placeholder="Masukan Alamat Kantor Anda">{{ old('name', isset($alumni) ? $alumni->office_address : '') }}</textarea>
                    @error('office_address')
                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                    <p>"Jika tidak bekerja, silahkan isi TIDAK."</p>
                </div>
            </div>
        </div>
        {{-- End Pekerjaan --}}
        {{-- Data Tambahan --}}
        <div class="container mt-2">
            <div class="row align-items-start">
                <div class="text-primary fw-bold col">
                    Data Tambahan
                </div>
                <div class=" col ">
                    <label for="achievement" class="form-label">Prestasi</label>
                    <input type="text" class="form-control" id="achievement" name="achievement"
                        placeholder="Masukan Prestasi Anda" value="{{ old('name', isset($alumni) ? $alumni->achievement : '') }}">
                    @error('achievement')
                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                    <p>"Jika tidak memiliki prestasi, silahkan isi TIDAK."</p>
                    <label for="instagram_account" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="instagram_account" name="instagram_account"
                        placeholder="Masukan Instagram Anda" value="{{ old('name', isset($alumni) ? $alumni->instagram_account : '') }}">
                    @error('instagram_account')
                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                    <label for="facebook_account" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="facebook_account" name="facebook_account"
                        placeholder="Masukan Facebook Anda" value="{{ old('name', isset($alumni) ? $alumni->facebook_account : '') }}">
                    @error('facebook_account')
                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                    <label for="other_account" class="form-label">Sosial Media Lainnya</label>
                    <textarea class="form-control" id="other_account" name="other_account" rows="3"
                        placeholder="Masukan Sosial Media Anda">{{ old('name', isset($alumni) ? $alumni->other_account : '') }}</textarea>
                    @error('other_account')
                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        {{-- End Data Tambahan --}}
        <!-- Start Button -->
        <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
            <a class="nav-link my-2" href="{{ route('dashboard') }}">Batal</a>
            <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
        </div>
        <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
        <!-- End Button -->
    </form>
</div>

{{-- Form End --}}
@endsection
