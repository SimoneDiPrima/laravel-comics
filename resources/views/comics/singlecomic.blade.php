@extends('layouts.mainTemplate');
@section('main-section')

<div class="d-flex bg-light mt-5 p-2">
    <div class="col-2 py-4 p-2 cardHeight">
        <img src="{{$comic['thumb']}}" alt=""/>
    </div>
    <div class="py-4">
        <h6 >{{$comic['title']}}</h6>
        <p >{{ $comic['price'] }}</p>
        <p >{{$comic['description']}}</p>
    </div>
</div>
<button class="btn btn-primary">BUY</button>
@endsection


