@extends('layout.admin-dashboard')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container m-2 ">
                @if ($editing ?? false)
                    <div class="container border border-2 rounded my-2 ">
                        <form action="{{ route('jobfair.update', $jobfair->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            {{-- Data jobfair --}}
                            <div class="container mt-3 ">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Data Jobfair
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label for="nama_jobfair" class="form-label">Nama Jobfair</label>
                                            <input type="text" class="form-control" id="nama_jobfair" name="nama_jobfair"
                                                value="{{ $jobfair->nama_jobfair }}">
                                            @error('nama_jobfair')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="url_jobfair" class="form-label">URL</label>
                                            <input type="text" class="form-control" id="url_jobfair" name="url_jobfair"
                                                value="{{ $jobfair->url_jobfair }}">
                                            @error('url_jobfair')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="ket_jobfair" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="ket_jobfair" name="ket_jobfair" rows="3">{{ $jobfair->ket_jobfair }}</textarea>
                                            @error('ket_jobfair')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Data Jobfair --}}
                            {{-- Tanggal Jobfair --}}
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
                                                    name="tanggal_mulai" value="{{ $jobfair->tanggal_mulai }}">
                                                @error('tanggal_mulai')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class=" col-5">
                                                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                                <input type="date" class="form-control" id="tanggal_selesai"
                                                    name="tanggal_selesai" value="{{ $jobfair->tanggal_selesai }}">
                                                @error('tanggal_selesai')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tanggal Jobfair End --}}
                                {{-- Image Jobfair Start --}}
                                {{-- Image Jobfair End --}}

                            </div>
                            {{-- Lampiran Jobfair Start --}}
                            <div class="container mt-3">
                                <div class="row align-items-start">
                                    <div class="text-primary fw-bold col">
                                        Lampiran File
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="image" class="form-label">Image</label>
                                                @if ($jobfair->image)
                                                <div>
                                                    <img src="{{ asset('storage/' . $jobfair->image) }}"
                                                        class="img-thumbnail text-danger" alt="Cannot Load Images">
                                                    <p>Current File: {{ basename($jobfair->image) }}</p>
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
                            </div>
                            {{-- Lampiran Jobfair End --}}
                            <!-- Start Button -->
                            <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                                <a class="nav-link my-2" href="{{ route('jobfair.index') }}">Batal</a>
                                <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                            </div>
                            <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
                            <!-- End Button -->
                        </form>
                    </div>
                @else
                    <div class="container border border-2 rounded my-2 ">
                        <form action=" {{ route('jobfair.store') }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Data Jobfair --}}
                            <div class="container mt-3 ">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Data Jobfair
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label for="nama_jobfair" class="form-label">Nama </label>
                                            <input type="text" class="form-control" id="nama_jofair" name="nama_jobfair"
                                                placeholder="Masukan Nama jobfair Yang Akan Ditambahkan">
                                            @error('nama_jobfair')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="url_jobfair" class="form-label">URL Jobfair</label>
                                            <input type="text" class="form-control" id="url_jobfair" name="url_jobfair"
                                                placeholder="Masukan Lokasi URL Jobfair (contoh: http://jobfair.com)">
                                            @error('url_jobfair')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="ket_jobfair" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="ket_jobfair" name="ket_jobfair" rows="3"
                                                placeholder="Masukan Keterangan Jobfair"></textarea>
                                            @error('ket_jobfair')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- End Data Jobfair --}}
                            {{-- Tanggal Jobfair --}}
                            <div class="container mt-3">
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
                            {{-- Tanggal Jobfair End --}}
                            {{-- Lampiran Jobfair Start --}}
                            <div class="container mt-3">
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
                                {{-- Lampiran Jobfair End --}}
                                <!-- Start Button -->
                                <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                                    <a class="nav-link my-2" href="{{ route('jobfair.index') }}">Batal</a>
                                    <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                                </div>
                                <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
                                <!-- End Button -->
                            </div>
                        </form>
                    </div>
                @endif

            </div>

        </main>
    </div>
@endsection
