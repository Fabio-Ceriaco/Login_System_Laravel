<div class="container-fluid bg-dark text-light">
    <div class="row">
        <div class="col-6 p-3">[Aplicação]</div>
        <div class="col-6 p-3 text-end">{{session('user')['email']}} | <a href="{{route('logout')}}" class="btn btn-primary btn-sm">Logout</a></div>

    </div>
</div>
