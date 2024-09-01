@extends('layout.admin-dashboard')

@section('content')
    {{-- Pekerjaan --}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container  mt-2">
                <div class="row align-items-start">
                    <div class="text-primary fw-bold col">
                        Pekerjaan
                    </div>
                    <div class="col">
                        <label for="job" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="job" name="job"
                            placeholder="Masukan Pekerjaan Anda">
                        @error('job')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <label for="office_address" class="form-label">Alamat Kantor</label>
                        <textarea class="form-control" id="office_address" name="office_address" rows="3"
                            placeholder="Masukan Alamat Kantor Anda"></textarea>
                        @error('office_address')
                            <span class="d-block text-danger mt-1"> {{ $message }} </span>
                        @enderror
                        <p>"Jika tidak bekerja, silahkan isi TIDAK."</p>
                    </div>
                </div>
            </div>

        </main>
    </div>
    {{-- End Pekerjaan --}}
@endsection
