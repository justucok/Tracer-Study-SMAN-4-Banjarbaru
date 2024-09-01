    <div class="container my-3">
        <div class="row justify-content-center">
            <h3>Event Terdekat</h3>
            @php
                use Carbon\Carbon;

                // Combine the events, jobfairs, and scholarships into a single collection
                $allEvents = collect()
                    ->merge(
                        $events->map(function ($event) {
                            return (object) [
                                'event_name' => $event->event_name,
                                'event_date' => $event->event_date,
                                'event_time' => $event->event_time ?? 'Unknown Time',
                                'note' => $event->note,
                            ];
                        }),
                    )
                    ->merge(
                        $jobfairs->map(function ($jobfair) {
                            return (object) [
                                'event_name' => $jobfair->nama_jobfair,
                                'event_date' => $jobfair->tanggal_mulai,
                                'event_time' => 'Unknown Time', // Assuming jobfair doesn't have event_time
                'note' => $jobfair->ket_jobfair,
            ];
        }),
    )
    ->merge(
        $scholarships->map(function ($scholarship) {
            return (object) [
                'event_name' => $scholarship->event_name,
                'event_date' => $scholarship->tanggal_mulai,
                'event_time' => 'Unknown Time', // Assuming beasiswa doesn't have event_time
                                'note' => $scholarship->ket_beasiswa,
                            ];
                        }),
                    );

                // Filter future events and sort by standardized date
                $filteredEvents = $allEvents->filter(function ($event) {
                    return Carbon::parse($event->event_date)->isFuture();
                });

                $sortedEvents = $filteredEvents->sortBy('event_date');

                $nearestEvent = $sortedEvents->first();
            @endphp

            @if ($nearestEvent)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title py-1">{{ $nearestEvent->event_name }}</h5>
                        <div class="row text-start">
                            <p class="card-subtitle mb-2">
                                <img src="https://cdn-icons-png.flaticon.com/128/1827/1827319.png" alt="Logo"
                                    height="20px" class="d-inline-block align-text-top pe-1">
                                {{ $nearestEvent->event_date }}
                            </p>
                            <p class="card-subtitle mb-2">
                                <img src="https://cdn-icons-png.flaticon.com/128/1827/1827336.png" alt="Logo"
                                    height="20px" class="d-inline-block align-text-top pe-1">
                                {{ $nearestEvent->event_time }}
                            </p>
                        </div>
                        <hr>
                        <p class="card-text">{{ $nearestEvent->note }}</p>
                    </div>
                </div>
            @else
                <p>Tidak ada acara terdekat.</p>
            @endif


        </div>
    </div>
