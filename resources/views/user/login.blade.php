<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'SBet CMS')</title>
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
    <!-- modernizr css -->
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
            <form action="{{ route('user.login') }}" method="POST">
        @csrf
        <div class="login-form-head">
            <h4>Sign In</h4>
        </div>
        <div class="login-form-body">
            <div class="form-gp">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" id="exampleInputEmail1" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-gp">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" id="exampleInputPassword1" name="password">

                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="submit-btn-area">
                <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
            </div>
        </div>
    </form>

            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('user/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
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
</body>

</html>