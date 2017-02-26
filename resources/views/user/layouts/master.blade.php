<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}
    " rel="stylesheet">
    <link href="{{ URL::asset('assets/css/prettyPhoto.css') }}
    " rel="stylesheet">
    <link href="{{ URL::asset('assets/css/price-range.css') }}
    " rel="stylesheet">
    <link href="{{ URL::asset('assets/css/animate.css') }}
    " rel="stylesheet">
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/ico/favicon.ico') }}
    ">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="
    {{ URL::asset('assets/images/ico/apple-touch-icon-114-precomposed.png') }}
    ">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="
    {{ URL::asset('assets/images/ico/apple-touch-icon-72-precomposed.png') }}
    ">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
<body>
    <header id="header"><!--header--> 
    @include('user.includes.header')
    @yield('menu')
    </header><!--/header-->
    
    @yield('content')
    
    <footer id="footer"><!--Footer-->@include('user.includes.footer')
        
    </footer><!--/Footer-->
    

  
    <script src="{{ URL::asset('assets/js/jquery.js') }}
    "></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}
    "></script>
    <script src="{{ URL::asset('assets/js/jquery.scrollUp.min.js') }}
    "></script>
    <script src="{{ URL::asset('assets/js/price-range.js') }}
    "></script>
    <script src="{{ URL::asset('assets/js/jquery.prettyPhoto.js') }}
    "></script>
    <script src="{{ URL::asset('assets/js/main.js') }}
    "></script>
    @yield('scripts')
</body>
</html>