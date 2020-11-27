<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/bootstrap.min.js"></script>
    @yield('head')
</head>
<body>

    <header></header>
    <div class="container">
        @yield('content')
    </div>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('home')}}">BredoGenerator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('posts')}}">Posts<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropup">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown10">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item ml-auto">
                        @if(Auth::check())
                            <a class="nav-link" href="{{route('logout')}}">Logout({{Auth::user()->name}})</a>
                        @else
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        @endif
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
