@extends('layout.auth')

@section('content')
    <div class="col-md-7">
        <div class="form-left h-100 py-5 px-5">
            <form action="{{ route('register') }}" method="POST" class="row g-4 justify-content-end">
                @csrf
                <div class="col-12">
                    <h3 class="mb-3 fw-bold">Daftar</h3>
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

                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Masukan Nama Lengkap Anda">
                    @error('name')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Masukan Password Anda">
                    @error('password')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        placeholder="Konfirmasi Password Anda">
                    @error('password_confirmation')
                        <span class="d-block text-danger mt-1"> {{ $message }} </span>
                    @enderror
                </div>
                <!-- start Button -->
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary fw-bold" type="submit">Daftar</button>
                    </div>
                    <div class="text-center mb-5 text-black fs-6">sudah punya akun ?
                        <a class="register-link" type="submit" href="{{ route('login') }}">Masuk</a>
                    </div>
                    <!-- End Form -->
            </form>
            <!-- End Form -->
        </div>
    </div>
</div>
@endsection
