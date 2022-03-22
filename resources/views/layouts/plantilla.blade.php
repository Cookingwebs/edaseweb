<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-205246474-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-205246474-2');
    </script>

</head>
<div class="--wrapper" id="@yield('id-page')">
@include('layouts.nav')

    @yield('content')

    @include('layouts.footer')
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ mix('assets/js/app.js')}}"></script>
</html>