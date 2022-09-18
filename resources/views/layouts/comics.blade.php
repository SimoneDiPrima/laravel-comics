@extends('layouts.mainTemplate')
@section('main-section')
<div class="col-3 d-flex flex-wrap my-4">
    @foreach($comics as $comic)
    <img src="{{ $comic['thumb'] }}" alt="">
    <h5 class="text-white">{{ $comic['title'] }}</h5>
    @endforeach
</div>
@endsection