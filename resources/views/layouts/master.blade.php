<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    @if($flash = session('message'))
        <div class="alert alert-success" role="alert"> 
            {{ $flash }}
        </div>
    @endif

    <div style="padding:2rem;">
        <div class="header">
            <div>
                <a href="/" style="font-size:2rem;">Teams</a>
            </div>
            <a href="/register" style="padding-right:2rem;">Register</a>
            <a href="/login" style="padding-right:2rem;">Login</a>
            <a href="/logout">Logout</a>
            <hr>
        </div>
        
        @yield('content')
            
        
    </div>


</body>
</html>