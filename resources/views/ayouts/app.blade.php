<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
    <title></title>
</head>
<body>
    
    <div>
        @yield('contenu')
</div>
<!-- <div class="container">
    @if($errors->any())
     <div class="alert alert-danger" role="alert">
        <strong>Erros</strong>
        <ul>
            @foreach($errors->all() as $errors)
             <li> {{$errors}} </li>
             @endforeach
</ul>
</dev>
@endif
@yield('contenu') -->
</div>
</body>
</html>