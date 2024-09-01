<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            /* Lebar tabel */
            margin: auto;
            /* Menengahkan tabel */
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 3px solid black;
            /* Menambah garis bawah */
        }

        .header h2 {
            margin: 0;
        }

        .garis {
            border-top: 1px solid black;
            margin: 0 auto;
            /* Menengahkan garis */
            margin-bottom: 10px;
            width: 90%;
            /* Ubah panjang garis */
        }
    </style>
</head>

<header>
    {{-- banner print --}}
    @include('shared.print-banner')
    {{-- end banner print --}}
    {{-- print header start --}}
    <div class="container-fluid text-center">
        <div class="row m-2">
            <div class="col-2 m-2 text-end">
                <img src="{{ asset('assets/logo.png') }}" class="img-block"
                    style="height: 45px; width: auto;" alt="SMAN4BANJARBARU">
            </div>
            <div class="col text-start">
                <h5>SMA Negeri 4 Banjarbaru</h5>
                <p>Landasan Ulin Bar., Kec. Liang Anggang, Kota Banjar Baru, Kalimantan Selatan 70722</p>
            </div>
        </div>
    </div>
    <div class="garis"></div>
    {{-- print header end --}}
</header>

<body>


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

<footer>
    <div class="container text-start">
        <div class="row m-4 ">
            <div class="col-sm-7"></div>
            <div class="col-sm-5 my-4">Mengetahui, <br>Kepala Sekolah <br>SMA Negeri 4 BanjarBaru</div>
        </div>
        <div class="row m-4 ">
            <div class="col-sm-7"></div>
            <div class="col-sm-5 mt-4 fw-bold">Dra. Sumimi, M. Pd.</div>
        </div>
    </div>
</footer>

</html>
