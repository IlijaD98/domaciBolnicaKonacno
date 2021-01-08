@extends('master')
@section("content")
<<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Email adresa</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite email adresu">
                    <small id="emailHelp" class="form-text text-muted">Vasa email adresa nece biti zloupotrebljena</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sifra</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Unesite sifru">
                </div>
                
                <button type="submit" class="btn btn-primary">Prijavi se</button>
            </form>
        </div>
    </div>
</div>
@endsection