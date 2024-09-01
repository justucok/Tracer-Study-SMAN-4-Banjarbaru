<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Sistem Informasi SMAN 4 Banjarbaru</title>
</head>
<!-- Start Form -->

<body >
    <div class="login-page " >
        <div class="container " >
            <div class="row">
                <div class="col-lg-10 offset-lg-1 ">
                    <div class="bg-white shadow rounded" >
                        <div class="row">
                            <div class="col-md-5 d-md-block bg-light" style="padding: 20% 0%;">
                                <div class="form-right text-white text-center">
                                    <i class="bi bi-bootstrap"></i>
                                    <!-- Start Image -->
                                    <div class="text-center">
                                        @include('shared.logo')
                                        <h4 class="text-dark mt-3 fw-bold">SMA NEGERI 4 BANJARBARU</h4>
                                    </div>
                                    <!-- End Image -->
                                </div>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
