@extends('layout.dashboard')

@section('content')
    <div style="position: relative; text-align: center;">
        <img src="https://sman4banjarbaru.sch.id/themes/template3/images/head.jpg" class="img-fluid"
            style="height: 300px; width: 100%" alt="...">
        <div
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 30px; font-weight: bold;">
            SURVEY KEPUASAN ALUMNI
        </div>
    </div>
    {{-- Img Banner End --}}
    {{-- Form --}}

    <div class="container border border-2 rounded my-2 ">
        <form action=" {{ route('survey.store') }} " method="POST">
            @csrf
            {{-- Data diri --}}
            <div class="container mt-3 ">
                <div class="row align-items-start">
                    <div class=" text-primary fw-bold col">
                        Data Diri
                    </div>
                    <div class="col">
                        <div class="mb-3 ">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukan nama lengkap Anda" value="">
                            @error('nama')
                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <input type="text" inputmode="numeric" class="form-control" id="angkatan" name="angkatan"
                                placeholder="contoh '2020'" value="">
                            @error('angkatan')
                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                            <label for="thn_lulus" class="form-label">Tahun Kelulusan</label>
                            <input type="text" inputmode="numeric" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="contoh '2023'"
                                value="">
                            <label for="phone" class="form-label">Nomor WhatApps</label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                placeholder="Masukan nomor Anda" value="">
                            @error('phone')
                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Data diri --}}
            {{-- Survey Kepuasan Start --}}
            <div class="container mt-2">
                <div class="row align-items-start ">
                    <div class="text-primary fw-bold col ">
                        Survey Kepuasan
                    </div>
                    @include('shared.radio-button')
                </div>
            </div>
            {{-- End Survey Kepuasan --}}
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
