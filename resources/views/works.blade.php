@extends('layouts.layout')

@section('title','Работы')

@section('content')





<h2 style="text-align:center;color:white">Работы мастеров салона</h2>

<div class="container">

  

   
@foreach($works as $work) 
  <div class="mySlides text-center">
    
    <img src="{{$work->img}}" style="height:400px">
  </div>
 @endforeach

    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">


   @foreach($works as $work) 
    <div class="column">
      <img class="demo cursor p-1" src="{{$work->img}}" style="width:90%" onclick="currentSlide(`{{$work->id}}`)" alt="The Woods">
    </div>
    @endforeach
    <!-- <div class="column">
      <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div> -->
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  // captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


























<!-- <div class="carous">
<div class="container">
  <div
      class="slides"
      style="background-image: url('https://images.unsplash.com/photo-1546672136-49179bf19b4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');"
  >
    <h3>South Korea</h3>
  </div>
  <div
      class="slide"
      style="
          background-image: url('https://images.unsplash.com/photo-1545569341-9eb8b30979d9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        "
  >
    <h3>Japan</h3>
  </div>
  <div
      class="slides"
      style="
          background-image: url('https://images.unsplash.com/photo-1510412094233-53186308173b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        "
  >
    <h3>China</h3>
  </div>
  <div
      class="slides"
      style="
          background-image: url('https://images.unsplash.com/photo-1490077476659-095159692ab5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1151&q=80');
        "
  >
    <h3>Thailand</h3>
  </div>
  <div
      class="slides active"
      style="
          background-image: url('https://images.unsplash.com/photo-1581265645170-fc16d06d979b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        "
  >
    <h3>Singapur</h3>
  </div>
</div>

</div> -->










<!-- 
<div class="container carous">

@foreach($works as $work)   
    <div class="slides" >
   <img src="{{$work->img}}" />
    </div>
  <h3>South Korea</h3>
    @endforeach
 
  
</div>
<script src="/js/gallery.js"></script> -->




<!-- <div class="container">
<div class="pictures">
    @foreach($works as $work)
    <img src="{{$work->img}}" height="367"/>
    @endforeach
    <div class="clear"></div>
</div></div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/jquery-gp-gallery.js"></script>
    <script>
        $(function() {
            $('.pictures').gpGallery('img');
        })
    </script> -->
@endsection
