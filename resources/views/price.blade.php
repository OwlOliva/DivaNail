@extends('layouts.layout')

@section('title','Прайс')

@section('content')

<div class="price">
    @foreach($typeSer as $ts) 
        <div class="man">
            <h1>{{$ts->name}}</h1>
            @foreach($price as $pr) 
                @if($pr->type->id == $ts->id)
                    <div>
                        <p>{{$pr->desc}}</p>
                        <p>{{$pr->price}}</p>
  <hr class="hrprice">
                    </div>  
                @endif
            @endforeach 
        </div>
    @endforeach
</div>




@endsection

