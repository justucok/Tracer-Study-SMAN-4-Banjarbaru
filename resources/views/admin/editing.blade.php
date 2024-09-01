@extends('layout.dashboard') 

@section('content')
<h1>editing</h1>
<div class="container m-2 ">
    <div class="container border border-2 rounded my-2 ">
        {{-- <form action=" {{ route('alumnis.store') }} " method="POST">
            @csrf --}}
            {{-- Data diri --}}
            <div class="container mt-3 ">
                <div class="row align-items-start">
                    <div class=" text-primary fw-bold col">
                        Data Diri
                    </div>
                    <div class="col">
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="fname" name="fname" value="nama" disabled>
                            @error('name')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="address" class="form-label">Alamat</label>
                            <textarea id="address" name="address" rows="4" cols="50" disabled>Alamat</textarea>
                            @error('address')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="birth" class="form-label">Tanggal Lahir</label>
                            <input type="text" id="fname" name="fname" value="Birth" disabled>
                            @error('birth')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="graduate" class="form-label">Tahun Lulus</label>
                            <input type="text" id="fname" name="fname" value="Graduate" disabled>
                            @error('graduate')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="class" class="form-label">Kelas</label>
                            <input type="text" id="fname" name="fname" value="Class" disabled>
                            @error('class')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="phone" class="form-label">Nomor WhatApps</label>
                            <input type="text" id="fname" name="fname" value="081234567890" disabled>
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
                            <input type="text" id="fname" name="fname" value="University" disabled>
                            @error('university')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="major" class="form-label">Jurusan</label>
                            <input type="text" id="fname" name="fname" value="Major" disabled>
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
                        <input type="text" id="fname" name="fname" value="Job" disabled>
                        @error('job')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="office_address" class="form-label">Alamat Kantor</label>
                        <textarea id="address" name="address" rows="4" cols="50" disabled>Alamat</textarea>
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
                        <input type="text" id="fname" name="fname" value="Prestasi" disabled>
                        @error('achievement')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <p>"Jika tidak memiliki prestasi, silahkan isi TIDAK."</p>
                        <label for="instagram_account" class="form-label">Instagram</label>
                        <input type="text" id="fname" name="fname" value="Instagram" disabled>
                        @error('instagram_account')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="facebook_account" class="form-label">Facebook</label>
                        <input type="text" id="fname" name="fname" value="Facebook" disabled>
                        @error('facebook_account')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="other_account" class="form-label">Sosial Media Lainnya</label>
                        <textarea id="address" name="address" rows="4" cols="50" disabled>Sosial Media</textarea>
                        @error('other_account')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- End Data Tambahan --}}
            <!-- Start Button -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                <a class="nav-link my-2" href="{{ route('alumnis.index') }}">Batal</a>
                <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
            </div>
            <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
            <!-- End Button -->
        {{-- </form> --}}
    </div>
</div>

@endsection
