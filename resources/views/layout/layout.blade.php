<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Dashboard')</title>
    @include('layout.css')
</head>

<body class="sb-nav-fixed">

    {{-- navbar --}}
    @include('layout.nav')


    <div id="layoutSidenav">
        {{-- sidebar --}}
        @include('layout.sidebar')

        {{-- main --}}
        <div id="layoutSidenav_content">

            @yield('content')
        </div>
    </div>


    @include('layout.script')
</body>

</html>
