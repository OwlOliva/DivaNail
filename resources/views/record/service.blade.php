@extends('layouts.layout')
@section('title','Выбор услуги')

@section('content')

<h2 style="text-align:center;color:white">Выберите услугу</h2>

<form action="{{route('master')}}" method="POST" class="mt-5">
@method('GET')
@csrf
<div class="serv container">
  <div class="row">
@foreach($price as $ser)
<div class="col-lg-6">
  <div class="row">
<label for="serviceId{{$ser['id']}}" class="offset-sm-1 col-sm-4">
  <img src="{{  $ser->photo }}" alt=""  >   </label>
  <div class="col-sm-6">
    
    <label for="serviceId{{$ser['id']}}" style="color:white;"><input type="radio" name="serviceId" id="serviceId{{$ser['id']}}" value="{{$ser['id']}}">
      {{ $ser->desc }}<br>
    
      {{ $ser->price }}руб<br>
    </label>
  </div>
    </div>
</div>
@endforeach
</div></div>
<input type="submit" class='sbrecod' value="Выбрать">
</form>

@endsection
