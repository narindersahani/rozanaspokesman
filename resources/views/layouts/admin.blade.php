<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($pageTitle) ? $pageTitle : config('app.name', 'Laravel')  }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/admin/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/skins/_all-skins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/radio-checkbox/radio-checkbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">


    <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.SpokesMan = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="sidebar-mini skin-yellow fixed">
    <div class="wrapper">
        @include('layouts.partials.admin.header')
        @include('layouts.partials.admin.left-sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/admin/select2/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('js/admin/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/admin/fastclick/fastclick.min.js') }}"></script>
    <script src="{{ asset('js/admin/app.min.js') }}"></script>
    <script src="{{ asset('js/admin/ckeditor/ckeditor.js') }}"></script>
    <!-- <script src="{{ asset('js/admin/chartjs/Chart.min.js') }}"></script> -->
    <script src="{{ asset('js/admin/searchBox.min.js') }}"></script>
    <script src="{{ asset('js/admin/dropdownMenu.min.js') }}"></script>
    <script src="{{ asset('js/admin/datetimepicker.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/admin/global.js') }}"></script>
    <!-- <script src="{{ asset('js/admin/custom.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/admin/bootstrap3-wysihtml5.all.min.js') }}"></script> -->
    @yield('script')
</body>
</html>
