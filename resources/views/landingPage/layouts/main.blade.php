<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/landingPage') }}/img/cover.png" type="image/x-icon" />

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/landingPage') }}/css/libs.bundle.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/landingPage') }}/css/theme.bundle.css" />
    @stack('style')
    <!-- Title -->
    <title>@yield('title')</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- NAVBAR -->
    @include('landingPage.layouts.navbar')



    <!-- WELCOME -->
    <section class="pt-4 pt-md-11 mb-10">
        <div class="container">
            @yield('content')
        </div> <!-- / .container -->
    </section>

    @include('landingPage.layouts.footer')

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/landingPage') }}/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/landingPage') }}/js/theme.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('script')
</body>

</html>
