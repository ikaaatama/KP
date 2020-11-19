<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('SIPESU') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
    .navbar-brand{
        margin-left: 10px;
    }
    .eki{
        margin-top: 470px;
    }
    body{
        background: white;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.sound.min.js"></script>

    <meta charset="utf-8" />


<body>
<div class="eki fixed-top">
    <center>
    <font size="8" face="Times New Roman" color="#1E90FF">SISTEM PENGARSIPAN SURAT MASUK DAN SURAT KELUAR</font><br>
    <font size="8" face="Times New Roman" color="#1E90FF">Pekon Sukoharjo I </font>
    </center>
</div>
<nav class="navbar navbar-expand-md navbar-light bg-transparant fixed-top">
    <div class="container">
        <a href=""><img src="images/psw.png" width="20px" height="30px" ></a>
        <a class="navbar-brand" href="{{ url('/admin') }}"><font size="5"  color="##E2E2E2">SIPESU</font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('login') }}"><font size="4"  color="#1E90FF">Masuk</font></a>
                        </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('register') }}"><font size="4"  color="#1E90FF">Daftar</font></a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <font size="4"  color="#1E90FF">{{ Auth::user()->name }}</font> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
                </div>


    </div>

</nav>



    @yield('content')
</body>
  
</body>
</html>
