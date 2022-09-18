@extends('layouts.mainTemplate');
@section('main-section')
<div class="d-flex">
    <div class="col-7 mt-5 me-2">
        <h3 class="text-white">{{ $product['title'] }}</h3>
        <h6 class="text-white">{{ $product['price'] }}</h6>
        <p class="text-white">{!! $product['description'] !!}</p>
    </div>
    <div class="col-4 mt-5">
        <img src="{{ $product['thumb'] }}" alt=""/>
    </div>

</div>
@endsection