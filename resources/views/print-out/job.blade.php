@extends('layout.print')

@section('content')
<!-- print title -->
<div>
    <h4 class="m-3 text-center fw-bold">Laporan Data Pekerjaan</h4>
</div>
<!-- end print title -->
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Alamat Pekerjaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnis as $alumni)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alumni->name }}</td>
                    <td>{{ $alumni->job }}</td>
                    <td>{{ $alumni->office_address }}</td>
                </tr>
            @endforeach
    </tbody>
</table>
<!-- table end -->
@endsection