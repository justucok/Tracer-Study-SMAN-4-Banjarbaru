@extends('layout.print')

@section('content')
    <!-- print title -->
    <div>
        <h4 class="m-3 text-center fw-bold">Laporan Data Universitas</h4>
    </div>
    <!-- end print title -->
    {{-- table --}}
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tahun Kelulusan </th>
                <th>Nama</th>
                <th>Universitas</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnis as $alumni)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alumni->graduate }}</td>
                    <td>{{ $alumni->name }}</td>
                    <td>{{ $alumni->university }}</td>
                    <td>{{ $alumni->major }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- table end -->
@endsection
