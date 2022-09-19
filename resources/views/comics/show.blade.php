@extends('layouts.mainTemplate');
@section('main-section')
<div>
<div class="d-flex offset-2 col-8 p-2 bg-light my-5">
    <div class="cardHeight">
        <img src="{{$comic['thumb']}}" alt=""/>
    </div>
    <div class="w-80 p-2">
        <h6>{{$comic['title']}}</h6>
        <p>{{$comic['price'] }}</p>
        <p>{{$comic['description']}}</p>
        <button class="btn btn-primary offset-3 col-3">BUY</button>
    </div>
    
</div>

</div>

@endsection


