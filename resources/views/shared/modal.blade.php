@extends('layout.admin-dashboard')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Survey {{ $survey->nama }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection
