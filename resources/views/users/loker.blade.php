@extends('layout.dashboard')

@section('content')
<style>
    .card-img-top {
        width: 100%;
        height: 200px; /* Set the height you want for all images */
        object-fit: cover; /* This will crop the image to fit the dimensions */
        .equalize-label {
    display: flex;
    align-items: baseline;
}

.equalize-label span {
    min-width: 150px; /* Atur sesuai kebutuhan */
}

    }
</style>

    {{-- Img Banner Start --}}
    <div style="position: relative; text-align: center;">
        <img src="https://sman4banjarbaru.sch.id/themes/template3/images/head.jpg" class="img-fluid"
            style="height: 300px; width: 100%" alt="...">
        <div
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 30px; font-weight: bold;">
            INFO LOWONGAN PEKERJAAN
        </div>
    </div>
    {{-- Img Banner End --}}
    {{-- Search bar Start --}}
    <div class="container pt-4">
        <form class="d-flex" action="{{ route('loker') }}" method="GET" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>
    {{-- Search Bar End --}}
    {{-- Title Banner Informasi Job Fair Start --}}
    <div class="container my-3 rounded bg-primary text-light text-center">
        <div class="row">
            <div class="col-12 fw-bold my-4">
                Lowongan Pekerjaan
            </div>
        </div>
    </div>
    {{-- Title Banner Informasi Job Fair End --}}
    {{-- Event List Start --}}
    @include('shared.loker-list')
    {{-- Event List End --}}
    {{-- Card Section Informasi Job Fair End --}}
    {{-- Title Banner Informasi Job Fair Start --}}
    <div class="container my-3 rounded bg-primary text-light text-center">
        <div class="row">
            <div class="col-12 fw-bold my-4">
                Informasi Jobfair
            </div>
        </div>
    </div>
    {{-- Title Banner Informasi Job Fair End --}}
    {{-- Jobfair List Start --}}
    @include('shared.jobfair-content')
    {{-- Jobfair List End --}}
@endsection
