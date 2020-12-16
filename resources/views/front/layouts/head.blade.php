<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi?ver=1.0" type="text/css" media="all">
    <link href="https://vjs.zencdn.net/7.0.3/video-js.css" rel="stylesheet">
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>

</head>
<body class="text-right" style="direction: rtl;">

<header>
    <div class="row bg-dark m-0">
        <div class="col-md-6">
            <div class="time text-white pr-5 text-right pt-2" style="font-size: 0.8em;"></div>
        </div>
        <div class="col-md-6">
            <div class=" text-dark top-nav pl-5 text-left pt-2">
                <a href="en-index.html" class="text-white ">English</a>
            </div>
        </div>
    </div>
    <div class=" logo   w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white" style="line-height: 100px;">
                    <a href="#" style="display: inline-block;">
                        <img src="{{asset('front/img/logo.png')}}" height="130" width="170">
                    </a>تجريبي</div>
                <div class="col-md-6 text-left">
                    <div class="live" style="color: #fff; display: inline-block; margin-right: 50%; text-align: center; margin-top: 20px;">
                        <i class="fas fa-tv fa-2x text-danger" style="font-size: 30px;"></i>
                        <h5>بث مباشر</h5>
                    </div>
                </div>
            </div>


            <!-- <div class="h2 logo-text text-dark" style="width: 150px; text-align: center; margin-right: 0px;">الخبرية</div> -->


        </div>
    </div>


    <!---->

@include('front.layouts.navbar')

</header>
