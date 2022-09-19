@extends('layouts.mainTemplate');

@section('main-section')

<div class="d-flex flex-wrap my-5">
@foreach($comics as $index=>$comic)
<a class="col-3" href="{{route('comics.show',['id'=> $index ])}}"> 
<div class="card" style="width: 18rem;">
  <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text w-80">{{$comic['title']}}</p>
  </div>
</div>

</a>

@endforeach
</div>


@endsection
