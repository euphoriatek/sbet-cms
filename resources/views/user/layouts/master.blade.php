<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SBet CMS')</title>
    
    <!-- Include CSS Files -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('user/assets/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
     <!-- @stack('styles')  -->

</head>
<body>
<div class="page-container">

    <!-- Header -->
    @include('user.layouts.header')
    @include('user.layouts.sidebar')
   <!-- Main Content -->
   <section class="content">
    
        @yield('content')
  </section>
  @include('user.layouts.footer')

</div>  

    <!-- JS Files -->
    <script src="{{ asset('user/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
       <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('user/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.slicknav.min.js') }}"></script>

 
    <!-- others plugins -->
    <script src="{{ asset('user/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('user/assets/js/scripts.js') }}"></script>

    <!-- @stack('scripts') -->
</body>
</html>
