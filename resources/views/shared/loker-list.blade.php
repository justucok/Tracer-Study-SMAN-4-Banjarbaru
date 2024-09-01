<div class="container  my-3">
    <div class="row my-3">
        @foreach ($loker as $item)
            <div class="card my-1">
                <div class="card-body">
                    <h5 class="card-title py-1">{{ $item->judul_loker }}</h5>
                    <div class="row text-start">
                        <p class="card-subtitle mb-2">
                            <img src="https://cdn-icons-png.flaticon.com/128/1827/1827319.png" alt="Logo"
                                height="20px" class="d-inline-block align-text-top pe-1">
                            Deadline : {{ $item->tanggal }}
                        </p>
                        <hr>
                        <p class="card-subtitle mb-2">
                            <span class="fw-bold">Nama Penyedia </span> : {{ $item->nama_penyedia }}
                        </p>
                        <p class="card-subtitle mb-2">
                            <span class="fw-bold">Deskripsi </span> : {{ $item->deskripsi }}
                        </p>
                        <p class="card-subtitle mb-2">
                            <span class="fw-bold">Kualifikasi </span> : {{ $item->kualifikasi }}
                        </p>
                        <p class="card-subtitle mb-2">
                            <span class="fw-bold">Alamat </span> : {{ $item->alamat }}
                        </p>
                        <p class="card-subtitle mb-2">
                            <span class="fw-bold">E-mail </span> : {{ $item->email }}
                        </p>
                        <p class="card-subtitle mb-2" >
                            <span class="fw-bold">Telepon </span> : {{ $item->phone }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
