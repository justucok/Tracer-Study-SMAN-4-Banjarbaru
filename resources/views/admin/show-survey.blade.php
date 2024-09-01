@extends('layout.admin-dashboard')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container m-2 ">
                <div class="container border border-2 rounded my-2 ">
                    <h3 class="p-2">{{ $survey->nama }} <span class="badge bg-success">Answer</span></h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kualitas Pengajaran</td>
                                <td>{{ $survey->kualitas_pengajaran }}</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Fasilitas Sekolah</td>
                                <td>{{ $survey->fasilitas_sekolah }}</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lingkungan Sekolah</td>
                                <td>{{ $survey->lingkungan_sekolah }}</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Dukungan Administrasi</td>
                                <td>{{ $survey->dukungan_administrasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Komunikasi</td>
                                <td>{{ $survey->komunikasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Keterlibatan Orang Tua</td>
                                <td>{{ $survey->keterlibatan_ortu }}</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Kesejahteraan Siswa</td>
                                <td>{{ $survey->kesejahteraan_siswa }}</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Prestasi Akademik</td>
                                <td>{{ $survey->prestasi_akademik }}</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Kegiatan Ekstrakulikuler</td>
                                <td>{{ $survey->kegiatan_ekskul }}</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Pengalaman Keseluruhan</td>
                                <td>{{ $survey->pengalaman_keseluruhan }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end my-2">
                        <a class="text-white btn btn-primary btn-sm" href="{{ route('survey.index') }}">Batal</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
