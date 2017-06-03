<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">    
    <title>{!! $pageTitle !!}</title>
    <!-- ==== bootstrap css ==== -->
    <link href="{{ asset('/frontend/css/vendor/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- ==== font Awesome css ==== -->
    <link href="{{ asset('/frontend/css/vendor/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- ==== animated css ==== -->
    <link href="{{ asset('/frontend/css/vendor/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- ==== Responsive Menu ==== -->
    <link href="{{ asset('/frontend/js/plugins/MultiLevelMenu/component.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('/frontend/js/plugins/MultiLevelMenu/modernizr.custom.js') }}"></script>
    <!-- ==== owl-carousel ==== -->
    <link href="{{ asset('/frontend/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <!-- ==== fancybox ==== -->
    <link href="{{ asset('/frontend/js/plugins/fancybox/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/frontend/js/plugins/fancybox/helpers/jquery.fancybox-buttons.css') }}" rel="stylesheet" type="text/css" />
    <!-- ==== Custom css ==== -->
    <link href="{{ asset('/frontend/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    @include('layouts.partials.frontend.header')

    @yield('content')

    @include('layouts.partials.frontend.footer')
    

    <!-- ==== jQuery Ajax Library ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/vendor/jquery-2.1.1.min.js') }}"></script>
    <!-- ==== Bootstrap Core JavaScript ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/vendor/bootstrap.min.js') }}"></script>
    <!-- ==== ie10-viewport-bug-workaround ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/vendor/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- ==== ie-emulation-modes-warning ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/vendor/ie-emulation-modes-warning.js') }}"></script>
    <!-- ==== MultiLevelMenu Responsive ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/plugins/MultiLevelMenu/jquery.dlmenu.js') }}"></script>
    <!-- ==== owl-carousel ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- ==== fancy box ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/plugins/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/plugins/fancybox/helpers/jquery.fancybox-buttons.js') }}"></script>
    <!-- ==== custom js ==== -->
    <script type="text/javascript" src="{{ asset('/frontend/js/custom.min.js') }}"></script>
</body>
</html>