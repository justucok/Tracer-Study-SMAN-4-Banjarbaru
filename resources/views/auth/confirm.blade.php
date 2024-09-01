@extends('layout.auth')

@section('content')
    <div class="col-md-7 " style="padding: 10% 0%;">
        <div class=" p-2 rounded fw-bold text-center">
            <div class="border border-2 rounded  p-5 m-5 fw-bold text-center">
                @include('shared.confirm-logo')
                <p>Akun behasil dibuat<br>Silahkan melakukan login.</p>
                <a class="d-grid gap-2 mx-auto btn btn-primary" href="{{ route('login') }}" role="button"
                    style="background-color: #1375AC;">Masuk</a>
            </div>
        </div>
    </div>
@endsection
