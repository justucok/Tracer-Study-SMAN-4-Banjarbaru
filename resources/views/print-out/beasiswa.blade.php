@extends('layout.print')

@section('content')
    <!-- print title -->
    <div>
        <h4 class="m-3 text-center fw-bold">Laporan Data Beasiswa</h4>
    </div>
    <!-- end print title -->
    {{-- table --}}
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nama Beasiswa</th>
                <th>Url</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beasiswa as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal_mulai }} - {{ $item->tanggal_selesai }}</td>
                    <td>{{ $item->nama_beasiswa }}</td>
                    <td>{{ $item->url_beasiswa }}</td>
                    <td>{{ $item->ket_beasiswa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- table end -->
@endsection
