@extends('layout.dashboard')

@section('content')

<style>
    .card-img-top {
        width: 100%;
        height: 200px; /* Set the height you want for all images */
        object-fit: cover; /* This will crop the image to fit the dimensions */
    }
</style>

    {{-- Img Banner Start --}}
    <div style="position: relative; text-align: center;">
        <img src="https://sman4banjarbaru.sch.id/themes/template3/images/head.jpg" class="img-fluid"
            style="height: 300px; width: 100%" alt="...">
        <div
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 30px; font-weight: bold;">
            EVENT YANG AKAN DIBUKA
        </div>
    </div>
    {{-- Img Banner End --}}
    {{-- Flash Message --}}
    @include('shared.flash-message')
    {{-- End Flash Message --}}
    {{-- Card Start --}}
    @include('shared.card')
    {{-- Card End --}}
    {{-- Search bar Start --}}
    <div class="container">
        <form class="d-flex" action="{{ route('dashboard') }}" method="GET" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>
    {{-- Search Bar End --}}
        {{-- Title Banner Informasi Job Fair Start --}}
        <div class="container my-3 rounded bg-primary text-light text-center">
            <div class="row">
                <div class="col-12 fw-bold my-4">
                    Event Umum
                </div>
            </div>
        </div>
        {{-- Title Banner Informasi Job Fair End --}}
        {{-- Event List Start --}}
        @include('shared.event-list')
        {{-- Event List End --}}
    {{-- Title Banner Informasi Beasiswa --}}
    <div class="container my-3 rounded bg-primary text-light text-center">
        <div class="row">
            <div class="col-12 fw-bold my-4">
                Informasi Beasiswa
            </div>
        </div>
    </div>
    {{-- End Title Banner Informasi Beasiswa --}}
    {{-- Card Section Informasi Beasiswa Start --}}
    @include('shared.beasiswa-content')
    {{-- Card Section Informasi Beasiswa End --}}
@endsection
