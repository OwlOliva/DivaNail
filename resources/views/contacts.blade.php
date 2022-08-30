@extends('layouts.layout')

@section('title','Контакты')

@section('content')


<iframe src="https://yandex.ru/map-widget/v1/-/CCUBVVfE3A" width="100%" height="900vh" style="position:relative;">

</iframe>

<div class="contact">
 
  <h2>Наши контакты</h2>
  @foreach($contact as $cont)
  <div>
     <p>Телефон: {{ $cont->telephone }}</p>
     <p>Email: {{ $cont->email }}</p>
     <p>Адрес {{ $cont->address }}</p>
     
      
  </div>
  @endforeach
<p>Ежедневно<br>
С 10:00 до 22:00<br>
Без перерыва и выходных</p>

</div>


@endsection
