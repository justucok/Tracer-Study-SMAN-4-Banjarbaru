@extends('layout.print')

@section('content')
    <!-- print title -->
    <div>
        <h4 class="m-3 text-center fw-bold">Laporan Data Event</h4>
    </div>
    <!-- end print title -->
    {{-- table --}}
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nama Event</th>
                <th>Lokasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->event_name }}</td>
                    <td>{{ $event->location }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- table end -->
@endsection
