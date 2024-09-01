<div class="container mx-auto align-item-center justify-center">
    <div class="row justify-content-center">
        @foreach ($scholarships as $scholarship)
            <div class="col-4 mb-4">
                <div class="card mx-auto align-item-center justify-center text-center" style="width: 18rem;">
                    <div class="card-body">
                        @if ($scholarship->image)
                            <img src="{{ asset('storage/' . $scholarship->image) }}" class="card-img-top"
                                alt="{{ $scholarship->nama_beasiswa }}">
                        @else
                            <img src="{{ asset('https://img.freepik.com/free-photo/business-finance-employment-female-successful-entrepreneurs-concept-laughing-pleasant-professional-businesswoman-real-estate-broker-showing-clients-good-deal-carry-laptop-hand_1258-97907.jpg?ga=GA1.1.150392406.1722450813&semt=ais_hybrid') }}"
                                class="card-img-top" alt="Default Image">
                        @endif
                        <h5 class="card-title">{{ $scholarship->nama_beasiswa }}</h5>
                        <p class="card-text">{{ $scholarship->ket_beasiswa }}</p>
                        <a href="{{ $scholarship->url_beasiswa }}" class="btn btn-primary">Go to Beasiswa</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
