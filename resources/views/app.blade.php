<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/pictures/logo.ico" type="image/x-icon">
   <title>@yield ('title')</title>
</head>
<body>

<div class="banner">
    <header>
        <div class="container">
            <div class="header_inner">
                <div class="logo">
        
                </div>
                <nav>
                    <a href="{{url('/')}}">Main</a>
                    <a href="{{url('/songs')}}">Songs</a>
                    <a href="{{url('/artists')}}">Artists</a>
                    <a href="{{url('/info')}}">Info</a>
                </nav>
            </div>
        </div>
    </header>
</div>

@yield('content')
</body>
</html>