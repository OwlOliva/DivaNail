@extends('layouts.layout')

@section('title','Мастера')

@section('content')
<h2 style="text-align:center;color:white">Выберите мастера</h2>
<form action="{{route('dataRecode')}}"  method="POST">
@method('GET')
@csrf
<div class="div_mast">
  @foreach($masters as $master)
  <div>
<input type="hidden" name="serviceId" value="{{ $serv}}">
<input type="radio" name="masterId" id="masterId{{ $master['id']}}" value="{{ $master['id']}}">

<label for="masterId{{ $master['id']}}">
    <img src="{{$master->photo}}" alt="{{$master->name}}">
    <p>{{$master->name}}</p>
  </a></label>
</div>
  @endforeach
</div>
 <input type="submit" class='sbrecod'>

</form>
@endsection
