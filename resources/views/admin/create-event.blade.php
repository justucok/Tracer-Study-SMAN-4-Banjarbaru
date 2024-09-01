@extends('layout.admin-dashboard')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container m-2 ">
                @if ($editing ?? false)
                    <div class="container border border-2 rounded my-2 ">
                        <form action=" {{ route('events.update', $event->id) }} " method="POST">
                            @method('put')
                            @csrf
                            {{-- Data event --}}
                            <div class="container mt-3 ">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Data Event
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label for="event_name" class="form-label">Nama Event</label>
                                            <input type="text" class="form-control" id="event_name" name="event_name"
                                                value="{{ $event->event_name }}">
                                            @error('event_name')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="location" class="form-label">Tempat</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                value="{{ $event->location }}">
                                            @error('location')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="note" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="note" name="note" rows="3">{{ $event->note }}</textarea>
                                            @error('note')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Data Event --}}
                            {{-- Tanggal Event --}}
                            <div class="container mt-3">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Tanggal & Jam
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="event_date" class="form-label">Tanggal</label>
                                                <input type="date" class="form-control" id="event_date" name="event_date"
                                                    value="{{ $event->event_date }}">
                                                @error('event_date')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class=" col-5">
                                                <label for="event_time" class="form-label">Jam</label>
                                                <input type="time" class="form-control" id="event_time" name="event_time"
                                                    value="{{ $event->event_time }}">
                                                @error('event_time')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tanggal Event End --}}
                                <!-- Start Button -->
                                <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                                    <a class="nav-link my-2" href="{{ route('events.index') }}">Batal</a>
                                    <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                                </div>
                                <p class="text-center text-danger">"Semua Kolom Wajib Diisi!!!."</p>
                                <!-- End Button -->
                        </form>
                    </div>
                @else
                    <div class="container border border-2 rounded my-2 ">
                        <form action=" {{ route('events.store') }} " method="POST">
                            @csrf
                            {{-- Data event --}}
                            <div class="container mt-3 ">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Data Event
                                    </div>
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label for="event_name" class="form-label">Nama Event</label>
                                            <input type="text" class="form-control" id="event_name" name="event_name"
                                                placeholder="Masukan Nama Event Yang Akan Ditambahkan">
                                            @error('event_name')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="location" class="form-label">Tempat</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                placeholder="Masukan Lokasi Event">
                                            @error('location')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                            <label for="note" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="note" name="note" rows="3" placeholder="Masukan Alamat Lengkap Anda"></textarea>
                                            @error('note')
                                                <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Data Event --}}
                            {{-- Tanggal Event --}}
                            <div class="container mt-3">
                                <div class="row align-items-start">
                                    <div class=" text-primary fw-bold col">
                                        Tanggal & Jam
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="event_date" class="form-label">Tanggal</label>
                                                <input type="date" class="form-control" id="event_date"
                                                    name="event_date">
                                                @error('event_date')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class=" col-5">
                                                <label for="event_time" class="form-label">Jam</label>
                                                <input type="time" class="form-control" id="event_time"
                                                    name="event_time">
                                                @error('event_time')
                                                    <span class="d-block text-danger mt-1"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tanggal Event End --}}
                                <!-- Start Button -->
                                <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                                    <a class="nav-link my-2" href="{{ route('events.index') }}">Batal</a>
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
