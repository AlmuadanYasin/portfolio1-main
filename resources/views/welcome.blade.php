<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AlA || Personal Portfolio</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="/">
                            <span>AlA</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            @guest
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('login') }}">Login</a>
            
                            <li class="nav-item">
                             <a class="nav-link " href="{{ route('registration') }}">Register</a>
              
                         @else

                         <li class="nav-item">
                                <a class="nav-link " href="{{ route('logout') }}">Logout</a>
                            </li>
                         @endguest
                             </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <!-- <a class="rn-btn" target="_blank" href="../../checkout/83025947/create_account.html?license=regular"><span>BUY NOW</span></a> -->
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.html">
                        <span>AlA</span>
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <!-- <p class="discription">Inbio is a personal portfolio template. You can customize all.</p> -->
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills">
                    <ul class="primary-menu nav nav-pills">
                        @guest
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('login') }}">Login</a>
            
                            <li class="nav-item">
                             <a class="nav-link " href="{{ route('registration') }}">Register</a>
              
                         @else

                         <li class="nav-item">
                                <a class="nav-link " href="{{ route('logout') }}">Logout</a>
                            </li>
                         @endguest
                         </ul>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="https://www.facebook.com/almuadan.0821"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Falmuadan.0821%3Figsh%3Db3lvbWg0OXloZTFz%26fbclid%3DIwAR3bLPf60P2Tn7IE9nx0bxUeU3SKPvcE__Vt5_pd5rZltto54VnGXgbpyP0&h=AT2aCxk5Tp_J6CBAYQDNvHHd3JsMbMhRwD_AUTV3ddam5_rEJIzEugRjkUzEMJ_v2bJp1aD8Q1PJp1PfA_9otSp3taBaeqGKC0_KsrF9vFxKTJ80pAyPFmbjHXYdcr9YwbDVNaMcbAXjFcXNw6fiwA"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="https://www.linkedin.com/in/almuadan-yasin-a7456529a/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->




    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
                                    <h1 class="title">Hi, I’m <span>AL</span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                                    <b class="is-visible">UI Designer.</b>
                                                    <b class="is-hidden">Shopify VA.</b>
                                                    <b class="is-hidden">Web Developer.</b>
                                                </span>
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">I have a experience in Web Developer and UI Designer with experience building and designing websites and web apps from Shopify.
                                            Html, CSS, Php, and Laravel are the field of my expertise when it comes to building websites and web apps. I deal with graphics designing as well.
                                            I am know to use Figma, Adobe Illustrator, and Photoshop for the design. Photography is also one of the skills I use in my design.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find with me</span>
                                            <ul class="social-share d-flex liststyle">
                                                <li class="facebook"><a href="https://www.facebook.com/almuadan.0821"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li class="instagram"><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Falmuadan.0821%3Figsh%3Db3lvbWg0OXloZTFz%26fbclid%3DIwAR1g32IBnc6vjKyWVdzDq8q0FHqjTZgJfUZeJNJVhrgIqsd6z5EKssMdd5A&h=AT1ylE-GiTf6zPwEe3bMLSkD0lMFGGOWQLkP_66d6xIvjMGSoaCQciisyh1ynNxq2qnxwifW_qH88wrxVy0XgJemjMzk4xfnNvquvZIMlZSs4XQ4BXgboQNaVClxgoyL-anzhMbHDwDv53Nx1hQ_Hg"><i data-feather="instagram"></i></a>
                                                </li>
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/almuadan-yasin-a7456529a/"><i data-feather="linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
                                                <li><img src="assets/images/icons/icons-01.png" alt="Icons Images"></li>
                                                <li><img src="assets/images/icons/icons-02.png" alt="Icons Images"></li>
                                                <li><img src="assets/images/icons/icons-03.png" alt="Icons Images"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="assets/images/logo/logo-06.jpg" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        
    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>
