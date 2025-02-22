<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>

<head>
    <meta charset="UTF-8">
    <title>Bienvenido a Max Power Gym</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('welcome/img/favicon-icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('welcome/img/favicon-icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('welcome/img/favicon-icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('welcome/img/favicon-icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('welcome/img/favicon-icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('welcome/img/favicon-icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('welcome/img/favicon-icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('welcome/img/favicon-icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('welcome/img/favicon-icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('welcome/img/favicon-icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('welcome/img/favicon-icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('welcome/img/favicon-icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('welcome/img/favicon-icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('welcome/img/favicon-icons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon-icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('welcome/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/responsive.css') }}">

    
    <!-- customizer plate css -->
    <link rel="stylesheet" href="{{ asset('welcome/customizer/css/style.css') }}" />
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('welcome/skins/color-files/css/color1.css') }}">

	

</head>

<body>


    <header class="header header-v1 has-over-section stricky dark-header ">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 pull-right">
                        <div class="top-info">
                            <div class="clearfix">
                                <ul class="contact-info pull-left">
                                    <li><span><i class="fc-icon ftc-icon-email"></i> Contact@Fitnesscare.com</span></li>
                                    <li><span><i class="fc-icon ftc-icon-phone-contact"></i> Troll Free: +1 212-212-2376</span></li>
                                </ul>
                                <ul class="social pull-right">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-wrapper ">
            <div class="container">
                <nav class="navigation clearfix">
                    <div id="menuzord" class="menuzord">
                        <a href="index.html" class="menuzord-brand">
                        <img src="{{ asset('imgmpg/logoletrasbn.png') }}" alt="Awesome Image" id="skin-logo-img" class="img-fluid" style="max-width: 22%;" />

                        </a>
                        <ul class="menuzord-menu">
                                                        
                            @if (Route::has('login'))
                                @auth
                            <li><a href="{{ url('/home') }}" class="flip-flop-btn"><span data-hover="Home">HOME</span></a></li>
                                @else
                            <li><a href="{{ route('login') }}" class="flip-flop-btn"><span data-hover="LOGIN">LOGIN</span></a></li>
                                @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="flip-flop-btn"><span data-hover="REGISTER">REGISTER</span></a></li>
                                @endif
                            @endauth
                            @endif
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- /.header-menu-wrapper -->
        <div class="search-box collapse" id="search-box">
            <div class="container">
                <form action="#">
                    <input type="text" placeholder="To Search Start Typing...">
                </form>
            </div>
        </div>
    </header>
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="random">
                    <img src="img/slides/1-1.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="center" data-hoffset="0" data-y="top" data-voffset="385" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                        Welcome to World’s Best
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1" data-x="center" data-hoffset="0" data-y="top" data-voffset="480" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
                        GYM & Fitness Theme
                    </div>
                    <div class="tp-caption tp-resizeme banner-caption-h1-large banner-caption-bg" data-x="center" data-hoffset="0" data-y="top" data-voffset="570" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2000">
                        <span><img src="img/slides/title-decor.png" alt=""> Fitness Care</span>
                    </div>
                </li>
                <li data-transition="random">
                    <img src="img/slides/1-2.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="385" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                        Awesome fitness Gym
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="480" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                        Html Template
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1-large banner-caption-bg" data-x="right" data-hoffset="15" data-y="top" data-voffset="570" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
                        <span><img src="img/slides/title-decor.png" alt=""> Don't Miss it</span>
                    </div>
                </li>
                <li data-transition="random" class="slider-3">
                    <img src="img/slides/1-3.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3">
                    <div class="tp-caption tp-resizeme banner-caption-h1 banner-caption-bg" data-x="left" data-hoffset="15" data-y="top" data-voffset="340" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="500">
                        <span>Get Maximum From Us</span>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="15" data-y="top" data-voffset="460" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-database"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Responsive Layout</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="325" data-y="top" data-voffset="460" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="800">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-calculator"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>BMI & IWC Calculator </p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="15" data-y="top" data-voffset="545" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="900">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-codepen"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Premium Plugins Free</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="325" data-y="top" data-voffset="545" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Active Contact Form</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="15" data-y="top" data-voffset="630" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="1100">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>MailChimp Support</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="325" data-y="top" data-voffset="630" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1200">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-calculator "></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Free customer Support</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme  " data-x="left" data-hoffset="15" data-y="top" data-voffset="742" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="2000">
                        <img src="img/slides/title-decor2.png" alt="Awesome Image" />
                    </div>
                    <div class="tp-caption tp-resizeme  " data-x="left" data-hoffset="200" data-y="top" data-voffset="730" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="#" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                    </div>
                    <div class="tp-caption tp-resizeme  " data-x="left" data-hoffset="400" data-y="top" data-voffset="730" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <a href="pricing.html" class="thm-btn arrow-push-in-right"><span>Buy Now <i class="fa fa-caret-right"></i></span></a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="slider-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slider-bottom-left">
                    <img src="img/resources/home-banner-1.png" id="skin-banner-1" alt="Awesome Image" />
                    <a href="pricing.html"><span>Join today</span></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slider-bottom-right">
                    <img src="img/resources/home-banner-2.png" id="skin-banner-2" alt="Awesome Image" />
                    <a href="contact.html" class="arrow-push-in-right"><span>Lets talk<i class="fa fa-caret-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="fitness-care-gym-area">
        <div class="container">
            <div class="section-title text-center">
                <h1><span>Benifits of Fitness Care GYM</span></h1>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item clearfix">
                        <div class="left-box clearfix"></div>
                        <div class="icon-holder">
                            <i class="fc-icon ftc-icon-dumbbell"></i>
                        </div>
                        <div class="right-box">
                            <h3>Instructional Videos</h3>
                            <p>Fitness Care trainers provide our printable calendars, thats give you the means to stay organized & motivated through each program. Cross of one day at a time and see how far you've come!</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item clearfix">
                        <div class="left-box clearfix"></div>
                        <div class="icon-holder">
                            <i class="fc-icon ftc-icon-calendar"></i>
                        </div>
                        <div class="right-box">
                            <h3>Training Calendars</h3>
                            <p>No training program is complete solution without a great meal plan. Our Fitness care trainers provide a shopping lists, recipes, and even a great examples of weekly meal plans so.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item clearfix">
                        <div class="left-box clearfix"></div>
                        <div class="icon-holder">
                            <i class="fc-icon ftc-icon-music-player"></i>
                        </div>
                        <div class="right-box">
                            <h3>Mobile App & Free WiFi</h3>
                            <p>Choose your perfect work-out plan and track your workout with the press of a mobile app button, when ever u want. Finess Care up-coming mobile apps will make fitness fit in palm hand.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item clearfix">
                        <div class="left-box clearfix"></div>
                        <div class="icon-holder">
                            <i class="fc-icon ftc-icon-standing"></i>
                        </div>
                        <div class="right-box">
                            <h3>Community Support</h3>
                            <p>Find friends and like-minded fitness buffs on BodySpace! With an army of supporters behind you, you'll never feel like you're training alone. Instructions to every exercise so you never walk.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <section class="support-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="img-holder">
                        <img alt="" src="img/support/img.png">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 support-content">
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <i class="fa fa-database"></i>
                                </div>
                                <div class="content">
                                    <h3>Responsive Layout</h3>
                                    <p>Visual Composer is a drag and drop frontend and backend page builder that will save you tons of time working on our site content</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <i class="fa fa-calculator"></i>
                                </div>
                                <div class="content">
                                    <h3>BMI & IWC Calculator</h3>
                                    <p>The Events Calendar is built to work out of the box configure the settings to match your needs and you'll be making events within less than 5 minutes.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <i class="fa fa-codepen"></i>
                                </div>
                                <div class="content">
                                    <h3>Premium Plugins Free</h3>
                                    <p>WooCommerce is built with developers in mind. It provides a strong, robust frame- work with which you can create a basic online store - or extend it as you need.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="content">
                                    <h3>Free Customer Support</h3>
                                    <p>Fitness Care is always up to date. We constantly listen to our customers and we add new features every week. We take good care of your business</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="workout-schedules-area">
        <div class="container">
            <div class="section-title">
                <h1><span>daily workout Schedules</span></h1>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img alt="" src="img/workout-schedules/1.jpg">
                            <div class="overlay">
                                <div class="icon-holder">
                                    <a href=""><i class="fa fa-share"></i></a>
                                </div>
                            </div>
                            <div class="date">
                                <h4>Day<br>01</h4>
                            </div>
                        </div>
                        <div class="content">
                            <h3> Chest & Triceps<span>( Body Building )</span></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Duration : 1 Hour</li>
                                <li><i class="fa fa-user"></i>Stepthen Adams</li>
                            </ul>
                            <div class="schedules-list">
                                <h4>Chest :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Incline dumbbell press - 4 sets of 8 to 10 reps. </li>
                                    <li><i class="fa fa-check"></i>Flatbench barbell press - 4 sets of 8 to 12 reps. </li>
                                    <li><i class="fa fa-check"></i>Incline dumbbell flies - 4 sets of 8 to 12 reps. </li>
                                    <li><i class="fa fa-check"></i>Cable crossovers - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <div class="schedules-list bottom">
                                <h4>Triceps :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Pushdowns - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Extensions using a rope - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <a href="single-workout.html" class="arrow-push-out-right"><span>View EXERCISE Plans <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img alt="" src="img/workout-schedules/2.jpg">
                            <div class="overlay">
                                <div class="icon-holder">
                                    <a href=""><i class="fa fa-share"></i></a>
                                </div>
                            </div>
                            <div class="date">
                                <h4>Day<br>02</h4>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Back and Biceps<span>( Athletics )</span></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Duration : 1 Hour</li>
                                <li><i class="fa fa-user"></i>Rebecca Garza</li>
                            </ul>
                            <div class="schedules-list">
                                <h4>Back :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Lat machine pulldowns - 4 sets of 8 to 10 reps.</li>
                                    <li><i class="fa fa-check"></i>Close grip pulldowns - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Seated cable rows - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Hyper-extensions - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <div class="schedules-list bottom">
                                <h4>Biceps :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Incline dumbbell curls - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Standing barbell curls - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <a href="single-workout.html" class="arrow-push-out-right"><span>View EXERCISE Plans <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item last-item-center">
                        <div class="img-holder">
                            <img alt="" src="img/workout-schedules/3.jpg">
                            <div class="overlay">
                                <div class="icon-holder">
                                    <a href=""><i class="fa fa-share"></i></a>
                                </div>
                            </div>
                            <div class="date">
                                <h4>Day<br>03</h4>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Shoulders, Biceps<span>( Fitness )</span></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Duration : 1 Hour</li>
                                <li><i class="fa fa-user"></i>Rebecca Garza</li>
                            </ul>
                            <div class="schedules-list">
                                <h4>Back :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Barbell press - 4 sets of 8 to 10 reps.</li>
                                    <li><i class="fa fa-check"></i>Standing side laterals - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Upright rows with barbel - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Hyper-extensions - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <div class="schedules-list bottom">
                                <h4>Biceps :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Incline dumbbell curls - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Standing barbell curls - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <a href="single-workout.html" class="arrow-push-out-right"><span>View EXERCISE Plans <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <section class="health-care-package-area">
        <div class="container">
            <div class="section-title">
                <h1><span>Our Health Care Packages</span></h1>
            </div>
            <div class="health-care-pack-carousel owl-theme owl-carousel">
                <div class="item">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="img/health-care-package/1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top">
                                <div class="icon-holder pull-left">
                                    <i class="fc-icon ftc-icon-weightlifter3"></i>
                                </div>
                                <div class="content-heading pull-left">
                                    <h3>Body Building <span>($230.99)</span></h3>
                                    <ul>
                                        <li><i class="fa fa-circle"></i>01 Year Training </li>
                                        <li><i class="fa fa-circle"></i>30 Min Session</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-list">
                                <h4>Package Includes:</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Fitness testing, Diet Plan</li>
                                    <li><i class="fa fa-check"></i>Weekly motivation and accountability</li>
                                    <li><i class="fa fa-check"></i>Ongoing nutrition support</li>
                                    <li><i class="fa fa-check"></i>Training Calendars</li>
                                    <li><i class="fa fa-check"></i>Free Wifi & Community Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a class="pull-left black arrow-push-in-right" href="single-package.html"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                            <a class="pull-right arrow-push-in-right" href="pricing.html"><span>Join Now <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-item">
                        <div class="img-holder offer">
                            <img src="img/health-care-package/2.jpg" alt="">
                            <div class="offer-text">
                                <h1>50% Offer</h1>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top">
                                <div class="icon-holder pull-left">
                                    <i class="fc-icon ftc-icon-running"></i>
                                </div>
                                <div class="content-heading pull-left">
                                    <h3>Fat Loss<span> (<del>$150</del>$75)</span></h3>
                                    <ul>
                                        <li><i class="fa fa-circle"></i>06 Month Training</li>
                                        <li><i class="fa fa-circle"></i>30 Min Session</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-list">
                                <h4>Package Includes:</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Fitness testing, Diet Plan</li>
                                    <li><i class="fa fa-check"></i>Weekly motivation and accountability</li>
                                    <li><i class="fa fa-check"></i>Ongoing nutrition support</li>
                                    <li><i class="fa fa-check"></i>Training Calendars</li>
                                    <li><i class="fa fa-check"></i>Free Wifi & Community Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a class="pull-left black arrow-push-in-right" href="single-package.html"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                            <a class="pull-right arrow-push-in-right" href="pricing.html"><span>Join Now <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-item last-item-center">
                        <div class="img-holder">
                            <img src="img/health-care-package/3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top">
                                <div class="icon-holder pull-left">
                                    <i class="fc-icon ftc-icon-yoga13"></i>
                                </div>
                                <div class="content-heading pull-left">
                                    <h3>Yoga & Streching<span> ($ 90)</span></h3>
                                    <ul>
                                        <li><i class="fa fa-circle"></i>01 Year Training</li>
                                        <li><i class="fa fa-circle"></i>30 Min Session</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-list">
                                <h4>Package Includes:</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Fitness testing, Diet Plan</li>
                                    <li><i class="fa fa-check"></i>Weekly motivation and accountability</li>
                                    <li><i class="fa fa-check"></i>Ongoing nutrition support</li>
                                    <li><i class="fa fa-check"></i>Training Calendars</li>
                                    <li><i class="fa fa-check"></i>Free Wifi & Community Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a class="pull-left black arrow-push-in-right" href="single-package.html"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                            <a class="pull-right arrow-push-in-right" href="pricing.html"><span>Join Now <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="img/health-care-package/4.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top">
                                <div class="icon-holder pull-left">
                                    <i class="fc-icon ftc-icon-weightlifter3"></i>
                                </div>
                                <div class="content-heading pull-left">
                                    <h3>Weight Lifting <span>($180.99)</span></h3>
                                    <ul>
                                        <li><i class="fa fa-circle"></i>01 Year Training </li>
                                        <li><i class="fa fa-circle"></i>30 Min Session</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-list">
                                <h4>Package Includes:</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Fitness testing, Diet Plan</li>
                                    <li><i class="fa fa-check"></i>Weekly motivation and accountability</li>
                                    <li><i class="fa fa-check"></i>Ongoing nutrition support</li>
                                    <li><i class="fa fa-check"></i>Training Calendars</li>
                                    <li><i class="fa fa-check"></i>Free Wifi & Community Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a class="pull-left black arrow-push-in-right" href="single-package.html"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                            <a class="pull-right arrow-push-in-right" href="pricing.html"><span>Join Now <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-item">
                        <div class="img-holder offer">
                            <img src="img/health-care-package/5.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top">
                                <div class="icon-holder pull-left">
                                    <i class="fc-icon ftc-icon-kickboxing"></i>
                                </div>
                                <div class="content-heading pull-left">
                                    <h3>Boxing Classes<span> ($380)</span></h3>
                                    <ul>
                                        <li><i class="fa fa-circle"></i>06 Month Training</li>
                                        <li><i class="fa fa-circle"></i>30 Min Session</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-list">
                                <h4>Package Includes:</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Fitness testing, Diet Plan</li>
                                    <li><i class="fa fa-check"></i>Weekly motivation and accountability</li>
                                    <li><i class="fa fa-check"></i>Ongoing nutrition support</li>
                                    <li><i class="fa fa-check"></i>Training Calendars</li>
                                    <li><i class="fa fa-check"></i>Free Wifi & Community Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a class="pull-left black arrow-push-in-right" href="single-package.html"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                            <a class="pull-right arrow-push-in-right" href="pricing.html"><span>Join Now <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-item last-item-center">
                        <div class="img-holder">
                            <img src="img/health-care-package/6.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top">
                                <div class="icon-holder pull-left">
                                    <i class="fc-icon ftc-icon-flexions"></i>
                                </div>
                                <div class="content-heading pull-left">
                                    <h3>Dance Classes<span> ($160)</span></h3>
                                    <ul>
                                        <li><i class="fa fa-circle"></i>01 Year Training</li>
                                        <li><i class="fa fa-circle"></i>30 Min Session</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-list">
                                <h4>Package Includes:</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Fitness testing, Diet Plan</li>
                                    <li><i class="fa fa-check"></i>Weekly motivation and accountability</li>
                                    <li><i class="fa fa-check"></i>Ongoing nutrition support</li>
                                    <li><i class="fa fa-check"></i>Training Calendars</li>
                                    <li><i class="fa fa-check"></i>Free Wifi & Community Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a class="pull-left black arrow-push-in-right" href="single-package.html"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                            <a class="pull-right arrow-push-in-right" href="pricing.html"><span>Join Now <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="walking-area">
        <div class="container">
            <div class="row">
                <div id="walking-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#walking-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#walking-carousel" data-slide-to="1"></li>
                        <li data-target="#walking-carousel" data-slide-to="2"></li>
                        <li data-target="#walking-carousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="col-lg-12">
                                <div class="single-item">
                                    <div class="walking">
                                        <h1>8-Week’s Weight Loss Challenge</h1>
                                        <ul>
                                            <li><i class="fa fa-calendar"></i>20 Feb</li>
                                            <li><i class="fa fa-clock-o"></i>16:00 - 20:00</li>
                                        </ul>
                                        <p>It would be perfect to do wit h your family, friends, co-workers anyone who wants to get and
                                            <br>lose some weight in a healthy way! I have started a lot of diets and programs.</p>
                                        <a href="single-workout.html" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a> &emsp; &emsp;
                                        <a href="pricing.html" class="thm-btn arrow-push-in-right"><span>Buy Now <i class="fa fa-caret-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12">
                                <div class="single-item">
                                    <div class="walking">
                                        <h1>10 Best Muscle-Building Biceps Exercises</h1>
                                        <ul>
                                            <li><i class="fa fa-calendar"></i>20 Feb</li>
                                            <li><i class="fa fa-clock-o"></i>16:00 - 20:00</li>
                                        </ul>
                                        <p>It would be perfect to do wit h your family, friends, co-workers anyone who wants to get and
                                            <br>lose some weight in a healthy way! I have started a lot of diets and programs.</p>
                                        <a href="single-workout.html" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a> &emsp; &emsp;
                                        <a href="pricing.html" class="thm-btn arrow-push-in-right"><span>Buy Now <i class="fa fa-caret-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12">
                                <div class="single-item">
                                    <div class="walking">
                                        <h1>9 Ways You're Sabotaging Your Fat Loss</h1>
                                        <ul>
                                            <li><i class="fa fa-calendar"></i>20 Feb</li>
                                            <li><i class="fa fa-clock-o"></i>16:00 - 20:00</li>
                                        </ul>
                                        <p>It would be perfect to do wit h your family, friends, co-workers anyone who wants to get and
                                            <br>lose some weight in a healthy way! I have started a lot of diets and programs.</p>
                                        <a href="single-workout.html" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a> &emsp; &emsp;
                                        <a href="pricing.html" class="thm-btn arrow-push-in-right"><span>Buy Now <i class="fa fa-caret-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12">
                                <div class="single-item">
                                    <div class="walking">
                                        <h1>Score More: Two Proven Muscle Recovery Tips</h1>
                                        <ul>
                                            <li><i class="fa fa-calendar"></i>20 Feb</li>
                                            <li><i class="fa fa-clock-o"></i>16:00 - 20:00</li>
                                        </ul>
                                        <p>It would be perfect to do wit h your family, friends, co-workers anyone who wants to get and
                                            <br>lose some weight in a healthy way! I have started a lot of diets and programs.</p>
                                        <a href="single-workout.html" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a> &emsp; &emsp;
                                        <a href="pricing.html" class="thm-btn arrow-push-in-right"><span>Buy Now <i class="fa fa-caret-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="experienced-trainer-area">
        <div class="container">
            <div class="section-title text-center">
                <h1><span>Our experienced trainers</span></h1>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="img/experienced-trainer/1.jpg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-envelope"></i>Support&Healtcare.com</li>
                                    <li><i class="fa fa-phone"></i>0422-2342134</li>
                                    <li><i class="fa fa-cog"></i>Practising : 4+ years</li>
                                </ul>
                                <div class="overlay-buttom">
                                    <div class="trainer-name">
                                        <div class="name pull-left">
                                            <h3>Stepthen Adams</h3>
                                            <span>Ceo & Fitness Instructor</span>
                                        </div>
                                        <div class="icon-holder pull-right">
                                            <i class="fc-icon ftc-icon-dumbbell"></i>
                                        </div>
                                    </div>
                                    <p>Fitness & Body builders spend years, even decades, perfecting the human form. Now, you may not want into your routine.</p>
                                    <div class="social-links">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="trainer-name">
                                <div class="name pull-left">
                                    <h3>Stepthen Adams</h3>
                                    <span>Ceo & Fitness Instructor</span>
                                </div>
                                <div class="icon-holder pull-right">
                                    <i class="fc-icon ftc-icon-dumbbell"></i>
                                </div>
                            </div>
                            <p>Fitness & Body builders spend years, even decades, perfecting the human form. Now, you may not want into your routine.</p>
                            <div class="social-links">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="img/experienced-trainer/2.jpg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-envelope"></i>Support&Healtcare.com</li>
                                    <li><i class="fa fa-phone"></i>0422-2342134</li>
                                    <li><i class="fa fa-cog"></i>Practising : 4+ years</li>
                                </ul>
                                <div class="overlay-buttom">
                                    <div class="trainer-name">
                                        <div class="name pull-left">
                                            <h3>Ashley Fletcher</h3>
                                            <span>Fitness & Yoga Instructor</span>
                                        </div>
                                        <div class="icon-holder pull-right">
                                            <i class="fc-icon ftc-icon-yoga13"></i>
                                        </div>
                                    </div>
                                    <p>Fitness & Yoga s, but that doesn’t mean you shouldn’t incorporate some bodybuilding principles and workouts into your routine.</p>
                                    <div class="social-links">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="trainer-name">
                                <div class="name pull-left">
                                    <h3>Ashley Fletcher</h3>
                                    <span>Fitness & Yoga Instructor</span>
                                </div>
                                <div class="icon-holder pull-right">
                                    <i class="fc-icon ftc-icon-yoga13"></i>
                                </div>
                            </div>
                            <p>Fitness & Yoga s, but that doesn’t mean you shouldn’t incorporate some bodybuilding principles and workouts into your routine.</p>
                            <div class="social-links">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="img/experienced-trainer/3.jpg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-envelope"></i>Support&Healtcare.com</li>
                                    <li><i class="fa fa-phone"></i>0422-2342134</li>
                                    <li><i class="fa fa-cog"></i>Practising : 4+ years</li>
                                </ul>
                                <div class="overlay-buttom">
                                    <div class="trainer-name">
                                        <div class="name pull-left">
                                            <h3>Ben Johnson</h3>
                                            <span>Pro Body Builder</span>
                                        </div>
                                        <div class="icon-holder pull-right">
                                            <i class="fc-icon ftc-icon-musculous"></i>
                                        </div>
                                    </div>
                                    <p>Fitness & Body builders spend years, even decades, perfecting the human form. Now, you may not want into your routine.</p>
                                    <div class="social-links">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="trainer-name">
                                <div class="name pull-left">
                                    <h3>Ben Johnson</h3>
                                    <span>Pro Body Builder</span>
                                </div>
                                <div class="icon-holder pull-right">
                                    <i class="fc-icon ftc-icon-musculous"></i>
                                </div>
                            </div>
                            <p>Fitness & Body builders spend years, even decades, perfecting the human form. Now, you may not want into your routine.</p>
                            <div class="social-links">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="img/experienced-trainer/4.jpg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-envelope"></i>Support&Healtcare.com</li>
                                    <li><i class="fa fa-phone"></i>0422-2342134</li>
                                    <li><i class="fa fa-cog"></i>Practising : 4+ years</li>
                                </ul>
                                <div class="overlay-buttom">
                                    <div class="trainer-name">
                                        <div class="name pull-left">
                                            <h3>Rebecca Garza</h3>
                                            <span>Fitness & Body Builder</span>
                                        </div>
                                        <div class="icon-holder pull-right">
                                            <i class="fc-icon ftc-icon-weightlifter3"></i>
                                        </div>
                                    </div>
                                    <p>Fitness & Body builders spend years, even decades, perfecting the human form. Now, you may not want into your routine.</p>
                                    <div class="social-links">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="trainer-name">
                                <div class="name pull-left">
                                    <h3>Rebecca Garza</h3>
                                    <span>Fitness & Body Builder</span>
                                </div>
                                <div class="icon-holder pull-right">
                                    <i class="fc-icon ftc-icon-weightlifter3"></i>
                                </div>
                            </div>
                            <p>Fitness & Body builders spend years, even decades, perfecting the human form. Now, you may not want into your routine.</p>
                            <div class="social-links">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <section class="daily-training-workout-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-4 col-sm-3 col-xs-12">
                    <div class="img-holder">
                        <img src="img/resources/i-phone.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-9 col-xs-12">
                    <div class="content">
                        <h1>Plan your Daily training & workouts </h1>
                        <p>It would be perfect to do with your family, friends, co-workers anyone who I have started a lot of diets and programs.</p>
                        <ul>
                            <li><i class="fa fa-check"></i>Fitness App That All Love</li>
                            <li><i class="fa fa-check"></i>Control Changes for Best Result</li>
                            <li><i class="fa fa-check"></i>Get your Dose of Fitness Now</li>
                        </ul>
                        <div class="google-play-app-store">
                            <ul>
                                <li>
                                    <a href=""><img src="img/resources/google-play.png" alt=""></a>
                                </li>
                                <li>
                                    <a href=""><img src="img/resources/app-store.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-testimonial-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h1><span>Satisfied Customers Say</span></h1>
                    </div>
                    <div class="testimonial-carousel-wrapper owl-carousel owl-theme">
                        <div class="item">
                            <div class="single-testimonial-carousel">
                                <div class="qoute-icon-box">
                                    <img src="img/resources/qoute-icon.png" alt="Awesome Image" />
                                </div>
                                <div class="testimonial-text-box">
                                    <h3>Practice Puts Brains in Your Muscles</h3>
                                    <p>Fitness Care Gym isn’t anything like a regular chain gym. The class based sessions are challenging, innovative, and fun led by highly talented trainers. The gym also has amazing equipment that you don’t find in most gyms like Kettlebells, battle ropes and sledges. </p>
                                    <span class="name">Louis Williams</span>
                                    <div class="review-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial-carousel">
                                <div class="qoute-icon-box">
                                    <img src="img/resources/qoute-icon.png" alt="Awesome Image" />
                                </div>
                                <div class="testimonial-text-box">
                                    <h3>Practice Puts Brains in Your Muscles</h3>
                                    <p>Fitness Care Gym isn’t anything like a regular chain gym. The class based sessions are challenging, innovative, and fun led by highly talented trainers. The gym also has amazing equipment that you don’t find in most gyms like Kettlebells, battle ropes and sledges. </p>
                                    <span class="name">Louis Williams</span>
                                    <div class="review-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial-carousel">
                                <div class="qoute-icon-box">
                                    <img src="img/resources/qoute-icon.png" alt="Awesome Image" />
                                </div>
                                <div class="testimonial-text-box">
                                    <h3>Practice Puts Brains in Your Muscles</h3>
                                    <p>Fitness Care Gym isn’t anything like a regular chain gym. The class based sessions are challenging, innovative, and fun led by highly talented trainers. The gym also has amazing equipment that you don’t find in most gyms like Kettlebells, battle ropes and sledges. </p>
                                    <span class="name">Louis Williams</span>
                                    <div class="review-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title">
                        <h1><span>FITNESS RELATED FAQ'S</span></h1>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-accrodion">
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4 class="clearfix"><span>Make a shift to avoid diabetes.</span></h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Over time, high blood sugar damages arteries and puts you at risk for heart disease. Your doctor should test your blood sugar if you are 45 or older, if you are pregnant, or if you're overweight and have other risk factors for diabetes.</p>
                            </div>
                        </div>
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4 class="clearfix"><span>Have more fruit and less fruit juice.</span></h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Over time, high blood sugar damages arteries and puts you at risk for heart disease. Your doctor should test your blood sugar if you are 45 or older, if you are pregnant, or if you're overweight and have other risk factors for diabetes.</p>
                            </div>
                        </div>
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4 class="clearfix"><span>Ditch the cigarettes, real and electronic.</span></h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Over time, high blood sugar damages arteries and puts you at risk for heart disease. Your doctor should test your blood sugar if you are 45 or older, if you are pregnant, or if you're overweight and have other risk factors for diabetes.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4 class="clearfix"><span> Throw your heart a birthday party!</span></h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Over time, high blood sugar damages arteries and puts you at risk for heart disease. Your doctor should test your blood sugar if you are 45 or older, if you are pregnant, or if you're overweight and have other risk factors for diabetes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12 hidden-sm">
                    <div class="img-holder">
                        <img src="img/subscribe/trainers.png" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="subscribe-form">
                        <h1 class="title">Subscribe us for Offers & Health Tips</h1>
                        <form class="subscribe mailchimp-form" action="inc/mailchimp/subscribe.php">
                            <input class="name" type="text" name="fname" placeholder="Your Name">
                            <input class="email" type="text" name="email" placeholder="Your Email">
                            <button class="thm-btn arrow-push-out-right" type="submit"><span>Subscribe  Now <i class="fa fa-caret-right"></i></span></button>
                        </form>
                        <h1>Give us a Call  : <span>+1 212-212-2376</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start footer area-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img alt="Awesome image" src="img/footer/logo.png"></a>
                        </div>
                        <div class="caption-text">
                            <p>Your Transformation is our passion. We are your personal trainers, your nutritionist, your supplement expert, your lifting partner, your support group,. We Provide the technology, tools and products you need to burn fat, build muscle, and become your best self.</p>
                            <a class="thm-btn arrow-push-out-right" href=""><span>Purchase  Now <i class="fa fa-caret-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <h3 class="title">Quick Links</h3>
                        <ul class="quick-links left">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="blog-v1.html">News & Tips</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="package-v1.html">Our Packages</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="single-shop.html">Shop</a></li>
                        </ul>
                        <ul class="quick-links">
                            <li><a href="single-package.html">Yoga Classes</a></li>
                            <li><a href="single-package.html">Fitness Classes</a></li>
                            <li><a href="single-package.html">Body Building</a></li>
                            <li><a href="single-package.html">Dance Classes</a></li>
                            <li><a href="single-package.html">Supplements</a></li>
                            <li><a href="single-package.html">Get offers</a></li>
                            <li><a href="single-package.html">Customer Care</a></li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <h3 class="title">Recent News</h3>
                        <ul class="recent-news">
                            <li>
                                <div class="box">
                                    <div class="overlay">
                                        <img alt="Awesome image" src="img/footer/recent-news/1.jpg">
                                        <div class="content-box">
                                            <div class="icon-holder">
                                                <i class="fc-icon ftc-icon-dumbbell"></i>
                                            </div>
                                            <div class="text">
                                                <p>Workout News</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="blog-details-sidebar.html">
                                        <p>7 Best shoulder exer-
                                            <br>cised you’re not doing</p>
                                    </a>
                                    <span>February 07, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="overlay">
                                        <img alt="Awesome image" src="img/footer/recent-news/2.jpg">
                                        <div class="content-box">
                                            <div class="icon-holder">
                                                <i class="fc-icon ftc-icon-dumbbell"></i>
                                            </div>
                                            <div class="text">
                                                <p>Workout News</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="blog-details-sidebar.html">
                                        <p>8 Things You Should
                                            <br> Never Do On Chest Day</p>
                                    </a>
                                    <span>February 12, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="overlay">
                                        <img alt="Awesome image" src="img/footer/recent-news/3.jpg">
                                        <div class="content-box">
                                            <div class="icon-holder">
                                                <i class="fc-icon ftc-icon-dumbbell"></i>
                                            </div>
                                            <div class="text">
                                                <p>Workout News</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="blog-details-sidebar.html">
                                        <p>Louis Williams Instinc-
                                            <br>tive Back Workout</p>
                                    </a>
                                    <span>February 17, 2016</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <h3 class="title">Contact us</h3>
                        <ul class="contact">
                            <li>
                                <div class="icon-holder">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="text">
                                    <p>14 Tottenham Road, N1 4EP
                                        <br> London, United Kingdom</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="text">
                                    <p>Troll Free: +1 212-212-2376</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p>FitnessCare@gmail.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="text">
                                    <p>Week Days : 05:00 – 22:00
                                        <br>Saturday : 08:00 – 18:00
                                        <br>Sunday : 08:00 – 12:00</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End footer area-->
    <!--Start footer bottom area-->
    <section class="footer-bottom-area">
        <div class="container ">
            <div class="footer-bottom">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="copy-right">
                            <p>© 2016 Fitness Care Theme Designed by Steelthemes</p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="social-links">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.footer-bottom -->
        </div>
    </section>
    <!--End footer bottom area-->
    "{{ asset('css/bootstrap.min.css') }}"
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <!-- jQuery js -->
    <script src="{{ asset('welcome/assets/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('welcome/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jQuery ui js -->
    <script src="{{ asset('welcome/assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('welcome/assets/owl.carousel-2/owl.carousel.min.js') }}"></script>
    <!-- jQuery validation -->
    <script src="{{ asset('welcome/assets/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <!-- gmap.js helper -->
    <script src="{{ asset('welcome/http://maps.google.com/maps/api/js') }}"></script>
    <!-- gmap.js -->
    <script src="{{ asset('welcome/assets/gmap.js') }}"></script>
    <!-- mixit up -->
    <script src="{{ asset('welcome/assets/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/jquery.fitvids.js') }}"></script>
    <!-- revolution slider js -->
    <script src="{{ asset('welcome/assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <!-- fancy box -->
    <script src="{{ asset('welcome/assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('welcome/assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('welcome/assets/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('welcome/assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('welcome/assets/jquery-appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('welcome/assets/jquery.countTo.js') }}"></script>
    <script src="{{ asset('welcome/assets/menuzord/js/menuzord.js') }}"></script>
    <script src="{{ asset('welcome/assets/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/jquery.isotope.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('welcome/assets/waypoint.js') }}"></script>

    <!-- theme custom js  -->
    <script src="{{ asset('welcome/js/default-map.js') }}"></script>
    <script src="{{ asset('welcome/js/custom.js') }}"></script>

    <script type="text/javascript" src="{{ asset('welcome/https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js') }}"></script>
    <script src="{{ asset('welcome/customizer/plugins/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('welcome/customizer/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('welcome/customizer/js/customizer.js') }}"></script>

</body>

</html>
