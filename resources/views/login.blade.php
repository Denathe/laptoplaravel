@extends('index')
@section("content")
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="login" method="post">
                    <div class="mb-3">
                        @csrf
                        <label for="exampleInputEmail1" class="form-label">Email cím</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jelszó</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-default">Bejelentkezés</button>
                </form>
            </div>
        </div>
    </div>
@endsection
