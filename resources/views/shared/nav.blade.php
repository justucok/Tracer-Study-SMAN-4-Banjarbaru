<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold d-none d-sm-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="logo" width="auto" height="50"
                class="d-inline-block align-text-top">
            <div class="brand-text ms-2"> <!-- Reduced margin from 'ms-3' to 'ms-2' -->
                SISTEM TRACER STUDY
                <br>
                <span class="sub-text fs-6 fw-light">SMA Negeri 4 Banjarbaru</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loker') }}">Lowongan Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('survey') }}">Survey Kepuasan</a>
                </li>
                @if (!Auth::user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                @endif
            </ul>
            <div class="d-flex">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-outline-secondary" type="submit">Log Out</button>
                    {{-- <a type="submit" class="rounded btn btn-light"><i class="bi bi-box-arrow-in-right"></i> Log Out</a> --}}
                </form>
                @if (Auth::user()->is_admin)
                    <a class="btn btn-sm btn-primary mx-1 " href="{{ route('alumnis.index') }}">ADMIN PANEL</a>
                @endif
            </div>
        </div>
    </div>
</nav>
