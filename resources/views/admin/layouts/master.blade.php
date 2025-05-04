<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SBet CMS')</title>
    
    <!-- Include CSS Files -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/assets/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/responsive.css') }}">
     <!-- @stack('styles')  -->

</head>
<body>
<div class="page-container">

    <!-- Header -->
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
   <!-- Main Content -->
   <section class="content">
    
        @yield('content')
  </section>
 

</div>  
@include('admin.layouts.footer')
    <!-- JS Files -->
    <script src="{{ asset('admin/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
       <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('admin/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.slicknav.min.js') }}"></script>

 
    <!-- others plugins -->
    <script src="{{ asset('admin/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>

    <!-- @stack('scripts') -->
</body>
</html>
