<nav class="sb-topnav navbar navbar-expand navbar-light bg-secondary">
    <!-- Navbar Brand-->
    <a class="navbar-brand fw-bold d-none d-sm-block p-2 text-light" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/logo.png') }}" alt="logo" width="auto"
            height="30" class="d-inline-block align-text-top me-2">TRACER STUDY SMAN 4 BANJARBARU
    </a>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 mt-1">
        <div class="input-group">
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown"  role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-sm" type="submit">Log Out</button>
                    {{-- <a type="submit" class="rounded btn btn-light"><i class="bi bi-box-arrow-in-right"></i> Log Out</a> --}}
                </form>
            </ul>
        </li>
    </ul>
</nav>
