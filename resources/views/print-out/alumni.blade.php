@extends('layout.print')

@section('content')
    <!-- print title -->
    <div>
        <h4 class=" m-3 text-center fw-bold">Laporan Data Alumni</h4>
    </div>
    <!-- end print title -->
    {{-- start table --}}
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tahun Kelulusan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Whatapps</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnis as $alumni)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alumni->graduate }}</td>
                    <td>{{ $alumni->name }}</td>
                    <td>{{ $alumni->address }}</td>
                    <td>{{ $alumni->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- table end -->
@endsection
