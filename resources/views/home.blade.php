@extends('layouts.layout')

@section('title','Главная')

@section('content')


<div id="osn">
  <div class="slide col-lg-12 col-sm-12">
    <div>
      <div class="h1">Идеальный маникюр</div>
      <a href="/recorde/service" class="sliding-button h1">Записаться</a>
    </div>
  </div>


  <div class="zagolovok">
    <hr>
    <h2>Почему выбирают нас</h2>
  </div>

  {{-- preimy --}}
  <div class="container bs-orange text-center" >
    <div class="row preimy">
      <div class=" col-lg-3 col-md-6 col-sm-1  text-center" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <img src="../images/icon1.png" alt="">
        <p class="p-2 text-white h4">работаем, когда другие отдыхают</p>
      </div>
      <div class="col-lg-3  col-md-6 col-sm-2  text-center" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <img src="../images/icon2.png" alt="">
        <p class="p-2 text-white h4">Удобное расположение и парковки</p>
      </div>
      <div class="col-lg-3 col-md-6  col-sm-2 text-center" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <img src="../images/icon3.png" alt="">
        <p class="p-2 text-white h4">Быстрый маникюр и педикюр в 4 руки</p>
      </div>
      <div class="col-lg-3 col-md-6  col-sm-2  text-center" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <img src="../images/icon4.png" alt="">
        <p class="p-2 text-white h4">KIDS-FRIENDLY</p>
      </div>
    </div>
  </div>

  <div class="zagolovok2">
    <h2>Наши последние акции</h2>
    <div>
      <hr>
    </div>

  </div>

  <div class="mt-3">
    <div class="container ">
      <div class=" stock">
        <div class="row ">
          @foreach($stock as $st)

          <div class="col  mt-2 pb-2" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            <img src="{{ $st->photo }}" alt="">
            <div id="p1">
              <div class="h3">-{{$st->discount}}%</div>
              <div class="h3">{{$st->title}}</div>
              <div class="h3">{{$st->description}}</div>
            </div>
          </div>


          @endforeach

        </div>
        <a href="/stocks">все акции</a>
      </div>

    </div>


    <div class="zagolovok2">
      <h2>Наши услуги</h2>
      <div>
        <hr>
      </div>

    </div>
  </div>
</div>



<div class="uslugi">
  <div class="container">
    <div class="row us1" data-aos="fade-right"   >
      <div class="col-lg-3 col-md-3 col-sm-6 text-left">
        <img src="../images/us3.jpg" alt="">
      </div>

      <div class="col-lg-9 col-md-9 col-sm-6 text-left" >
        <p class="text-left">Аппаратный маникюр</p>
        <p>Классический/аппаратный маникюр без дальнейшего покрытия</p>
        <a href="/price" class="h5">Узнать все цены</a>
      </div>
    </div>
    </div>
  <hr id="hr1">

  <div class="row us2" data-aos="fade-left"   >
  <div class="col-lg-9 col-md-9 col-sm-6 text-right">
            <p>Педикюр</p>
            <p>Классический/аппаратный педикюр с дальнейшим покрытием + снятие</p>
            <a href="/price" class="h5">Узнать все цены</a>
          </div>

          <div class="col-lg-3 col-md-3  col-sm-12">
            <img src="../images/us2.jpg" alt="">
          </div>          
  </div>
<!-- </div> -->
  <hr id="hr2">

  <div class="row " data-aos="fade-right"    >
  <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="../images/us6.jpg" alt="">
          </div>

          <div class="col-lg-9 col-md-9 col-sm-6">
            <p>Маникюр и педикюр в 4 руки</p>
            <p>Классический/аппаратный маникюр и педикюр с дальнейшим покрытием + снятие</p>
            <a href="/price" class="h5">Узнать все цены</a>
          </div>
  </div>
  <!-- </div> -->


  <!-- 
      <div>
        class='p2'
        <img src="../images/us3.jpg" alt="">
        <div>
          <p>Аппаратный маникюр</p>
          <p>Классический/аппаратный маникюр без дальнейшего покрытия</p>
          <a href="/price">Узнать все цены</a>
        </div>
      </div> -->
  <!-- <hr id="hr1">
      <div id='p3'>
        <div>
          <p>Педикюр</p>
          <p>Классический/аппаратный педикюр с дальнейшим покрытием + снятие</p>
          <a href="/price">Узнать все цены</a>
        </div>
        <img src="../images/us2.jpg" alt="">

      </div>
      <hr id="hr2">
      <div class='p2'>
        <img src="../images/us6.jpg" alt="">
        <div>
          <p>Маникюр и педикюр в 4 руки</p>
          <p>Классический/аппаратный маникюр и педикюр с дальнейшим покрытием + снятие</p>
          <a href="/price">Узнать все цены</a>
        </div>
      </div> -->
 <p class=" text-center"> <a href="/price" class="h2 text-center">Все услуги</a></p>
</div>

<div class="zagolovok">
  <hr>
  <h2>Отзывы </h2>
</div>
<br>

<div class="kopansecegun " >
  <input type="radio" name="kopansecegun" title="slide1" checked="checked" class="kopansecegun__nav" />
  <input type="radio" name="kopansecegun" title="slide2" class="kopansecegun__nav" />
  <input type="radio" name="kopansecegun" title="slide3" class="kopansecegun__nav" />
  <input type="radio" name="kopansecegun" title="slide4" class="kopansecegun__nav" />



  <div class="kopansecegun__ccpisicon" >
    @foreach($reviews as $rev)

    <div class="kopansecegun__cegunpisicing" >
      <img src="../images/avatar/{{$rev->avatar}}.png" alt="">
      <p class="kopansecegun__omnismus h3">"{{$rev->description}}"</p>
      <h2 class="kopansecegun__simusceguns h5">{{$rev->name}}</h2>
      <p class="kopansecegun__omnismus h6">{{$rev->date}}</p>
    </div>

    @endforeach
  </div>


</div>
</div>



<div class="container hidden mt-5 shadow p-4" id="form_otz" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
  <form action="{{ route('rewiews') }}" class="container" method="POST">
    @csrf
    <div class="row">
      <div class="col-25">
        <label for="fname">Имя</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Имя">
      </div>
    </div>
    
      
    <div class="row">
      <div class="col-25">
        <label for="country">Аватар</label>
      </div>
      <div class="col-75 avatar_div d-flex">
       <input type="radio" name="avatar" id="r1" value="1"><label for="r1"><img src="../images/avatar/1.png" alt=""></label>
       <input type="radio" name="avatar" id="r2" value="2"><label for="r2"><img src="../images/avatar/2.png" alt=""></label>
       <input type="radio" name="avatar" id="r3" value="3"><label for="r3"><img src="../images/avatar/3.png" alt=""></label>
       <input type="radio" name="avatar" id="r4" value="4"><label for="r4"><img src="../images/avatar/4.png" alt=""></label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Отзыв</label>
      </div>
      <div class="col-75">
        <textarea id="text" name="text" placeholder="Отзыв" style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

<div class="container text-center ">
<button id="dobavit_otz">Добавить отзыв</button>
</div>
@endsection