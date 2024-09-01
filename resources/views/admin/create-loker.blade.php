@extends('layout.admin-dashboard')

@section('content')
    <div class="container m-2 ">
        @if ($editing ?? false)
            <div class="container border border-2 rounded my-2 ">
                <form action="{{ route('loker.update', $loker->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    {{-- Data Loker --}}
                    <div class="container mt-3 ">
                        <div class="row align-items-start">
                            <div class=" text-primary fw-bold col">
                                Data Loker
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="judul_loker" class="form-label">Judul Loker</label>
                                    <input type="text" class="form-control" id="judul_loker" name="judul_loker"
                                        value="{{ $loker->judul_loker }}">
                                    @error('judul_loker')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="nama_penyedia" class="form-label">Nama Penyedia</label>
                                    <input type="text" class="form-control" id="nama_penyedia" name="nama_penyedia"
                                        value="{{ $loker->nama_penyedia }}">
                                    @error('nama_penyedia')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $loker->deskripsi }}</textarea>
                                    @error('deskripsi')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="kualifikasi" class="form-label">kualifikasi</label>
                                    <textarea class="form-control" id="kualifikasi" name="kualifikasi" rows="3">{{ $loker->kualifikasi }}</textarea>
                                    @error('kualifikasi')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        value="{{ $loker->alamat }}">
                                    @error('alamat')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="email" class="form-label">E-Mail</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ $loker->email }}">
                                    @error('email')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="phone" class="form-label">No. Telpon</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ $loker->phone }}">
                                    @error('email')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Data Loker --}}
                    {{-- Tanggal Loker --}}
                    <div class="container mt-3">
                        <div class="row align-items-start">
                            <div class=" text-primary fw-bold col">
                                Deadline Apply
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-5">
                                        <label for="tanggal" class="form-label">Deadline Apply</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                                            value="{{ $loker->tanggal }}">
                                        @error('tanggal')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Tanggal Loker End --}}
                    </div>
                    <!-- Start Button -->
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                        <a class="nav-link my-2" href="{{ route('loker.index') }}">Batal</a>
                        <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                    </div>
                    <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
                    <!-- End Button -->
                </form>
            </div>
        @else
            <div class="container border border-2 rounded my-2 ">
                <form action=" {{ route('loker.store') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Data Loker --}}
                    <div class="container mt-3 ">
                        <div class="row align-items-start">
                            <div class=" text-primary fw-bold col">
                                Data Lowongan Pekerjaan
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="judul_loker" class="form-label">Judul Loker</label>
                                    <input type="text" class="form-control" id="judul_loker" name="judul_loker"
                                        placeholder="Masukan Posisi Lowongan Pekerjaan">
                                    @error('judul_loker')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="nama_penyedia" class="form-label">Nama Penyedia</label>
                                    <input type="text" class="form-control" id="nama_penyedia" name="nama_penyedia"
                                        placeholder="Masukan Nama Penyedia Penyedia Lowongan Pekerjaan">
                                    @error('nama_penyedia')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" placeholder="Masukan Deskripsi Pekerjaan" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                    @error('deskripsi')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="kualifikasi" class="form-label">Kualifikasi</label>
                                    <textarea class="form-control" placeholder="Masukan Kualifikasi yang dibutuhkan" id="kualifikasi" name="kualifikasi" rows="3"></textarea>
                                    @error('kualifikasi')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Masukan Alamat Kantor">
                                    @error('alamat')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="email" class="form-label">E-Mail</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Masukan e-mail Perusahaan">
                                    @error('email')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                    <label for="phone" class="form-label">No. Telpon</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Masukan Nomor Telepon Kantor">
                                    @error('phone')
                                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Data Loker --}}
                    {{-- Tanggal Loker --}}
                    <div class="container mt-3">
                        <div class="row align-items-start">
                            <div class=" text-primary fw-bold col">
                                Deadline Apply
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-5">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                                        @error('tanggal')
                                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tanggal Loker End --}}
                    {{-- Lampiran Loker Start --}}
                    <div class="container mt-3">
                        <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                            <a class="nav-link my-2" href="{{ route('loker.index') }}">Batal</a>
                            <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                        </div>
                        <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
                        <!-- End Button -->
                    </div>
                </form>
            </div>
        @endif

    </div>
@endsection
