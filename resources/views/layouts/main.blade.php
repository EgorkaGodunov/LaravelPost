<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>
    <div class="container">
        <ul>
            <li><a href="{{route('main.index')}}">main</a></li>
            <li><a href="{{route('main.create')}}">create post</a></li>
        </ul>
    </div>
<div>
    @yield('content')
</div>
</body>
</html>