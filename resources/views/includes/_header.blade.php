<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
         <li class="me-2"><a href="{{ route('characters') }}" class="headerLink">CHARACTERS</a></li>
         <li class="me-2"><a href="{{ route('comics') }}"  class="headerLink">COMICS</a></li>
         <li class="me-2"><a href="{{ route('movies') }}"  class="headerLink">MOVIES</a></li>
         <li class="me-2"><a href="{{ route('tv') }}"  class="headerLink">TV</a></li>
         <li class="me-2"><a href="{{ route('games') }}"  class="headerLink">GAMES</a></li>
         <li class="me-2"><a href="{{ route('collectibles') }}"  class="headerLink">COLLECTIBLES</a></li>
         <li class="me-2"><a href="{{ route('videos') }}"  class="headerLink">VIDEO</a></li>
         <li class="me-2"><a href="{{ route('fans') }}"  class="headerLink">FANS</a></li>
         <li class="me-2"><a href="#"  class="headerLink">NEWS</a></li>
         <li class="me-2"><a href="#"  class="headerLink">SHOP</a></li>
     </ul>
 </div>
 <div class="jumbotron img-fluid position-relative">
     
 </div>

    
</body>
</html>