@extends('layouts.mainTemplate');

@section('main-section')

<div class="d-flex flex-wrap my-5">
@foreach($comics as $index=>$comic)
<a class="col-2" href="{{route('comics.show',['id'=> $index ])}}"> 
<figure class="mt-4 px-3">
                <img src="{{$comic['thumb']}}" alt=""/>
              <h6 class="text-white w-80">{{$comic['title']}}</h6>
</figure> 

</a>

@endforeach
</div>


@endsection
