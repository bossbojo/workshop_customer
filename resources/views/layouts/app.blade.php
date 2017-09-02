<!DOCTYPE html>
<?php
//name title and manu 
 $icon = '';
 $title = 'EDUCATION';
 $login = 'เข้าสู้ระบบ';
 $register = 'สมัครสมาชิก';
 $manu =['เรียนรู้','แบบทดสอบ','ห้องเรียน','โปรไฟล์'];
 ?>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="{{ asset('public/booklibrary.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  $title  }}</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/mainstyle.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Athiti|Kanit|Sriracha" rel="stylesheet">
    <style>
        html,body{
            font-family: 'Kanit', sans-serif;
            background-color:#ffffff;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header ">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <table>
                            <tr>
                                <td>
                                <img src="{{ asset('public/booklibrary.ico') }}" width="25px">
                                </td>
                                <td>
                                <span>&nbsp;&nbsp;{{ $title  }}</span>
                                </td>
                            </tr>
                        </table>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">{{ $login }}</a></li>
                            <li><a href="{{ route('register') }}">{{ $register }}</a></li>
                        @else
                             <?php for($i = 0 ; $i < sizeof($manu);$i++){ ?>
                            <li>
                               <a href="#" class="uppercase">
                                   {{ $manu[$i] }}
                                </a>
                            </li>
                            <?php } ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle uppercase" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <img src="{{ asset('public\img\blank-profile.png') }}" width="25px" class="img-proflie">  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>
</body>
</html>
