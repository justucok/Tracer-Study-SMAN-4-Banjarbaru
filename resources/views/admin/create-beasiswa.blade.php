@extends('layout.admin-dashboard')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container m-2 ">
                @if ($editing ?? false)
                    <div class="container border border-2 rounded my-2 ">
                        <form action="{{ route('beasiswa.update', $beasiswa->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            {{-- Data beasiswa --}}
                            <div class="container mt-3 ">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Data Beasiswa
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label for="nama_beasiswa" class="form-label">Nama Beasiswa</label>
                                            <input type="text" class="form-control" id="nama_beasiswa"
                                                name="nama_beasiswa" value="{{ $beasiswa->nama_beasiswa }}">
                                            @error('nama_beasiswa')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="url_beasiswa" class="form-label">URL</label>
                                            <input type="text" class="form-control" id="url_beasiswa" name="url_beasiswa"
                                                value="{{ $beasiswa->url_beasiswa }}">
                                            @error('url_beasiswa')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="ket_beasiswa" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="ket_beasiswa" name="ket_beasiswa" rows="3">{{ $beasiswa->ket_beasiswa }}</textarea>
                                            @error('ket_beasiswa')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Data Beasiswa --}}
                            {{-- Tanggal Beasiswa --}}
                            <div class="container mt-3">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Tanggal Mulai dan Selesai
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                                <input type="date" class="form-control" id="tanggal_mulai"
                                                    name="tanggal_mulai" value="{{ $beasiswa->tanggal_mulai }}">
                                                @error('tanggal_mulai')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class=" col-5">
                                                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                                <input type="date" class="form-control" id="tanggal_selesai"
                                                    name="tanggal_selesai" value="{{ $beasiswa->tanggal_selesai }}">
                                                @error('tanggal_selesai')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Tanggal Beasiswa End --}}
                            {{-- Image Beasiswa Start --}}

                            {{-- Image Beasiswa End --}}
                            {{-- Lampiran Beasiswa Start --}}
                            <div class="container mt-3">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Lampiran File
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-5">
                                                {{-- <label for="image" class="form-label">Image</label> --}}
                                                @if ($beasiswa->image)
                                                    <div>
                                                        <img src="{{ asset('storage/' . $beasiswa->image) }}"
                                                            class="img-thumbnail text-danger" alt="Cannot Load Images">
                                                        <p>Current File: {{ basename($beasiswa->image) }}</p>
                                                    </div>
                                                @else
                                                    <p>No image uploaded</p>
                                                @endif
                                                <input name="image" class="form-control" type="file">
                                                @error('image')
                                                    <span class="d-block text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Lampiran Beasiswa End --}}
                                <!-- Start Button -->
                                <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                                    <a class="nav-link my-2" href="{{ route('beasiswa.index') }}">Batal</a>
                                    <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                                </div>
                                <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
                                <!-- End Button -->
                        </form>
                    </div>
                @else
                    <div class="container border border-2 rounded my-2 ">
                        <form action=" {{ route('beasiswa.store') }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Data beasiswa --}}
                            <div class="container mt-3">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Data Beasiswa
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label for="nama_beasiswa" class="form-label">Nama </label>
                                            <input type="text" class="form-control" id="nama_jofair" name="nama_beasiswa"
                                                placeholder="Masukan Nama Beasiswa Yang Akan Ditambahkan">
                                            @error('nama_beasiswa')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="url_beasiswa" class="form-label">URL Beasiswa</label>
                                            <input type="text" class="form-control" id="url_beasiswa" name="url_beasiswa"
                                                placeholder="Masukan Lokasi URL Beasiswa (contoh:http://beasiswa.com)">
                                            @error('url_beasiswa')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="ket_beasiswa" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="ket_beasiswa" name="ket_beasiswa" rows="3"
                                                placeholder="Masukan Keterangan Beasiswa"></textarea>
                                            @error('ket_beasiswa')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Data Beasiswa --}}
                            {{-- Tanggal Beasiswa --}}
                            <div class="container mt-3 ">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Tanggal Mulai & Selesai
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                                <input type="date" class="form-control" id="tanggal_mulai"
                                                    name="tanggal_mulai">
                                                @error('tanggal_mulai')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class=" col-5">
                                                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                                <input type="date" class="form-control" id="tanggal_selesai"
                                                    name="tanggal_selesai">
                                                @error('tanggal_selesai')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Tanggal Beasiswa End --}}
                            {{-- Lampiran Beasiswa Start --}}
                            <div class="container mt-3 ">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Lampiran File
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="image"
                                                    name="image">
                                                @error('image')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Lampiran Beasiswa End --}}
                                <!-- Start Button -->
                                <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                                    <a class="nav-link my-2" href="{{ route('beasiswa.index') }}">Batal</a>
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
