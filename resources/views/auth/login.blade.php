@extends('layout.auth')

@section('content')
    <div class="col-md-7 " style="padding: 10% 0%;">
        <div class="form-left h-100 py-5 px-5">
            <!-- Start Form -->
            <form action="{{ route('login') }}" method="POST" class="row g-4 justify-content-end">
                @csrf
                <div class="col-12">
                    <h3 class="mb-3 fw-bold">Masuk</h3>
                    <div class="">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Masukan Email Anda">
                        @error('email')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Masukan Password">
                    @error('password')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                </div>
                <!-- start Button -->
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary fw-bold" type="submit">Masuk</button>
                    </div>
                    <div class="text-center mb-5 text-black fs-6">Belum punya akun ?
                        <a class="register-link" type="submit" href="{{ route('register') }}">Daftar</a>
                    </div>
                    {{-- Flash message --}}
                    @include('shared.flash-message')
                    {{-- End Flash message --}}
                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
@endsection
