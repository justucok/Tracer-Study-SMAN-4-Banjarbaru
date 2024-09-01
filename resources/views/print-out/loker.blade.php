@extends('layout.print')

@section('content')
    <!-- print title -->
    <div>
        <h4 class="m-3 text-center fw-bold">Laporan Data Lowongan Pekerjaan</h4>
    </div>
    <!-- end print title -->
    {{-- table --}}
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Loker</th>
                <th>Nama Penyedia</th>
                <th>Deskripsi</th>
                <th>Kualifikasi</th>
                <th>Alamat</th>
                <th>E-Mail</th>
                <th>Deadline Apply</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lokers as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul_loker }}</td>
                    <td>{{ $item->nama_penyedia }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->kualifikasi }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->tanggal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- table end -->
@endsection
