<div class="container  my-3">
    <div class="row my-3">
        @foreach ($events as $event)
        <div class="card my-1">
            <div class="card-body">
                <h5 class="card-title py-1">{{ $event->event_name }}</h5>
                <div class="row text-start">
                    <p class="card-subtitle mb-2">
                        <img src="https://cdn-icons-png.flaticon.com/128/1827/1827319.png" alt="Logo"
                            height="20px" class="d-inline-block align-text-top pe-1">
                        Tanggal: {{ $event->event_date }}
                    </p>
                    <p class="card-subtitle mb-2">
                        <img src="https://cdn-icons-png.flaticon.com/128/1827/1827336.png" alt="Logo"
                            height="20px" class="d-inline-block align-text-top pe-1">
                        Pukul: {{ $event->event_time }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
