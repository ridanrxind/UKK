<div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{ session('success') }}
     <strong>Data User Berhasil Dibuat!</strong> You should check in on some of those fields below.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
 @endif
</div>
