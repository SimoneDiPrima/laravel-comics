@extends('layouts.mainTemplate');

@section('main-section')


@foreach($comics as $index=>$comic)
<a class="col-2" href="{{route('comics.show',['id'=> $index ])}}">   
        <h6 class="text-white w-80">{{$comic['title']}}</h6>
        <img src="{{$comic['thumb']}}" alt=""/>
    
</a>

@endforeach

@endsection
