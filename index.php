<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Tag-->
    <title>CBS &#8214; A Container Booking System</title>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="img/images1.png">

    <!-- Google Font API -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- Hover  Css -->
    <link rel="stylesheet" href="css/hover.min.css">

    <!-- Mobile Nav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate Min -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="css/slick.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Sufia Stylesheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <link rel="stylesheet" href="css/skin/blue.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="#" id="colors">
</head>
<body class="js">

<!-- Preloader -->
<div class="loader">
    <div class="loader-inner">
        <div class="k-loader k-circle"></div>
    </div>
</div>
<!-- End Preloader -->


<!-- Start Header -->
<header class="header clearfix" id="header">
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <!-- Logo -->
                    <div class="Mylogo1">
                        <a class="index.html" href="index.php">
                            <img src="img/Mylogo1.png" alt="#">
                        </a>
                    </div>
                    <!--/End Logo -->

                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>
                    <!--/ End Mobile Menu -->
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <!-- Cart Bar -->
                        <ul class="cart-search-bar">
                            <li><a href="#" class="fa fa-bars"></a></li>
                        </ul>
                        <!--/ End Cart Bar -->

                        <!-- Side Menu -->
                        <div class="side-menu">
                            <ul class="nav navbar-nav">
                                <li class="remove"><a><i class="fa fa-remove"></i></a></li>

                                <?php
                                session_start();
                                if (isset($_SESSION['login_user_email'])) {
                                    ?>
                                    <li class="current"><a href="#header">Dashbord</a></li>
                                    <li><a href="Dashboard/index.php">My Account</a></li>
                                    <?php
                                }else{
                                ?>

                                <li class="current"><a href="#header">Log in</a></li>
                                <li><a href="Dashboard/login.php">Log in</a></li>
                                <!-- <li><a href="Dashboard/signup.php">Sign up</a></li> -->
                                <?php
                                }
                                ?>


                            </ul>
                        </div>
                        <!--/ End Side Menu -->

                        <!-- Navigation -->
                        <nav class="navbar">
                            <div class="collapse navbar-collapse">
                                <ul class="nav menu navbar-nav">
                                    <li class="current"><a href="#header">Welcome</a></li>
                                    <li><a href="#features">Our Mission</a></li>
                                    <li><a href="#team">Our Team</a></li>
                                   <!-- <li><a href="#news"> What's New</a>-->
                                    </li>
                                    <li><a href="#contact">Feedback</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!--/ End Navigation -->
                    </div>
                    <!--/ End Main Menu -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header-->

<!-- Start Slider -->
<section class="sufia-slider clearfix">
    <div class="slider-main">
        <!-- Slider Item -->
        <div class="single-slider" style="background-image:url(img/Container2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome-text">
                            <h1><span>Welcome to</span> Container Booking System </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Slider Item -->
        <!-- Slider Item -->
        
        <!--/ End Slider Item -->
         <!-- Slider Item -->
         <div class="single-slider" style="background-image:url(img/Container.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome-text center">
                            <h1><span>Best and Reliable</span>Services In South-East Asia </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Slider Item -->
        <!-- Slider Item -->
        
        <!--/ End Slider Item -->
       
    </div>
</section>
<!--/ End Slider -->

<!-- Start Features -->
<section id="features" class="features section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h2><i class="fa fa-flash"></i> Our Mission</h2>  <br><br>
                    <h3><i class="fa fa-bookmark-o"></i> Provide a platform for Easy customer registration</h3>
                    <br><br>
                    <h3><i class="fa fa-bookmark-o"></i> Allow Agents to create bookings and provide useful feedbacks</h3>
                    <br><br>
                    <h3><i class="fa fa-bookmark-o"></i> Users can view updated routes, prices and timings</h3> 
                    <br><br>
                    <h3><i class="fa fa-bookmark-o"></i>  Pre-deployment, deployment and re-deplpoyment </h3>
                    <br><br>
                </div>
            </div>
        </div>

   <!--/ <div class="row"
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                <!-- Single features -->
                <!--/<div class="single-features">
                    <i class="fa fa-adjust"></i>
                    <h4>Unlimited Colors</h4>
                    <p>Lorem ipsum dolor amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore.</p>
                </div>
                <!--/ End features -->
           <!--/ </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                <!-- Single features -->
               <!--/ <div class="single-features">
                    <i class="fa fa-bars"></i>
                    <h4>Easy To Use</h4>
                    <p>Lorem ipsum dolor amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore.</p>
                </div>
                <!--/ End features -->
           <!--/ </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                <!-- Single features -->
               <!--/ <div class="single-features">
                    <i class="fa fa-edit"></i>
                    <h4>Easy to customize</h4>
                    <p>Lorem ipsum dolor amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore.</p>
                </div>
                <!--/ End features -->
           <!--/ </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                <!-- Single features -->
             <!--/   <div class="single-features">
                    <i class="fa fa-plus"></i>
                    <h4>Pixel Perfect</h4>
                    <p>Lorem ipsum dolor amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore.</p>
                </div>
                <!--/ End features -->
          <!--/  </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                <!-- Single features -->
              <!--/  <div class="single-features">
                    <i class="fa fa-code"></i>
                    <h4>Well Code</h4>
                    <p>Lorem ipsum dolor amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore.</p>
                </div>
                <!--/ End features -->
           <!--/ </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1s">
                <!-- Single features -->
              <!--/  <div class="single-features">
                    <i class="fa fa-random"></i>
                    <h4>Fully Editable</h4>
                    <p>Lorem ipsum dolor amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore.</p>
                </div>
                <!--/ End features -->
         <!--/   </div>
        </div>
    </div>
</section>-->
<!--/ End Features -->

<!-- Start Count Down -->
<section id="countdown" class="count-down section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                <!-- Single Count -->
                <div class="single-count">
                    <i class="fa fa-trophy"></i>
                    <h2 class="count">7</h2>
                    <h2>Select a suitable route</h2>
                </div>
                <!--/ End Single Count -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.5s">
                <!-- Single Count -->
                <div class="single-count">
                    <i class="fa fa-check"></i>
                    <h2 class="count">1000</h2>
                    <h2>Create booking</h2>
                </div>
                <!--/ End Single Count -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.7s">
                <!-- Single Count -->
                <div class="single-count">
                    <i class="fa fa-bell-o"></i>
                    <h2 class="count">1,000</h2>
                    <h2> Get booking confirmation</h2>
                </div>
                <!--/ End Single Count -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.9s">
                <!-- Single Count -->
                <div class="single-count">
                    <i class="fa fa-money"></i>
                    <h2 class="count">2,000</h2>
                    <h2>Payments<h2>
                </div>
                <!--/ End Single Count -->
            </div>
        </div>
    </div>
</section>
<!--/ End Count Down -->

<!-- Start Team -->
<section id="team" class="team section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h2>Our Team</h2>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="team-head">
                        <img src="img/team-1.jpg" alt="#">
                        <div class="hover-team">
                            <p class="team-text">"I CONTROL, HELP US IMPROVE WITH YOUR FEDBACK"</p>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-name">
                        <h4>Zain Fida</h4>
                        <p>ADMINISTRATOR</p>
                    </div>
                </div>
                <!--/ End Team -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="team-head">
                        <img src="img/team-3.jpg" alt="#">
                        <div class="hover-team">
                            <p class="team-text"> "CONTACT US, SOONER WE SHALL BOOK"</p>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-name">
                        <h4>Ali Baba</h4>
                        <p>AGENT</p>
                    </div>
                </div>
                <!--/ End Team -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12  wow fadeInUp" data-wow-delay="0.7s">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="team-head">
                        <img src="img/team-2.jpg" alt="#">
                        <div class="hover-team">
                            <p class="team-text">  "VALUED AGENTS..WE GUIDE YOU!" </p>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-name">
                        <h4>Mrs Smith</h4>
                        <p>SUPPORT STAFF</p>
                    </div>
                </div>
                <!--/ End Team -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="team-head">
                        <img src="img/team-4.jpg" alt="#">
                        <div class="hover-team">
                            <p>"VALUED CUSTOMERS, ALWAYS HERE TO RESOLVE YOUR ISSUES"</p>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-name">
                        <h4>Ms Nur </h4>
                        <p>CUSTOMER SERVICE</p>
                    </div>
                </div>
                <!--/ End Team -->
            </div>
        </div>
    </div>
</section>
<!--/ End Team -->

<!-- Contact Us -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h2>FEEDBACK</h2>
                    <p>First, Thankyou for choosing to be a part with Container Booking System (CBS). We truly appreciate your efforts. We are commited to your satisfaction with our services, your CBS bookings and Transactions. As such, we need and very much value your feedback as this is our opportunity to listen! All feedbacks are strictly confidential. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-5 col-sm-6 col-xs-12 wow fadeInUp col-sm-offset-4">
                <form class="form" method="post" action="#" id="SendFeedback">
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Full Name" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Enter Your Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" placeholder="Subject" required="required">
                    </div>
                    <div class="form-group">
                        <textarea id="message" rows="6" placeholder="Type Your Message Here"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
                    </div>
                </form>
            </div>
            <!--/ Contact Form -->
        </div>
    </div>
</section>
<!--/ End Clients Us -->


<!-- Footer Top -->
<footer class="footer wow fadeInUp">
    <!-- Footer Bottom -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <!-- Copyright -->
                    <p>&#9400; Copyright ZAIN 2017 | All Rights Reserved</p>
                    <!--/ End Copyright -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
<!--/ End footer Top -->

<!-- Jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- Colors -->
<script type="text/javascript" src="js/colors.js"></script>

<!-- Modernizr JS -->
<script type="text/javascript" src="js/modernizr.min.js"></script>

<!-- Appear Js -->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- Scrool Up -->
<script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>

<!-- Typed Js -->
<script type="text/javascript" src="js/typed.min.js"></script>

<!-- Slick Nav -->
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

<!-- Onepage Nav -->
<script type="text/javascript" src="js/jquery.nav.js"></script>

<!-- Yt Player -->
<script type="text/javascript" src="js/ytplayer.min.js"></script>

<!-- Magnific Popup -->
<script type="text/javascript" src="js/magnific-popup.min.js"></script>

<!-- Wow JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- Counter JS -->
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>

<!-- Isotop JS -->
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<!-- Masonry JS -->
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>

<!-- Slick Slider -->
<script type="text/javascript" src="js/slick.min.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!--&lt;!&ndash; Google Map JS &ndash;&gt;-->
<!--<script type="text/javascript" src="js/gmap.js"></script>-->

<!-- Activate JS -->
<script type="text/javascript" src="js/active.js"></script>
<script type="text/javascript" src="js/feedback.js"></script>

</body>

</html>
