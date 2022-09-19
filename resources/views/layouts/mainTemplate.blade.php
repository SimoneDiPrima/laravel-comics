<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Laravel comics</title>
</head>
<body>
<div id="topNavbar">
    <div class="container d-flex justify-content-end text-white">
        <span class="pe-3"><a href="#">DC POWER VISA</a></span>
        <span><a href="#">ADDITIONAL DC SITE</a></span>
    </div>
</div>
 <div class="container d-flex justify-content-between align-items-center my-4">
  <figure>
         <img src="{{ asset('images/dc-logo.png') }}" alt="">
 </figure>
 <ul class="d-flex">
         <li class="me-2"><a href=""   class="headerLink">CHARACTERS</a></li>
         <li class="me-2"><a href="{{route('comics')}}"  class="headerLink">COMICS</a></li>
         <li class="me-2"><a href=""  class="headerLink">MOVIES</a></li>
         <li class="me-2"><a href=""  class="headerLink">TV</a></li>
         <li class="me-2"><a href=""  class="headerLink">GAMES</a></li>
         <li class="me-2"><a href=""  class="headerLink">COLLECTIBLES</a></li>
         <li class="me-2"><a href=""  class="headerLink">VIDEO</a></li>
     </ul>
 </div>
 <div class="jumbotron img-fluid position-relative">
     
 </div>
  <div class="bg-dark" id="main">
        <div class="container d-flex flex-wrap">
           @yield('main-section')
        </div> 
  </div>
  <section class="text-white" id="sectionFans">
    <div class="lineHeight text-center">Content will goes here..</div>
  </section>
  <section class="topFooter">
    <div class="container d-flex justify-content-between py-4">
      <div class="col-6 d-flex text-white">
        <div class="col-4 footerMenu">
            <ul>
            <h5>DC COMICS</h5>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
            </ul>
            <ul>
            <h5>SHOP</h5>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
            </ul>
        </div>
        <div class="col-4">
            <ul>
            <h5>DC COMICS</h5>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
            </ul>
            <ul>
            <h5>SHOP</h5>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
            </ul>
        </div>
        <div class="col-4">
            <ul>
            <h5>DC COMICS</h5>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
            </ul>
            <ul>
            <h5>SHOP</h5>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
              <li><a href="">characters</a></li>
            </ul>
        </div>
      </div>
      <div class="offset-1 col-5">
      <img src="{{asset('images/dc-logo-bg.png')}}" alt="">
    </div>
  </section>
  <section class="downFooter">
    <div class="container d-flex justify-content-between">
      <div class="col-7">
        <button class="col-2 btn btn-primary text-white p-0">SIGN-UP NOW!</button>
      </div>
      <div class="col-4">
          <ul class="d-flex justify-content-between">
            <li><a href="#">FOLLOW US</a></li>
            <li ><img src="{{url('images/footer-periscope.png')}}" alt=""></li>
            <li ><img src="{{url('images/footer-pinterest.png')}}" alt=""></li>
            <li ><img src="{{url('images/footer-twitter.png')}}" alt=""></li>
            <li><img src="{{url('images/footer-facebook.png')}}" alt=""></li>
            <li><img src="{{url('images/footer-youtube.png')}}" alt=""></li>
          </ul>
      </div>
    </div>
  </section>

    
</body>
</html>