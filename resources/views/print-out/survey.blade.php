@extends('layout.print')

@section('content')
    <!-- print title -->
    <div>
        <h4 class="m-3 text-center fw-bold">Laporan Data Survey</h4>
    </div>
    <!-- end print title -->
    {{-- table --}}
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Angkatan</th>
                <th>Tahun Lulus</th>
                <th>Hasil Survey</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surveys as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->thn_lulus }}</td>
                    <td style="text-align: left;">
                        <ul style="list-style-type: none; padding-left: 0;">
                            <li><strong>Kualitas Pengajaran: </strong>{{ $item->kualitas_pengajaran }}</li>
                            <li><strong>Fasilitas Sekolah: </strong>{{ $item->fasilitas_sekolah }}</li>
                            <li><strong>Lingkungan Sekolah: </strong>{{ $item->lingkungan_sekolah }}</li>
                            <li><strong>Dukungan Administrasi: </strong>{{ $item->dukungan_administrasi }}</li>
                            <li><strong>Komunikasi: </strong>{{ $item->komunikasi }}</li>
                            <li><strong>Keterlibatan Orang Tua: </strong>{{ $item->keterlibatan_ortu }}</li>
                            <li><strong>Kesejahteraan Siswa: </strong>{{ $item->kesejahteraan_siswa }}</li>
                            <li><strong>Prestasi Akademik: </strong>{{ $item->prestasi_akademik }}</li>
                            <li><strong>Kegiatan Ekstrakurikuler: </strong>{{ $item->kegiatan_ekskul }}</li>
                            <li><strong>Pengalaman Keseluruhan: </strong>{{ $item->pengalaman_keseluruhan }}</li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- table end -->
@endsection
