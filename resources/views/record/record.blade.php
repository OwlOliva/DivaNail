@extends('layouts.layout')
@section('title','Мастера')

@section('content')

<form action="{{route('recodeBase')}}" method="POST" id="formRecord">
@method('GET')
@csrf
<input type="hidden" name="serviceId" value="{{ $serv}}">
<input type="hidden" name="masterId" value="{{ $mast}}">
<input type="hidden" name="timeId" value="{{$timee->id}}">
    <label>Мастер</label>
    <input type="text" name="maste"  value="{{$masters->name}}" readonly >   
<br>

    <label>Услуга</label>
    <input type="text" value="{{ $service->desc}}" name="serv" readonly >    <br> 
   

    <label>Время</label>
    <input type="text" value="{{$timee->time}}" readonly name="timeRec">    <br> 


    <label>Стоимость</label>
    <input type="text" value="{{$service->price}}" readonly name="pric">   
 <br>   


    <label>Имя</label>
    <input type="text" name="name_user" id=""><br>

    <label>Телефон</label>
    <input type="tel" name="tel" id="" min="12"><br>

    <!-- <label>Коментарий к записи</label><br>
    <textarea name="comment" id="" cols="30" rows="10" >    </textarea> -->

    <input type="submit" name="" id="" class="mt-3" >
</form>

@endsection
