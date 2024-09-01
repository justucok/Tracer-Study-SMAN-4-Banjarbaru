@extends('layout.print')

@section('content')
     <!-- print title -->
     <div>
        <h4 class="m-3 text-center fw-bold">Laporan Data Informasi Tambahan</h4>
    </div>
    <!-- end print title -->
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Prestasi</th>
                    <th>Instagram</th>
                    <th>Facebook</th>
                    <th>Sosial Media Lainnya</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnis as $alumni)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alumni->name }}</td>
                    <td>{{ $alumni->achievement }}</td>
                    <td>{{ $alumni->instagram_account }}</td>
                    <td>{{ $alumni->facebook_account }}</td>
                    <td>{{ $alumni->other_account }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <!-- table end -->
@endsection
