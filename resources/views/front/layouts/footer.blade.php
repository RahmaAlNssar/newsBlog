<footer class="mt-5 py-3 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="{{asset('front/img/logo.png')}}" width="150" height="150" alt="">

                <ul class="contact text-center" style="list-style: none;">

                    <li style="background: #4167b2;">
                        <a href="#">
                            <i class="fab fa-facebook-f fa-xm"></i>
                        </a>
                    </li>
                    <li style="background: #54a8e5">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li style="background: red">
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li style="background: #e05440">
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li style="background: #ffe35f">
                        <a href="#">
                            <i class="fab fa-snapchat-ghost"></i>
                        </a>
                    </li>
                    <li style="background: #b24eba">
                        <a href="#">
                            <i class="fab fa-instagram fa-1x"></i>
                        </a>
                    </li>
                </ul>
                <br>
                <p style="font-size: 0.7em;">© جميع الحقوق محفوظة لقناة الخبرية 2018
                </p>
            </div>
            <div class="col-md-3">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226); font-size: 1.2em; margin-bottom: 10px;   ">الاقسام</li>
                    <li>
                        <a href="#">الاخبار</a>
                    </li>
                    <li>
                        <a href="#">اسواق</a>
                    </li>
                    <li>
                        <a href="#">رياضة</a>
                    </li>
                    <li>
                        <a href="#">منوعات</a>
                    </li>
                    <li>
                        <a href="#">برامج</a>
                    </li>
                    <li>
                        <a href="/">مقالات</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226);; font-size: 1.2em; margin-bottom: 10px;   ">المواضيع</li>
                    <li>
                        <a href="#">علم</a>
                    </li>
                    <li>
                        <a href="#">ثقافة وفن</a>
                    </li>
                    <li>
                        <a href="#">تكنولوجيا</a>
                    </li>
                    <li>
                        <a href="#">النشرات</a>
                    </li>
                    <li>
                        <a href="#">اسواق</a>
                    </li>
                    <li>
                        <a href="#">طب وصحة</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226);; font-size: 1.2em; margin-bottom: 10px;   ">اخبار الدول</li>
                    <li>
                        <a href="#">مصر</a>
                    </li>
                    <li>
                        <a href="#">السعودية</a>
                    </li>
                    <li>
                        <a href="#">امريكا</a>
                    </li>
                    <li>
                        <a href="#">المغرب</a>
                    </li>
                    <li>
                        <a href="#">اليمن</a>
                    </li>
                    <li>
                        <a href="#">العراق </a>
                    </li>
                </ul>
            </div>


            <div class="col-md-12 text-center pt-2" style="direction: ltr; text-align: left">
                <a href="http://bragma.com/">
                    <p style="display: inline-block; font-size: 0.9em;">© Copyright 2018 bragma.com </p>
                    <img src="{{asset('front/img/bragmalogo.png')}}" height="30" width="70" alt="bragma">
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/slick.min.js')}}"></script>
<script src="https://vjs.zencdn.net/7.0.3/video.js"></script>
<script src="{{asset('front/js/main.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.slick-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,

        });
    });
</script>

@yield('js')

</body>

</html>
