@extends('layouts.layout')

@section('title','Акции')

@section('content')

<div class="stocks">
  @foreach($stock as $st)
  <div>
    <img src="{{ $st->photo }}" alt="">
    <div>
      <h2>-{{$st->discount}}% {{$st->title}}</h2>
      <p>{{ $st->description }}</p>
      <sub> Дата начала {{ $st->date_start }}</sub><br>
      <sub> Дата окончания {{ $st->date_end }}</sub>
    </div>
  </div>
  @endforeach
</div>
@endsection