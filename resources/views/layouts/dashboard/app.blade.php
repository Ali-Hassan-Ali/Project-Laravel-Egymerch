<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard_files/assets/imgs/theme/favicon.svg') }}">
    <!-- Template CSS -->
    <link href="{{ asset('dashboard_files/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('dashboard_files/site_assets/assets/css/vendors/fontawesome-all.min.css') }}">
    
    @yield('styles')
    
</head>

<body>
    <div class="screen-overlay"></div>

    @include('layouts.dashboard.include._slide')

    <main class="main-wrap">

    @include('layouts.dashboard.include._header')
   
    <section class="content-main">

        @yield('content')

    </section> <!-- content-main end// -->

    @include('layouts.dashboard.include._footer')

    </main>

    <script src="{{ asset('dashboard_files/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/vendors/chart.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('dashboard_files/assets/js/main.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('dashboard_files/assets/js/custom-chart.js') }}" type="text/javascript"></script>
    
    @yield('scripts')

</body>

</html>