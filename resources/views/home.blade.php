@extends('layouts.mainTemplate')
@section('main-section')


@foreach($comics as $comic)
<div class="col-2 py-4 p-2 cardHeight">
<h6 class="text-white">{{$comic['title']}}</h6>
<img src="{{$comic['thumb']}}" alt=""/>
</div>
@endforeach

@endsection

