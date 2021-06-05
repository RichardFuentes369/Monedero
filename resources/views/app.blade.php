<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                    Monedero
                </title>
                <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
                <link href="{{ asset('css/mycss.css') }}" rel="stylesheet"/>
                <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet"/>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
                <link href="img/logo.png" rel="icon"/>
                <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet"/>
            </meta>
        </meta>
    </head>
    <body id="body">
        <div class="login fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                @if(Auth::check() == false)
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    <img src="img/logo.png" id="logo">
                                        Monedero
                                    </img>
                                </a>
                                @else
                                <a class="navbar-brand" href="#">
                                    <img src="img/logo.png" id="logo">
                                        Monedero
                                    </img>
                                </a>
                                @endif
                            </div>
                            @if(Auth::check() == false)
                            <div class="col-sm-9">
                                @include('form.form-login')
                            </div>
                            @else
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-10">
                                    </div>
                                    <div class="col-sm-1">
                                        @include('nav.nav-access')
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        @if(Auth::user() == false)
        <div class="container" id="index" style="background-color: #E4D1CD;  background: transparent;  height: 60rem!important;  display: flex;  align-items: center;">
            @yield('content')
        </div>
        @else
        <div class="container" id="application" style="background-color: #E4D1CD;  background: transparent;  height: 60rem!important;  display: grid;  align-items: center;">
            <div class="card" style="background-color: #E4D1CD">
                @yield('content')
            </div>
        </div>
        @endif
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </body>
</html>
