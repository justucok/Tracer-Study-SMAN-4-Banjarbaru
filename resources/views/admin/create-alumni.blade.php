@extends('layout.admin-dashboard')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container m-2 ">
                @if ($editing ?? false)
                    <div class="container border border-2 rounded my-2 ">
                        <form action=" {{ route('alumnis.update', $alumni->id) }} " method="POST">
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
                                                value="{{ $alumni->name }}">
                                            @error('name')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="address" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="address" name="address" rows="3">{{ $alumni->address }}</textarea>
                                            @error('address')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="birth" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="birth" name="birth"
                                                value="{{ $alumni->birth }}">
                                            @error('birth')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="graduate" class="form-label">Tahun Lulus</label>
                                            <input type="number" class="form-control" id="graduate" name="graduate"
                                                value="{{ $alumni->graduate }}">
                                            @error('graduate')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="class" class="form-label">Kelas</label>
                                            <input type="text" class="form-control" id="class" name="class"
                                                value="{{ $alumni->class }}">
                                            @error('class')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="phone" class="form-label">Nomor WhatApps</label>
                                            <input type="phone" class="form-control" id="phone" name="phone"
                                                value="{{ $alumni->phone }}">
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
                                                value="{{ $alumni->university }}">
                                            @error('university')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="major" class="form-label">Jurusan</label>
                                            <input type="text" class="form-control" id="major" name="major"
                                                value="{{ $alumni->major }}">
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
                                        <input type="text" class="form-control" id="job" name="job"
                                            value="{{ $alumni->job }}">
                                        @error('job')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <label for="office_address" class="form-label">Alamat Kantor</label>
                                        <textarea class="form-control" id="office_address" name="office_address" rows="3">{{ $alumni->office_address }}</textarea>
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
                                            value="{{ $alumni->achievement }}">
                                        @error('achievement')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <p>"Jika tidak memiliki prestasi, silahkan isi TIDAK."</p>
                                        <label for="instagram_account" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" id="instagram_account"
                                            name="instagram_account" value="{{ $alumni->instagram_account }}">
                                        @error('instagram_account')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <label for="facebook_account" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="facebook_account"
                                            name="facebook_account" value="{{ $alumni->facebook_account }}">
                                        @error('facebook_account')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <label for="other_account" class="form-label">Sosial Media Lainnya</label>
                                        <textarea class="form-control" id="other_account" name="other_account" rows="3">{{ $alumni->other_account }}</textarea>
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
                        </form>
                    </div>
                @else
                    <div class="container border border-2 rounded my-2 ">
                        <form action=" {{ route('alumnis.store') }} " method="POST">
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
                                                placeholder="Masukan Nama Lengkap Anda">
                                            @error('name')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="address" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="address" name="address" rows="3"
                                                placeholder="Masukan Alamat Lengkap Anda"></textarea>
                                            @error('address')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="birth" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="birth" name="birth">
                                            @error('birth')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="graduate" class="form-label">Tahun Lulus</label>
                                            <input type="number" class="form-control" id="graduate" name="graduate"
                                                placeholder="2020">
                                            @error('graduate')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="class" class="form-label">Kelas</label>
                                            <input type="text" class="form-control" id="class" name="class"
                                                placeholder="12 MIPA 1">
                                            @error('class')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="phone" class="form-label">Nomor WhatApps</label>
                                            <input type="phone" class="form-control" id="phone" name="phone"
                                                placeholder="081234567890">
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
                                                placeholder="Masukan Universitas Anda">
                                            @error('university')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="major" class="form-label">Jurusan</label>
                                            <input type="text" class="form-control" id="major" name="major"
                                                placeholder="Masukan Jurusan Anda">
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
                                        <input type="text" class="form-control" id="job" name="job"
                                            placeholder="Masukan Pekerjaan Anda">
                                        @error('job')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <label for="office_address" class="form-label">Alamat Kantor</label>
                                        <textarea class="form-control" id="office_address" name="office_address" rows="3"
                                            placeholder="Masukan Alamat Kantor Anda"></textarea>
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
                                            placeholder="Masukan Prestasi Anda">
                                        @error('achievement')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <p>"Jika tidak memiliki prestasi, silahkan isi TIDAK."</p>
                                        <label for="instagram_account" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" id="instagram_account"
                                            name="instagram_account" placeholder="Masukan Instagram Anda">
                                        @error('instagram_account')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <label for="facebook_account" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="facebook_account"
                                            name="facebook_account" placeholder="Masukan Facebook Anda">
                                        @error('facebook_account')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                        <label for="other_account" class="form-label">Sosial Media Lainnya</label>
                                        <textarea class="form-control" id="other_account" name="other_account" rows="3"
                                            placeholder="Masukan Sosial Media Anda"></textarea>
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
                        </form>
                    </div>
                @endif
            </div>

        </main>
    </div>
@endsection
