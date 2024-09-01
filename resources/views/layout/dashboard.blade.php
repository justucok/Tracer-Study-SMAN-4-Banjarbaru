<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI ALUMNI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<header>
    {{-- Navbar Start --}}
     @include('shared.nav')
    {{-- Navbar End --}}
</header>

<body>
    @yield('content')
</body>
<footer class="bg-black">
    <div class="text-end p-2 text-light">
        <p>SMA Negeri 4 Banjarbaru <br> &copy; Copyright 2024</p>
    </div>
</footer>

</html>
