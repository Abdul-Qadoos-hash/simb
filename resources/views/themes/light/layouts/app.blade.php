<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simbco
    </title>


   
    <!-- Favicon-link -->
    <link rel="shortcut icon" href="{{ getFile(basicControl()->favicon_driver, basicControl()->favicon) }}"
          type="image/x-icon">
    @include($theme.'partials.style')


    @include($theme.'partials.loader-js')


</head>

<body class="">

@include($theme.'partials.loader')

@include($theme.'partials.header')
@include($theme.'partials.breadcrumb')
@yield('content')

@include($theme.'partials.footer')


@include($theme.'partials.script')
@stack('extra_scripts')
@yield('scripts')
@include($theme.'partials.flash-message')


@include('plugins')
@if(Request::url() == url('/'))
    @include($theme.'partials.exchange-module.exchange-js')
@endif

</body>

</html>
