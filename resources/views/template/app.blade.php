<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <title>texte1</title>
</head>
<body>
    <h1>mon premier texte</h1>
    <div>
        @yield('page-content')
    </div>
</body>
</html>
<script src="{{asset('js/bootstrap.min.js')}}"></script>