@extends('index')
@section('content')
<div class="row">
    @foreach($products as $item)

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
            <div class="brand_box">
                <img src="{{$item->path}}">
                <h1>{{$item->name}}</h1>
                <h3><strong class="red">{{$item->price}}</strong> Ft</h3>

                <i><img src="{{asset('assets/images/star.png')}}"/></i>
                <i><img src="{{asset('assets/images/star.png')}}"/></i>
                <i><img src="{{asset('assets/images/star.png')}}"/></i>
                <i><img src="{{asset('assets/images/star.png')}}"/></i>
                <br><br>
                <a href="/product/{{$item->id}}"><button class="btn btn-success">Megnézem</button></a>

            </div>
        </div>
    @endforeach
</div>
@endsection
