@extends('index')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($product as $item)
            <div class="col-sm-6">
                <img class="detail-img" src="{{$item->path}}">
            </div>
            <div class="col-sm-6">
                <a href="/">Visszalépés</a>
                <h2>{{$item->name}}</h2>
                <h3>Ár: {{$item->price}} €</h3>
                <h4>Leírás: {{$item->description}}</h4>
                <br><br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$item->id}}">
                    <button class="btn btn-primary">Kosárba Teszem</button>
                </form>
                <br><br>
                <button class="btn btn-success">Megvásárolom most</button>
                <br><br>
            </div>
            @endforeach
        </div>
    </div>
@endsection
