<!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('web_title','Ketimbang Ngemis Bandung')</title>

    <link rel="shortcut-icon" href="{{ asset('asset/img/Ketimbang-Ngemis-Bandung.jpg') }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/owl.carousel.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
 </head>
 <body>
    
    @yield('content')

    <!-- START FOOTER -->
    <footer id="footer" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- footer contact -->
                <div class="col-md-6">
                    <div class="footer">
                        <div class="footer-logo">
                            <a class="logo" href="#"><img src="{{ asset('asset/img/Ketimbang-Ngemis-Bandung.jpg') }}" alt=""></a>
                        </div>
                        <p>Ketimbang Ngemis Bandung</p>
                        <ul class="footer-contact">
                            <li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
                            <li><i class="fa fa-phone"></i> 607-279-9246</li>
                            <li><i class="fa fa-envelope"></i> <a href="#">Charity@email.com</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer contact -->

                <!-- footer newsletter -->
                <div class="col-md-6">
                    <div class="footer">
                        <h3 class="footer-title">Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
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
                </div>
                <!-- /footer newsletter -->
            </div>
            <!-- /row -->

            <!-- footer copyright & nav -->
            <div id="footer-bottom" class="row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Causes</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
 
 </body>
 </html>