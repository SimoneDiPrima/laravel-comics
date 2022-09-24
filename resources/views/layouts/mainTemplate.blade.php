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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel comics</title>
</head>
<body>
@include('include.header')
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
 @include('include.footer')
</body>
</html>