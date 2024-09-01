<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Tracer Studi - ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style-dashboard-admin.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- Nav bar --}}
    @include('shared.nav-admin')
    {{-- End Nav bar --}}
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            {{-- Side bar --}}
            @include('shared.side-bar')
            {{-- End Side bar --}}
        </div>
        {{-- Content --}}
        @yield('content')
        {{-- End Content --}}
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card-body d-flex justify-content-between align-items-center">
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="/resources/js/app.js"></script>
</body>

</html>
