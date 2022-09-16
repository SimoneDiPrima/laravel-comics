<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Laravel comics</title>
</head>
<body>
  @include('includes._header')
  <div class="bg-dark" id="main">
        <div class="container position-relative">
            <h4 class="text-white mainTitle col-2 p-2">CURRENT SERIES</h4>
            <div class="mt-5 d-flex flex-row text-white flex-wrap">
            @foreach($comics as $comic)
            <div class="col-3">
            <img src="{{ $comic['thumb'] }}" alt="Dc's Comics"/>
                <h3 class="text-justify">{{ $comic['title'] }}</h3>
            </div>
                @endforeach
           </div>
        </div>
  </div>

    
</body>
</html>