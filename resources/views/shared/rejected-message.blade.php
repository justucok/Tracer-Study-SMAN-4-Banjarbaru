@if (session()->has('rejected'))

<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('rejected') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
