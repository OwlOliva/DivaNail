<!DOCTYPE html>
<html lang="en">
<head> 

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 
  <title>@yield('title')</title>
  <!-- {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > --}} -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/index.css">
  <link rel="stylesheet" href="../css/works.css">
  <link rel="stylesheet" href="../css/stocks.css">
  <link rel="stylesheet" href="../css/contacts.css">
  <link rel="stylesheet" href="../css/about.css">
  <link rel="stylesheet" href="../css/price.css">  
  <link rel="stylesheet" href="../../css/service.css">
  <link rel="stylesheet" href="../../css/data.css">
  <link rel="stylesheet" href="../../css/media.css">
  <link rel="stylesheet" href="/css/gallary.css" />
  <!-- CSS only -->
 
   
</head>



<body class="d-flex flex-column min-vh-100">





@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif












  <nav class="navbar navbar-light navbar-expand-lg navbar-togglable p-0">
    <div class="container">
  
      <!-- Navbar brand (mobile) -->
      <a class="navbar-brand d-lg-none imga" href="/"><img src="../images/logo.png"   alt=""></a>
  
      <!-- Navbar toggler -->
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
<span class="navbar-toggler-icon"></span>
</button>
  
      <!-- Navbar collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
  
        <!-- Navbar nav -->
        <ul class="navbar-nav">
          <li class="nav-item  m-2 h5 text-body">
            тел : 8(951)-48-222-26
          </li>
          
          <li class="nav-item m-2 h5 text-body">
            время работы с 9:00 до 21:00
         </li>
        </ul>
        
       
        <!-- Navbar brand -->
        <a class="navbar-brand d-none d-lg-flex mx-lg-auto justify-content-around" href="/">
          <img src="../images/logo.png"   alt="">
        </a>
  
        <!-- Navbar nav -->
        <ul class="navbar-nav cl-effect-12">
          <li class="nav-item">
            <a class="nav-link h5 text-body" href="/price">Прайс</a>
          </li>
          <li class="nav-item">
            <a class="nav-link h5 text-body" href="/recorde/service">Запись</a>
          </li>
          <li class="nav-item">
            <a class="nav-link h5 text-body" href="/stocks">Акции</a>
          </li>        
        <li class="nav-item">
          <a class="nav-link h5 text-body" href="/contacts">Контакты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5 text-body" href="/about">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5 text-body" href="/works">Работы</a>
        </li>
        </ul>
  
      </div>
    </div>
  </nav>

{{-- <header>

  <div class="cont_info">
    <div>тел : 8(951)-48-222-26</div>        
    <div>время работы</div>
    <div>адрес : кирова 19а</div>
    <div>с 9:00 до 21:00</div>
  </div>

 <a href="/" class="img_logo"><img src="../images/logo.png"   alt=""></a>
 
  <div class="menu">
  <nav class="cl-effect-12">
    <a href="/price">Прайс</a>
    <a href="/recorde/service">Запись</a>
    <a href="/works">Работы</a>
    <a href="/stocks">Акции</a>
    <a href="/contacts">Контакты</a>
    <a href="/about">О нас</a>
</nav>
  </div>
</header> --}}

@yield('content')

<!-- <footer class="container">
 <div > 
    <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6">
    <a href="/" class="img_logo"><img src="../images/logo.png"   alt=""></a>
  </div>
<div class="col-lg-4  col-md-6  col-sm-12 mt-3">
<div class="cont_info"> 
    <div>тел : 89514899995</div>        
    <div>время работы с 9:00 до 21:00</div>
    <div>адрес : кирова 19а</div>
    <div></div> 
</div> 
</div>

<div class="menu col-lg-4 col-md-6  col-sm-12">
  <nav class="cl-effect-12">
    <ul>
      <li></li>
    </ul> 
    <a href="/price">Прайс</a>
    <a href="">Запись</a>
    <a href="/works">Работы</a>
    <a href="/stocks">Акции</a>
    <a href="/contacts">Контакты</a>
    <a href="/about">О нас</a>
</nav>
 </div>
  </div>
 </div> 
</footer> -->

<footer class=" container mt-auto">
  <div><a href="/" class="img_logo"><img src="../images/logo.png"   alt=""></a></div>

<div class="cont_info">
    <div>тел : 89514899995</div>        
    <div>время работы</div>
    <div>адрес : кирова 19а</div>
    <div>с 9:00 до 21:00</div>
  </div>

<div class="menu">
  <nav class="cl-effect-12">
    <!-- <ul>
      <li></li>
    </ul> -->
    <a href="/price">Прайс</a>
    <a href="">Запись</a>
    <a href="/works">Работы</a>
    <a href="/stocks">Акции</a>
    <a href="/contacts">Контакты</a>
    <a href="/about">О нас</a>
</nav>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/index.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script src="/js/jquery-gp-gallery.js"></script>
  <script>
  AOS.init();
</script>
@yield('custom_js')
</body>
</html>