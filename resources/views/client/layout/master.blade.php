<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('client/img/revol-lock-symbol.png')}}" type="image/x-icon">
    <title>REVOL LOCK | Khóa vân tay</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}" type="text/css">
</head>

<body>
    @include('client.pages.header')

   @yield('content')

   @include('client.pages.footer')

    <!-- Js Plugins -->
    <script src="{{ asset('client/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('client/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('client/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>
</body>

</html>
