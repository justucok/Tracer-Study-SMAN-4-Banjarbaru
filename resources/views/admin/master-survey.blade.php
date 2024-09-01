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
                            <h5 class="card-title">Jumlah Laporan</h5>
                            <p class="card-text">{{ $surveys->count() }}</p>
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
            {{-- search bar --}}
            <div class="container-fluid px-4">
                <div class="row">
                    {{-- add button --}}
                    {{-- <div class="col-2">
                        <a class="btn btn-primary btn-sm m-1" href="{{ route('events.create') }}" role="button">+ Tambah
                            Event</a>
                    </div> --}}
                    {{-- end add button --}}
                    <div class="col-6">
                        <form class="d-flex" action="{{ route('survey.index') }}" method="GET" role="search">
                            <input class="form-control me-2" type="search" placeholder="Cari Nama" name="search"
                                aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end search bar --}}
            {{-- download button --}}
            <div class="container-fluid my-2">
                <div class="row">
                    <div class="col ps-4">

                    </div>
                    <div class="col">

                    </div>
                    <div class="col pe-4 text-end ">
                        <a class="btn btn-primary btn-sm" target="blank" href="{{ route('survey.show') }}">Download</a>
                    </div>
                </div>
            </div>
            {{-- end download button --}}
            {{-- start table --}}
            <div class="container-fluid border rounded m-4">
                <div class="row align-items-start p-4">
                    {{-- <div class=" border rounded col">
                     <div class="container my-2">
                    @include('shared.filter-button')
                </div> --}}
                    {{-- table event --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">ANGKATAN</th>
                                <th scope="col">TAHUN LULUS</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surveys as $survey)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $survey->nama }}</td>
                                    <td>{{ $survey->angkatan }}</td>
                                    <td>{{ $survey->thn_lulus }}</td>
                                    <td>
                                        <a class="btn" href="{{ route('survey.edit', $survey->id) }}">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    {{-- end table --}}
    </main>
    </div>
@endsection
