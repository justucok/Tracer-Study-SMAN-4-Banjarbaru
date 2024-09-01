@extends('layout.admin-dashboard')

@section('content')
<div id="layoutSidenav_content">
    <main>
        {{-- Flash Message --}}
        <div class="container px-4">
            @include('shared.flash-message')
        </div>
        {{-- End Flash Message --}}
        <!-- Card Start -->
        <div class="col-12 col-md-6 col-lg-4 mt-3 p-4 ">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Jumlah Alumni</h5>
                        <p class="card-text">{{ $alumnis->count() }}</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-circle text-success" viewBox="0 0 16 16">
                            <path
                                d="M13.354 4.646a.5.5 0 0 0-.708 0L7 10.293 3.354 6.646a.5.5 0 1 0-.708.708l4 4a.5.5 0 0 0 .708 0l6-6a.5.5 0 0 0 0-.708z" />
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <div class="container-fluid px-4">
            <div class="row">
                {{-- add button --}}
                {{-- <div class="col-2">
                    <a class="btn btn-primary btn-sm m-1" href="{{ route('events.create') }}" role="button">+ Tambah
                        Event</a>
                </div> --}}
                {{-- end add button --}}
                {{-- search bar --}}
                <div class="col-6">
                    <form class="d-flex" action="{{ route('university.index') }}" method="GET" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari nama" name="search"
                            aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>
                </div>
                {{-- end search bar --}}
            </div>
        </div>
        {{-- Download Button --}}
        <div class="container-fluid text-end my-2 pe-4">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">

                </div>
                <div class="col">
                    <a class="btn btn-primary btn-sm" target="blank" href="{{ route('university.show') }}">Download</a>
                </div>
            </div>
        </div>
        {{-- End Download Button --}}
        <div class="container-fluid border rounded m-4">
            <div class="row align-items-start ">
                <div class="col">
                    {{-- filter bar --}}
                    <div class="container my-2">
                        <form class="col-6 d-flex" action="{{ route('university.index') }}" method="GET" role="filter">
                            <input class="form-control me-2" type="search" name="filter" placeholder="--- Masukan Tahun Angkatan ---" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Lihat</button>
                        </form>
                    </div>
                    {{-- end filter bar --}}
                    {{-- filter button --}}
                    <div class="container my-2 mt-3">
                        <form class="col-6 d-flex" action="{{ route('university.index') }}" method="GET">
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group p-2">
                                <input type="radio" class="btn-check" name="filter" id="btnradio1" value="minggu_ini" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio1">Minggu Ini</label>

                                <input type="radio" class="btn-check" name="filter" id="btnradio2" value="bulan_ini" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Bulan Ini</label>

                                <input type="radio" class="btn-check" name="filter" id="btnradio3" value="tahun_ini" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio3">Tahun Ini</label>
                            </div>
                            <button type="submit" class="btn btn-primary mx-2">Cari..</button>
                        </form>
                    </div>
                    {{-- filter button --}}
                    {{-- table --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">THN KELULUSAN</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">UNIVERSITAS</th>
                                <th scope="col">PROGRAM STUDI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnis as $alumni)
                            <tr>
                                <td>{{ $alumni->graduate }}</td>
                                <td>{{ $alumni->name }}</td>
                                <td>{{ $alumni->university }}</td>
                                <td>{{ $alumni->major }}</td>
                                <td>
                                    <a class="btn" href="{{ route('alumnis.edit', $alumni->id) }}">Edit</a>
                                    <form action="{{ route('alumnis.destroy', $alumni->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-toggle text-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- end table --}}
                </div>
            </div>
        </div>

    </main>
</div>
@endsection
