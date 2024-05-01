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
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Services</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                            @guest
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('login') }}">Login</a>
            
                            <li class="nav-item">
                             <a class="nav-link " href="{{ route('registration') }}">Register</a>
              
                         @else
                         <span class="nav-item"><p class="nav-link">{{ auth()->user()->name }}</p></span>
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
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Services</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                    @guest
                         <li class="nav-item"><a class="nav-link " href="{{ route('login') }}">Login</a></li>
                         <li class="nav-item"><a class="nav-link " href="{{ route('registration') }}">Register</a>
                         @else
                            <span>{{ auth()->user()->name }}</span>
                         <li class="nav-item"> <a class="nav-link " href="{{ route('logout') }}">Logout</a> </li>
                         @endguest
                    </ul>
                </div>
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

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="layout"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a>Web Development</a></h4>
                                    <p class="description">I optimizie the user experience using HTML, JavaScript, Php, and CSS to bring concepts to life. I Develop and maintain the user interface by following SEO best practices.                                        .</p>
                                    <!-- <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <a class="over-link"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="grid"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a>UI Design</a></h4>
                                    <p class="description"> I use to UI Designing and i quickly understand and translate business objectives into user-centered designs that also accomplish business objectives.</p>
                                    <!-- <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <a class="over-link"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="aperture"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a>Logo & Icon Design</a></h4>
                                    <p class="description">I am specialized in letterate types of logo design and branding and can offer you a variety of design techniques to match your business. .</p>
                                    <!-- <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <a class="over-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit My Services and keep your feedback</span>
                            <h2 class="title">Services</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenterr">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-01.jpg"  style="height:156px;" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Designing of Website</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                10</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">I Designed a UI Design of Clients Ecommerce Website<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                                        <!-- Start Single Portfolio -->
                                        <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                                            <div class="rn-portfolio" data-toggle="modal" data-target="#ee">
                                                <div class="inner">
                                                    <div class="thumbnail" style="overflow: auto; height: 200px;">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/portfolio/project-2.jpg"  style="height:156px;" alt="Personal Portfolio Images">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <div class="category-info">
                                                            <div class="category-list">
                                                                <a href="javascript:void(0)">UI Design of Website</a>
                                                            </div>
                                                            <div class="meta">
                                                                <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                                    5</span>
                                                            </div>
                                                        </div>
                                                        <h4 class="title"><a href="javascript:void(0)">Design of Store Landing Page <i class="feather-arrow-up-right"></i></a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCente">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-02.jpg"  style="height:156px;"  alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Website Logo & Favicon</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                8</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Design a Website Logo & Favicon<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->

        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">+Few Months of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li> -->
                        </ul>
                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2021 - Present</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Bachelor of Science in Info Tech</h4>
                                                                    <span>Aces Tagum College Inc. (2021 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>2.5/5</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> ICT- Mobile App & Web Dev</h4>
                                                                    <span>STI College Tagum (2019 - 2021)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>3/5</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2023 - Present</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>UI DESIGNER</h4>
                                                                    <span>Virtual Master (2023 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Gather and evaluate user requirements in collaboration and illustrate design ideas using storyboards, process flows and sitemaps. Design graphic user interface elements, like menus, tabs and widgets. Build page navigation buttons and search fields.Develop UI mockups and prototypes that clearly illustrate how sites function and look like. Create original graphic designs (e.g. images, sketches and tables). Prepare and present rough drafts to internal teams and key stakeholders. Identify and troubleshoot UX problems (e.g. responsiveness).</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Shopify Store Builder</h4>
                                                                    <span>Ecom VA (2024 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">I was responsible for building Ecommerce store for clients needs. This can include everything from graphics designing. I work closely with interaction of my head to create a fantastic and good website that is aesthetically pleasing, user-friendly, and efficient. My job was to assist clients with developing pleasing and winner products towards the app or website. Think things like how icons are designed, how they’re arranged on the page, and how they relate to each other. Design elements such as font choice, color scheme, graphics, buttons, and menu styling are all elements of interface design.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Shopify Product Listing</h4>
                                                                    <span> Ecom VA (2024 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">As a Shopify Product Listing Specialist, your responsibilities include accurately entering product data, optimizing images, and organizing products into categories. You'll also monitor inventory levels, address customer inquiries, and analyze performance metrics for improvement. Your role is crucial for maintaining e-commerce efficiency and success.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHOTOSHOP</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 40%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">40%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">FIGMA</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 65%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">65%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE ILLUSTRATOR</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">DESIGN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">7 0%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Coding Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 30%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">30%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Php</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2021 - Present</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Bachelor of Science in Info Tech</h4>
                                                                    <span>Aces Tagum College Inc. (2021 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>2.5/5</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>ICT- Mobile App & Web Dev</h4>
                                                                    <span>STI College Tagum (2019 - 2021)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>3/5</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2023 - Present</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>UI DESIGNER</h4>
                                                                    <span>Virtual Master (2023 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Gather and evaluate user requirements in collaboration and illustrate design ideas using storyboards, process flows and sitemaps. Design graphic user interface elements, like menus, tabs and widgets. Build page navigation buttons and search fields.Develop UI mockups and prototypes that clearly illustrate how sites function and look like. Create original graphic designs (e.g. images, sketches and tables). Prepare and present rough drafts to internal teams and key stakeholders. Identify and troubleshoot UX problems (e.g. responsiveness).</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Shopify Store Builder</h4>
                                                                    <span>Ecom VA (2024 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">I was responsible for building Ecommerce store for clients needs. This can include everything from graphics designing. I work closely with interaction of my head to create a fantastic and good website that is aesthetically pleasing, user-friendly, and efficient. My job was to assist clients with developing pleasing and winner products towards the app or website. Think things like how icons are designed, how they’re arranged on the page, and how they relate to each other. Design elements such as font choice, color scheme, graphics, buttons, and menu styling are all elements of interface design.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Shopify Product Listing</h4>
                                                                    <span>Ecom VA (2024 - Present)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">As a Shopify Product Listing Specialist, your responsibilities include accurately entering product data, optimizing images, and organizing products into categories. You'll also monitor inventory levels, address customer inquiries, and analyze performance metrics for improvement. Your role is crucial for maintaining e-commerce efficiency and success.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
        <!-- End Resume Area -->

        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/contact1.png" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Almuadan Yasin</h4>
                                <span>Shopify VA</span>
                            </div>
                            <div class="description">
                                <p>I am available for freelance work. Connect with me via and call in to my account.
                                </p>
                                <span class="phone">Phone: <a href="#">0907-877-4565</a></span>
                                <span class="mail">Email: <a href="almuadanyasin@gmail.com">almuadanyasin@gmail.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    <a href="https://www.facebook.com/almuadan.0821"><i data-feather="facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/almuadan-yasin-a7456529a/"><i data-feather="linkedin"></i></a>
                                    <a href="https://www.instagram.com/almuadan.0821/?igsh=b3lvbWg0OXloZTFz&fbclid=IwAR2w2PigVNHuN_-JzkvS7SOWYyyt_wPWrTjT8AqjDkCQMizHd00XdhJJr-o"><i data-feather="instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="mail.php">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->

   <!-- Modal Portfolio Body area Start -->
   <div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="portfolio-popup-thumbnail">
                            <div class="image">
                                <img class="w-100" src="assets/images/portfolio/portfolio-01.jpg" alt="slide">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="text-content">
                            <h3>
                                <span>Featured - Design</span> Ecommerce Design for Clients Website.
                            </h3>
                            <p class="mb--30">Designed ecommerce website using shopify templates</p>
                            <div class="button-group mt--20">
                                <a href="#" class="rn-btn thumbs-icon">
                                    <span>LIKE THIS</span>
                                    <i data-feather="thumbs-up"></i>
                                </a>
                                <a href="https://outdoorvana.com/" class="rn-btn">
                                    <span>VIEW PROJECT</span>
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </div>

                        </div>
                        <!-- End of .text-content -->
                    </div>
                </div>
                <!-- End of .row Body-->
            </div>
        </div>
    </div>
</div>
<!-- End Modal Portfolio area -->
        
        <!-- Modal Portfolio Body area Start -->
   <div class="modal fade" id="ee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="portfolio-popup-thumbnail">
                            <div class="image">
                                <img class="w-100" src="assets/images/portfolio/project-2.jpg" alt="slide">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="text-content">
                            <h3>
                                <span>Featured - Design</span> UI Design for Client
                            </h3>
                            <p class="mb--30">Designed Ecommerce Website landing page using figma and for development used shopify templates.</p>
                            <div class="button-group mt--20">
                                <a href="#" class="rn-btn thumbs-icon">
                                    <span>LIKE THIS</span>
                                    <i data-feather="thumbs-up"></i>
                                </a>
                                <a href="https://mancovedepot.com/" class="rn-btn">
                                    <span>VIEW PROJECT</span>
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </div>

                        </div>
                        <!-- End of .text-content -->
                    </div>
                </div>
                <!-- End of .row Body-->
            </div>
        </div>
    </div>
</div>
<!-- End Modal Portfolio area -->


 <!-- Modal Portfolio Body area Start -->
 <div class="modal fade" id="exampleModalCente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="portfolio-popup-thumbnail">
                            <div class="image">
                                <img class="w-100" src="assets/images/portfolio/portfolio-02.jpg" alt="slide">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="text-content">
                            <h3>
                                <span>Featured - Design</span> Logo Designing
                            </h3>
                            <p class="mb--30">Designed website logo and favicon using figma and illustrator</p>
                            <div class="button-group mt--20">
                                <a href="#" class="rn-btn thumbs-icon">
                                    <span>LIKE THIS</span>
                                    <i data-feather="thumbs-up"></i>
                                </a>
                                <a href="https://ebikemove.myshopify.com/" class="rn-btn">
                                    <span>VIEW PROJECT</span>
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </div>

                        </div>
                        <!-- End of .text-content -->
                    </div>
                </div>
                <!-- End of .row Body-->
            </div>
        </div>
    </div>
</div>
<!-- End Modal Portfolio area -->

        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

    </main>

    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">

                        <div class="logo">
                            <a href="/">
                                <span>AlA</span>
                            </a>
                        </div>

                        <p class="description mt--30">© AlA. All rights reserved by <a target="_blank"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

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
