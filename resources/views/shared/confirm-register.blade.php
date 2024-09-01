@extends('shared.confirm-logo')

@section('content-logo')
    <p>Akun behasil dibuat<br>Silahkan melakukan login.</p>
    <a class="d-grid gap-2 col-3 mx-auto btn btn-primary" href="{{ route('login') }}" role="button"
        style="background-color: #1375AC;">Masuk</a>
@endsection
