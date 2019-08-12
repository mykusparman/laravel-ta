<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset') }}/img/iconknb.ico">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset') }}/css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset') }}/css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('asset') }}/css/owl.theme.default.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('asset') }}/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset') }}/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!-- HEADER -->
    @include('layouts.navbar')
    
    @yield('content')

    <!-- FOOTER -->
    <footer id="footer" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- footer contact -->
                <div class="col-md-12" align="center">
                    <div class="footer">
                        <div class="footer-logo">
                            <a class="" href="#"><img src="{{ asset('asset') }}/img/logoknb.png" alt="" height="200px" width="200px"></a>
                        </div>
                        <strong><p style="font-size: 24px">#SayNoToNgemis</p></strong>
                        <ul class="footer-contact">
                            <li><i class="fa fa-map-marker"></i> Bandung</li>
                            <li><i class="fa fa-money"></i> BRI 4288-01-011129-53-4 A.n Lulu Haqiqi</li>
                            <li><i class="fa fa-envelope"></i> <a href="#">ketimbangngemisbandung@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer contact -->

                <!-- footer galery -->
               {{--  <div class="col-md-4">
                    <div class="footer">
                        <h3 class="footer-title">Galery</h3>
                        <ul class="footer-galery">
                            <li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div> --}}
                <!-- /footer galery -->

                <!-- footer newsletter -->
                {{-- <div class="col-md-6">
                    <div class="footer">
                        <h3 class="footer-title">JOIN US</h3>
                        <p>Kirim Email kamu untuk mendapatkan informasi seputar Recruitment KNB</p>
                        <form class="footer-newsletter">
                            <input class="input" type="email" placeholder="Enter your email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
                <!-- /footer newsletter -->
            </div>
            <!-- /row -->

            <!-- footer copyright & nav -->
            <div id="footer-bottom" class="row">
                <div class="col-md-12" align="center">
                    <div class="footer-copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            &copy;<script>document.write(new Date().getFullYear());</script> Ketimbang Ngemis Bandung
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                        </div>
                    </div>
                </div>
            <!-- /footer copyright & nav -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('asset') }}/js/jquery.min.js"></script>
    <script src="{{ asset('asset') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('asset') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('asset') }}/js/main.js"></script>
    @stack('script')
</body>

</html>
