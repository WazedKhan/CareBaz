<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CareBuz</title>
    <link rel="shortcut icon" href="{{ url('/image/logo.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/normalize.css') }}">


    <link rel="stylesheet" href="{{ url('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('/css/mega_menu.css') }}">
    <link rel="stylesheet" href="{{ url('/css/customshop_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ url('/js/jquery.min.js') }}"></script>
    <script src="https://use.fontawesome.com/5ca0b7e511.js"></script>


    <style>
        .cart-close {
            background: #d00;
            height: 50px;
            width: 30px;
            position: absolute;
            top: 50%;
            font-size: 30px;
            color: #fff;
            cursor: pointer;
            border-radius: 10px 0px 0px 10px;
            padding-left: 4px;
            padding-top: 7px;
            text-align: center;
        }

        .product-hover-effect:hover {
            border: 1px solid #00255f !important;
            transition: all .1s;
        }

        .buy-now:hover {
            color: #00255f;
            transition: all .1s;
        }

        li {
            list-style-type: none;
        }

        img.zoomEffect {
            /*    width: 350px;
                    height: 200px;*/
            -webkit-transition: all 1.5s ease-in-out;
            -moz-transition: all 1.5s ease-in-out;
            -o-transition: all 1.5s ease-in-out;
            -ms-transition: all 1.5s ease-in-out;
        }

        .transition {
            -webkit-transform: scale(1.4);
            -moz-transform: scale(1.4);
            -o-transform: scale(1.4);
            transform: scale(1.4);
        }

    </style>
    <style>
        .main-category:hover {
            background-color: #ededed;
        }

        .sub-category-name:hover {
            background-color: #ededed;
        }

        .footer-panel>li>a {
            font-weight: bolder
        }

        .footer-panel>li>a:hover {
            background: none;
            cursor: pointer;
            color: orange !important;
        }

        .footer-panel>li>a:focus {
            background: none;
        }

        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
            outline: none;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .product-name-c {
            font-size: 16px;
            text-align: center;
            font-weight: 400;
            height: 45px;
            margin: 0;
            color: #777777;
            overflow: hidden;
            line-height: normal;

        }


        .product-hover-area a img {

            padding: 0 !important;
            width: 100% !important;
        }

        @media (min-width: 768px) {
            .product-custom-area {
                width: 14.2777% !important;
            }

        }

        @media (max-width: 767px) {
            .closemenu {
                position: absolute;
                left: 100%;
                top: 10%;
                background: #1d2127;
                border: #1d2127;
                padding: 5px;
                width: 40px;
                height: 40px;
                color: #fff;
                border-radius: 0 4px 4px 0;
                font-weight: bold;
                font-size: 20px;
            }

            .dropdown-menu {
                top: 15px;
                left: -79px;
                min-width: 180px;
            }
        }

        ul.ac-link .dropdown-menu {
            margin: 6px 0px 0px -57px;
            border: 1px solid #f3f1ee;
            -webkit-box-shadow: 0 0 0 4px rgba(0, 0, 0, 0.03);
            box-shadow: 0 0 0 4px rgba(0, 0, 0, 0.03);
            min-width: 180px;
        }

        ul.ac-link .dropdown-menu li {
            display: block !important;
            margin: 0 !important;
            padding: 0px 7px !important;
            line-height: normal;
            height: auto;
            font-size: 11px;
            color: #000;
        }

        ul.ac-link .dropdown-menu li .btn {
            width: 100%;
            display: block;
            padding: 10px;
            font-size: 13px !important;
            text-transform: uppercase;
            font-weight: 600;
            color: #fff !important;
            height: 36px !important;
            padding-top: 9px !important;
            border-radius: 4px;
        }

        ul.ac-link .dropdown-menu li .signup-overlay {
            margin-top: 5px;
        }

        .btn.btn-default {
            background-color: #ec6e47;
            color: #fff;
            text-transform: uppercase;
        }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <script>
        if (performance.navigation.type == 2) {
            location.reload(true);
        }
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1349468555455973');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1349468555455973&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '436677878189855');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=436677878189855&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1526956424352245');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1526956424352245&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '931455194403977');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=931455194403977&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1644689945882076');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1644689945882076&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '246988724264386');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=246988724264386&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '474471174187761');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=474471174187761&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '473745740913890');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=473745740913890&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '678773656589276');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=678773656589276&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '292492389651576');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=292492389651576&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '267812292168669');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=267812292168669&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <meta name="facebook-domain-verification" content="xptq6iqbr00vpgllf2zo90nn226yjp" />

</head>

<body style="background-color:#fff;font-family: Rubik,Noto Sans Bengali,Helvetica Neue,Helvetica,Arial,sans-serif;">
    <!--<body style="background-color:#fff" ondragstart="return false;" ondrop="return false;" oncontextmenu="return false;" > -->

    <!--<section style="background-color:red ">-->
    <!--                <div class="container">-->
    <!--                    <div class="row"> -->
    <!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">-->
    <!--                            <style>-->
    <!--                                .blink_me {-->
    <!--  animation: blinker 6s linear infinite;-->
    <!--}-->

    <!--@keyframes blinker {-->
    <!--  50% {-->
    <!--    opacity: 0;-->
    <!--  }-->
    <!--}-->
    <!--                            </style>-->
    <!--                            <h3 style="    margin: 0;-->
    <!--    padding: 5px;-->
    <!--    font-size: 20px;-->
    <!--    text-align: center;color:#fff" class="blink_me">-->
    <!--                            দেশের সর্বিক পরিস্থিতি বিবেচনা করে আমাদের সকল কার্যাদি ও সেবা ২৫ মার্চ ২০ থেকে ৪ এপ্রিল পর্যন্ত বন্ধ থাকবে-->

    <!--                              ।-->
    <!--                            </h3>-->

    <!--                        </div>-->


    <!--                    </div> -->
    <!--                </div>-->



    <!--            </section>-->

    <section class=" area-mobile-off" style="box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);">

        <div id="hpart">
            <div class="container">
                <div class="wel-text col-sm-4">Welcome to <span>CareBaz</span></div>
                <div class="pull-right text-right col-sm-8">

                    <ul class="ac-link clearfix">
                        @if (Auth::check() && Auth::user()->role == 'admin')
                        <li>
                            <a href="{{ route('index') }}">
                                Admin
                            </a>
                        </li>
                        @endif
                        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                        </li>

                        <li><a href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>

                        <li><a href="{{ route('track') }}"><i class="fas fa-truck"></i> Track Order</a></li>
                        @auth
                        <li><a href="{{ route('profile') }}"> <i class="fas fa-user"></i> {{ Auth::user()->name }}</a></li>
                        @endauth

                        
                        @if (!Auth::check())
                        <li><a href="{{ route('login') }}"><span
                            <i class="fas fa-sign-in-alt"></i></span> Login</a></li>
                            <li><a href="{{ route('register') }}"><span
                                </span> Register</a></li>
                        @endif

                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <section style="background-color:#161615">
            <div class="container">
                <div class="row" style="padding-top: 14px;">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
                        <div style="float: left">
                            <a href="{{ url('/') }}"><img
                                    src="{{ url("/image/logo.png") }}"
                                    style="float: right;padding-top: 5px;" alt="shop logo"
                                    title="shop log"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 search-area" style="">

                        <div id="search" class="search">

                            <select id="search_cat" name="cat">
                                <option value="">ক্যাটেগরীজ</option>
                                @foreach ($cate as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                
                            </select>
                            <form action="{{ route('search') }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="search" name="search" id="search_query" class="form-control" value=""
                                        placeholder="সার্চ করুন" autocomplete="off">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                    <ul class="dropdown-menu"></ul>
                                </div>
                            </form>
                            
                            {{-- <form action="{{ route('search') }}" method="POST" class="form-inline">
                                @csrf
                                <input name="search" class="form-control mr-sm-2" type="search" placeholder="সার্চ করুন" aria-label="Search">
                            </form> --}}

                        </div>


                    </div>

                    <div class="menu-rig col-lg-3 col-md-3 col-sm-3 col-xs-12  " style="padding-top: 40px">

                        <div class="pull-right ">
                            <div class="hotline">
                                <i class="fa fa-phone"></i>
                                <span>{{ $info->number_1 }}</span>
                            </div>
                            <div class="cartbtn">
                                <!--<a  href="resistration-information" class="cart-button">-->

                                <a onclick="CartPanel(1)" href="javascript:void(0)" class="cart-button">

                                    <div class="items">
                                        <img class="icon-shopping-bag"
                                            src="{{ url('/image/shopping-bag.png') }}">

                                        <div style="background:transparent" class="itemcount item_0"
                                            id="MtotalCartItemsBlank">
                                            <span class="itemno" id="MtotalCartItems">
                                                <span class="badge badge-danger">{{ $cart->count() }}</span>
                                            </span>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>



        <nav class="navbar navbar-default lightHeader " role="navigation"
            style="height: auto;top: 0;box-shadow: none;background: #421414">
            <div class="container">
                <!--<div class="container" style="justify-content: center; display: flex; padding-right: 0;">-->

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:0">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="color-2">

                            <a style="padding: 15px;" href="{{ route('home') }}">
                                <span style="font-weight: bold;padding: 0">
                                    Home
                                </span>
                            </a>

                        </li>

                        @foreach ($cate as $item)
                        <li class="color-2">

                            <a style="padding: 15px;" href="{{ route('productList',$item->id) }}">
                                <span style="font-weight: bold;padding: 0">
                                    {{ $item->name }}
                                </span>
                            </a>

                        </li>
                        @endforeach



                    </ul>
                </div>

            </div>
        </nav>


    </section>
    <div class="modal fade" id="mySms" role="dialog">
        <div class="modal-dialog">
            <form action="#" method="post">
                <!-- Modal content-->
                <div class="modal-content" style="border: 3px solid #00255f ;">
                    <div class="modal-header" style="border-bottom: 1px solid #35A3D3;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <strong>Track Order Record</strong></h4>
                    </div>
                    <div class="modal-body">


                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 form-group">
                            <input style="width:100% !important;padding: 20px;" required type="number"
                                class="form-control" name="mobile_number"
                                placeholder="Please Type Your Mobile Number">
                        </div>

                    </div>
                    <div class="modal-footer" style="border:0;padding: 50px 30px 30px 30px;">
                        <input style="color:#fff;font-weight:bold;padding: 5px;width:100% !important;background:#02255F"
                            type="submit" class="btn  pull-right" value="Search">
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!--=========================header bottom section==================-->


    <div id="hpart" class="area-mobile-on hpart-mobile" style="display: none">
        <div class="container" style="padding-right: 0">
            <div class="wel-text col-xs-8">Welcome to <span>CareBaz</span></div>
            <div class="pull-right text-right col-xs-4" style="padding-right: 0;">

                <div class="topnav mobile" style="float: right;">
                    <span <i class="fas fa-hamburger"></i></span>
                </div>


                <span class="dropdown">
                    <a data-toggle="dropdown" class="usernav mobile btnlogin" href="javascript:void(0)"
                        style="float: right;">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu" style="margin-top:10px;padding-top: 0;">
                        @if (!Auth::check())
                        <li style="padding: 0 !important;">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li style="padding: 0 !important;">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @else
                        <li style="padding: 0 !important;">
                            <a href="{{ route('profile') }}">Profile</a>
                        </li>
                        @endif
                    </ul>
                </span>
            </div>
        </div>
        <ul class="ac-link  ">
            <li style="margin-left: 10px;"><a href="{{ route('home') }}"><span
                <i class="fas fa-home"></i></span> Home</a></li>

            <li><a href="{{ route('contact') }}"><i class="fas fa-envelope"></i></span> Contact</a></li>

            <li><a href="{{ route('track') }}"><i class="fas fa-truck"></i></span> Track Order</a></li>

            <li><a href="{{ route('cart') }}"><span
                <i class="fas fa-shopping-cart"></i></span> Checkout</a></li>


        </ul>
    </div>
    <nav id="menuBar" class="navbar navbar-default lightHeader  " role="navigation"
        style="height: auto;top:-1px;background: #1d1a19;box-shadow: none;">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header logo-area" style="padding-top: 5px;padding-bottom: 5px;">
                <div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse"
                        style="padding-right: 0;float: left;margin-left: 20px;margin-top: 5px;background-color: transparent; border: 0;box-shadow: none;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="search-area mobile" style="padding-top: 0;">
                    <button class="btntoggle">
                        <i class="fa fa-search"></i>
                    </button>
                    <div class="search-form" hidden="" style="display: none;">

                        <form action="{{ route('search') }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="search" name="search" id="search_query" class="form-control" value=""
                                        placeholder="সার্চ করুন" autocomplete="off">
                                    {{-- <button type="submit"><i class="fas fa-search"></i></button> --}}
                                    <ul class="dropdown-menu"></ul>
                                </div>
                            </form>
                    </div>
                </div>
                <div>
                    <a href="{{ route('home') }}" style="float: left;  ">
                        <img src="{{ url('/image/logo.png') }}" class="img-responsive"
                            alt="carebaz" title="carebaz" style="width: 140px;">
                    </a>
                </div>
                <!--                    <a href="#"data-toggle="modal" data-target="#mySms"   style="float: right;padding-right: 20px;">
                                            <i class="fa fa-user" style="color: #fff; font-size: 30px; font-weight: bold; padding-top: 11px;"></i>
                                        </a>-->

                <!--<a href="resistration-information"  style="float: right;padding-right: 20px;">-->

                <a onclick="CartPanel(1)" href="javascript:void(0)" style="float: right;padding-right: 20px;">



                    <div class="cartbtn mobile">

                        <div class="items">
                            <img class="icon-shopping-bag" src="{{ url('/image/shopping-bag.png') }}">


                            <div class="itemcount item_1" id="MtotalCartItemsBlank2" style="background: transparent;">
                                <span class="itemno" id="MtotalCartItems2"> </span>
                            </div>



                        </div>

                    </div>
                </a>




            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="position: absolute; width: 80%;">
                <button class="closemenu mobile" data-toggle="collapse" data-target=".navbar-ex1-collapse">x</button>
                <ul class="nav navbar-nav navbar-left" style="height: 100vh;">



                    @foreach ($cate as $item)
                        

                    <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2">
                        <a href="{{ route('productList',$item->id) }}">
                            <span style="font-weight: normal;color: #000">{{ $item->name }}
                            </span>
                        </a>

                    </li>
                    @endforeach

                </ul>
            </div>

        </div>
    </nav>
    {{-- Slider Area Starts --}}

    @yield('slider')

    {{-- Slider Area Ends --}}
    
    <!--content area start-->

    @yield('content')

    <!--content area end-->




    <footer class="navbar-default" style="background: #000000">
        <div class="container-fluid ">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mobile-padding-zero">
                <p class="text-center" style="padding-top:5px"></p>
                <center>
                    <a href="{{ route('about') }}" target="_blank" style="color: white !important;">আমাদের
                        সম্পর্কে </a>
                    <a href="{{ route('delivery.info') }}" target="_blank"
                        style="color: white !important; margin:0 15px"> ডেলিভারি পলিসি </a>
                    <a href="{{ route('replace.refund') }}" target="_blank" style="color: white !important;">
                        রিপ্লেসমেন্ট পলিসি </a>

                </center>

                <p class="text-center" style="color:#fff;font-weight:bold;padding-top:8px;padding-bottom: 8px;">
                    Copyright © 2022 | CareBuz.com </p>
            </div>

        </div>
    </footer>

    <!--show cart details start-->
    <div id="CartDataArea" class="CartDataArea"
        style="position: fixed;z-index: 99999;bottom: 0;top:0;right: 0;width:0;height:100vh;background:#F1F1F1;  border-radius: 5px 0 0 0 !important;">

        <div id="CartClose" class="closeCartBox cart-close" onclick="CartPanel(0)">
            <i class="fa fa-chevron-right"></i>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 8px; background: #e4e0e1;">
            <span style="width:100%;display: block;text-align: center;font-size: 15px;font-weight:700"> <label
                    style="font-size: 15px;font-weight: 700;color:#4f4f4f;text-transform: uppercase;"
                    id="CartDetailsQty">0 Items</label>
            </span>


        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding: 0">
            <div class="col-sm-12 white " style="padding: 0px;border: 0px;  ">
                <table class="table table-bordered" style="margin-top: 0px;" id="AjaxCartDetailsData">
                    
                    
                    <tbody>
                        @php
                            $total = 0
                        @endphp
                        @foreach ($cart as $item)

                        
                            <tr style="cursor: pointer">
                                <td style="padding-left: 0;padding-right: 0;">
                                    @foreach ($item->product->product_image as $images)
                                    <center><img style="width:30px;height: 30px" src="{{ url('/storage/'.$images->image) }}"></center>
                                    @break
                                    @endforeach
                                </td>
                                <td> 
                                <input type="hidden" id="Mquantity-value1685" value="1">
                                
                                    {{ $item->product->name }}                                      
                    <h6 style="margin: 0;">
                     ৳ {{ $item->product->price-$item->product->discount }} 
                    <i class="fa fa-times"></i>
                    {{ $item->quantity }}                        &nbsp; 
                    </h6>
                                </td>
                                <td style="width: 80px;"> 
                                     ৳ {{ ($item->product->price-$item->product->discount)*$item->quantity }}   
                                </td>
                                
                                @php
                                    $total += ($item->product->price-$item->product->discount)*$item->quantity
                                @endphp

                            </tr>


                    @endforeach
                    </tbody>
                </table>


            </div>

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="height: 50px; display: inline-table;">
            <span style="padding-right: 5px;width:50%;color: #fff;display: block;float: left;">
                <a type="button" class="btn badge-light" href="{{ route('cart') }}" style="color:#fff ;font-weight: bold;text-transform: uppercase;border:0;background: #40460f;line-height: 20px;padding: 10px 10px;width:100%">
                    Check Out
                </a>
            </span>

            <span id="CartDetailsTotal" class="btn badge-light"
                style="width:48%;color: #fff;display: block;text-align: right;font-size: 20px;font-weight: bold;float: right;background: #40460f;line-height: 20px;padding: 10px 10px;">
                Total: ৳ {{ $total }}
            </span>
        </div>
    </div>




    <script>
        function IncrementFunction22(Obj) {
            //        alert(Obj);
            var x = document.getElementById(Obj).innerHTML;

            var quantity;
            var limit = document.getElementById("QtnLimitPerUserHiddenField").value;



            if (x > 0 && x < 100) {

                quantity = Number(x) + 1;
                //            document.getElementById("QuantityHiddenField").value = quantity;
                document.getElementById('product_buy_item_' + Obj).value = quantity;
                document.getElementById(Obj).innerHTML = quantity;
            } else {
                //            document.getElementById("QuantityHiddenField").value = x;
                document.getElementById('product_buy_item_' + Obj).value = x;
                document.getElementById(Obj).innerHTML = x;
            }
            //        return false;
        }

        function DecrementFunction22(Obj) {
            //          alert(Obj);
            var x = document.getElementById(Obj).innerHTML;
            var quantity;
            //        alert(quantity);
            if (x > 1) {
                quantity = Number(x) - 1;
                //            alert(quantity);
                //         document.getElementById("QuantityHiddenField").value = quantity;
                document.getElementById('product_buy_item_' + Obj).value = quantity;
                document.getElementById(Obj).innerHTML = quantity;


            } else {
                //            document.getElementById("QuantityHiddenField").value = x;
                document.getElementById('product_buy_item_' + Obj).value = x;
                document.getElementById(Obj).innerHTML = x;
            }
            //        return false;
        }
    </script>







    <!--work-->
    <script>
        function ProductAddTwoCart(Obj) {
            serverPage = '#' + Obj;
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var obj = JSON.parse(xmlhttp.responseText);


                    document.getElementById("MtotalCartItemsBlank").style.background = "#f00";

                    document.getElementById("MtotalCartItems").innerHTML = obj.total_items;

                    document.getElementById("MtotalCartItemsBlank2").style.background = "#f00";

                    document.getElementById("MtotalCartItems2").innerHTML = obj.total_items;

                    $('html, body').animate({
                        scrollTop: $("#MtotalCartItemsBlank2").position().top
                    }, 'slow');


                    document.getElementById("CartDetailsQty").innerHTML = obj.total_items + ' Items';


                    document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;
                    ProductAddDetails();
                }
            }
            xmlhttp.send(null);

        }
    </script>
    <script>
        function IncrementFunction(Obj, rowid) {
            var x = document.getElementById(Obj).value;
            var quantity = Number(x) + 1;
            serverPage = '#' + rowid + '/' + quantity;
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var obj = JSON.parse(xmlhttp.responseText);

                    document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;

                    ProductAddDetails();
                }
            }
            xmlhttp.send(null);


        }

        function DecrementFunction(Obj, rowid) {
            var x = document.getElementById(Obj).value;
            var quantity = Number(x) - 1;
            if (quantity >= 1) {
                document.getElementById(Obj).innerHTML = quantity;

                serverPage = '#' + rowid + '/' + quantity;
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var obj = JSON.parse(xmlhttp.responseText);

                        document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;
                        ProductAddDetails();
                    }
                }
                xmlhttp.send(null);
            }


        }
    </script>
    <script>
        function ProductAddDetails() {
            //        alert(Obj);
            serverPage = '#';
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("AjaxCartDetailsData").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.send(null);

        }
    </script>

    <script>
        function CartDataRemove(Obj) {

            serverPage = '#' + Obj;
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("AjaxCartDetailsData").innerHTML = xmlhttp.responseText;
                    ProductRemoveDetails();
                }
            }
            xmlhttp.send(null);

        }



        function ProductRemoveDetails() {
            //        alert(Obj);
            serverPage = '#';
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var obj = JSON.parse(xmlhttp.responseText);


                    document.getElementById("MtotalCartItemsBlank").style.background = "#f00";

                    document.getElementById("MtotalCartItems").innerHTML = obj.total_items;

                    document.getElementById("MtotalCartItemsBlank2").style.background = "#f00";

                    document.getElementById("MtotalCartItems2").innerHTML = obj.total_items;




                    document.getElementById("CartDetailsQty").innerHTML = obj.total_items + ' Items';


                    document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;

                    $('html, body').animate({
                        scrollTop: $("#MtotalCartItemsBlank2").position().top
                    }, 'slow');

                }
            }
            xmlhttp.send(null);

        }
    </script>





    <script>
        function CartPanel(obj) {
            widthSiz = $(window).width();

            if (obj == 1) {
                document.getElementById("CartDataArea").style.WebkitTransition = "all 1s"; // Code for Safari 3.1 to 6.0
                document.getElementById("CartDataArea").style.transition = "all 1s";
                if (widthSiz > 1150) {
                    document.getElementById("CartDataArea").style.width = '400px';
                    $("#CartClose").css("left", "-30px");
                } else {
                    document.getElementById("CartDataArea").style.width = '290px';
                    $("#CartClose").css("left", "-30px");
                }
            } else {

                document.getElementById("CartDataArea").style.WebkitTransition = "all 1s"; // Code for Safari 3.1 to 6.0
                document.getElementById("CartDataArea").style.transition = "all 1s";
                document.getElementById("CartDataArea").style.width = '0px';

                $("#CartClose").css("left", "0");


            }


        }

        function SearchProduct_byUser(Obj) {
            search_cat = document.getElementById("search_cat").value;
            if (search_cat > 0) {
                serverPage = '#' + Obj + '/' + search_cat;
            } else {
                serverPage = '#' + Obj;
            }
            xmlhttp.open("POST", serverPage);
            xmlhttp.onreadystatechange = function() {

                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    document.getElementById("main_content_area").innerHTML = xmlhttp.responseText;

                }
            }
            xmlhttp.send(null);

        }
    </script>



    <script language="javascript">
        //Create a boolean variable to check for a valid Internet Explorer instance.
        var xmlhttp = false;
        //Check if we are using IE.
        try {
            //If the Javascript version is greater than 5.
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

            //alert ("You are using Microsoft Internet Explorer.");
        } catch (e) {

            //If not, then use the older active x object.
            try {
                //If we are using Internet Explorer.
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                //alert ("You are using Microsoft Internet Explorer");
            } catch (E) {
                //Else we must be using a non-IE browser.
                xmlhttp = false;
            }
        }
        //If we are using a non-IE browser, create a javascript instance of the object.
        if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
            xmlhttp = new XMLHttpRequest();
            //alert ("You are not using Microsoft Internet Explorer");
        }
    </script>

    <script>
        var url = new URL(window.location.href);

        if (url) {
            x = 0;
            serverPage = '#' + x;

            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function() {
                console.log('1');
            }
            xmlhttp.send(null);

        }
    </script>


    <script src="{{ url('/js/bootstrap.min.js') }}"></script>


</body>

</html>
<style>
    .alert-box-arrow {
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: 15px solid #F6F6F6;
        margin-top: -15px;
        position: absolute;
    }

</style>

<script>
    $('.megaDropMenu').hover(function() {
        $(this).addClass('open');
    }, function() {
        $(this).removeClass('open');
    });
</script>

<script>
    jQuery('.btntoggle').on('click', function() {

        jQuery('.search-form').toggle('slow');
    });
    jQuery('.btnclose').on('click', function() {
        jQuery('.search-form').toggle('slow');
        return false;
    });
    jQuery('body').on('click', '.topnav', function() {
        jQuery('.ac-link').slideToggle();
    });
</script>
