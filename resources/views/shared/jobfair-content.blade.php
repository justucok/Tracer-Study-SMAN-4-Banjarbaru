<div class="container mx-auto align-item-center justify-center">
        <div class="row justify-content-center">
            @foreach ($jobfairs as $jobfair)
                <div class="col-4 mb-4">
                    <div class="card mx-auto align-item-center justify-center text-center" style="width: 18rem;">
                        <div class="card-body">
                            @if ($jobfair->image)
                                <img src="{{ asset('storage/' . $jobfair->image) }}" class="card-img-top"
                                    alt="{{ $jobfair->nama_jobfair }}">
                            @else
                                <img src="{{ asset('https://img.freepik.com/free-photo/business-finance-employment-female-successful-entrepreneurs-concept-laughing-pleasant-professional-businesswoman-real-estate-broker-showing-clients-good-deal-carry-laptop-hand_1258-97907.jpg?ga=GA1.1.150392406.1722450813&semt=ais_hybrid') }}"
                                    class="card-img-top" alt="Default Image">
                            @endif
                            <h5 class="card-title">{{ $jobfair->nama_jobfair }}</h5>
                            <p class="card-text">{{ $jobfair->ket_jobfair }}</p>
                            <a href="{{ $jobfair->url_jobfair }}" class="btn btn-primary">Go to Jobfair</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
