<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Training - Shadai Home Health</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/owl.carousel.min.css' )}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/themify-icons.css' )}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/flaticon.css' )}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/magnific-popup.css' )}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/slick.css' )}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset( 'public/css/style.css' )}}">
    <link rel="stylesheet" href="{{ asset( 'css/main.css' )}}">


    <!-- <link href="{{ asset( 'vendor/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet"> -->
  <link href="{{ asset( 'vendor/bootstrap-icons/bootstrap-icons.css' )}}" rel="stylesheet">
  <link href="{{ asset( 'vendor/aos/aos.css' )}}" rel="stylesheet">
  <link href="{{ asset( 'vendor/glightbox/css/glightbox.min.css' )}}" rel="stylesheet">
  <link href="{{ asset( 'vendor/swiper/swiper-bundle.min.css' )}}" rel="stylesheet">
    <!-- <link href="{{ asset( 'bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet"> -->
  <link href="{{ asset( 'bootstrap-icons/bootstrap-icons.css' )}}" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset( 'img/logo.png' )}}" style="width: 100px; height: 100px;" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('course-list') }}">Courses</a>
                                </li>
        
                               <li class="nav-item">
                                    <a class="nav-link" href="https://www.shadaihomehealth.com/contact">Contact</a>
                                </li>
                                @auth
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('logout') }}">Log out</a>
                                </li>
                                @else
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('login') }}">Sign in</a>
                                </li>
                                @endauth
                                @auth
                                
                                @else
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('register') }}">Sign up</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <!-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Welcome to</h5>
                            <h1>Shadai Home Health Training</h1>
                            <p>Enriching Lives through quality care at home</p>
                            <a href="{{ route('course-list') }}" class="btn_1">View Courses</a>
                            <a href="{{ route('register') }}" class="btn_2">Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg' )}}" alt="">
          <div class="container">
            <h2>Welcome to Shadai Trainings</h2>
            <p></p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg' )}}" alt="">
          <div class="container">
            <h2>Health Meets Excellence</h2>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg' )}}" alt="">
          
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        
        <ol class="carousel-indicators">
            <li data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#hero-carousel" data-bs-slide-to="2"></li>
        </ol>

      </div>

    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <!-- <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome<br>Learning Experience</h2>
                        <p>Experience learning like never before with our awesome, user-friendly interface. Seamless navigation, limitless knowledge.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-home"></i></span>
                            <h4>Better Future</h4>
                            <p>Building a better future begins with education. Join us on a journey of growth, empowerment, and endless possibilities</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>Dive into excellence with our meticulously crafted, high-quality course content. Elevate your learning experience with in-depth and engaging materials</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>Unlock your next career chapter with our exciting job opportunities. Join us in shaping a brighter future together</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <!-- <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{ asset( 'img/learning_img.png' )}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>Shadai 
                        Home Health</h2>
                        <p>Shadai Home Health Services offers a unique combination of premier home health  and community - based support services to the people of Central Pennsylvania and beyond. Market research indicates that there is a significant need for quality home health care within this region and we believe that by employing competent and well-educated staff and providing them with organized and responsive management, we will become the home health care agency of choice in Central Pennsylvania.
Shadai Home Health Services is created as a Shadai Home Health Limited Liability Company with Head Operations in Camp Hill, Cumberland County and another office in Lancaster. Shadai is owned by its principal investors and principal operators. Camp Hill is also home to a hospital facility and a renowned Holy Spirit & affiliates Pinnacle Hospitals, and other long term care facilities, which serves as referral bases for our agency.</p>
                        <a href="https://www.shadaihomehealth.com/about-shadai" class="btn_1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- learning part end-->

    <!--::course_details_part start::-->
    <!-- <section class="special_cource padding_top" id="courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{ route( 'course-details' )}}" class="btn_4">Enroll</a>
                           
                            <a href="course-details"><h3>OT Onboarding</h3></a>
                            <p>Dive into the Oxygen Training Onboarding course – your key to a smooth and impactful start, unlocking a pathway to success in your learning journey.</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details" class="btn_4">Enroll</a>
                
                            <a href="course-details"> <h3>PT Onboarding</h3></a>
                            <p>Welcome to PT Onboarding—a tailored course designed to guide you through the essential steps, ensuring a confident start to your training journey."</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Enroll</a>
                       
                            <a href="course-details.html">  <h3>RN Onboarding </h3> </a> 
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                   <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::blog_part end::-->

    <!-- learning part start-->
    <!-- <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Advance feature</h5>
                        <h2>Our Advance Educator
                            Learning System</h2>
                        <p>At Shadai Training, we're excited to present our Advanced Educator Learning System. This cutting-edge initiative is designed to propel educators to new heights, combining innovative pedagogy, technology integration, and flexible learning paths. Join us on this journey to unlock your full teaching potential. Elevate your career with Shadai Training – where advanced education begins </p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Learn Anywhere</h4>
                                    <p>Seamless learning, limitless possibilities – Learn Anywhere, Anytime.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Up-to-date resources</h4>
                                    <p>Access current and comprehensive resources to stay abreast of the latest developments in the healthcare world .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{ asset( 'img/advance_feature_img.png' )}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- learning part end-->


    <!--::blog_part end::-->

  


    <!-- footer part start-->
<!-- <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="/"> <img src="{{ asset( 'img/logo.png' )}}" alt=""> </a>
                        <p>
                            To provide professional and paraprofessional services to patients in their homes assisting them to achieve the highest level of potential in their day-to-day self care activities. 
                            We are committed to providing high quality, multidisciplinary care by professionals who recognize the need for comprehensive assessment from both the patient and professional point of view.
                        </p>
                        </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Helpful Social Links</h4>
                        <p>Follow us on all our social media platforms.
                        </p>
                      
                        <div class="social_icon">
                            <a href="https://www.facebook.com/shadai2020"> <i class="ti-facebook" style="width: 600000px"></i> </a>
                            <a href="https://www.twitter.com/homeshadai"> <i class="ti-twitter-alt"></i> </a>
                            <a href="https://www.instagram.com/shadai.home.health"> <i class="ti-instagram"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> 
                                22 N 32nd street Camp Hill  PA 17011, <br>
                                313 W. Liberty Street
                                Suite 250, Lancaster, <br>
                                PA 17603
                                922 N 3rd Street
                                Harrisburg PA 17102 </p>
                            <p><span> Phone:</span>717.303.0272  </p>
                            <p><span> Email : </span>info@shadaihomehealth.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Shadai Home</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer> -->
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset( 'js/jquery-1.12.1.min.js' )}}"></script>
    <!-- popper js -->
    <script src="{{ asset( 'js/popper.min.js' )}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset( 'js/bootstrap.min.js' )}}"></script>
    <!-- easing js -->
    <script src="{{ asset( 'js/jquery.magnific-popup.js' )}}"></script>
    <!-- swiper js -->
    <script src="{{ asset( 'js/swiper.min.js' )}}"></script>
    <!-- swiper js -->
    <script src="{{ asset( 'js/masonry.pkgd.js' )}}"></script>
    <!-- particles js -->
    <script src="{{ asset( 'js/owl.carousel.min.js' )}}"></script>
    <script src="{{ asset( 'js/jquery.nice-select.min.js' )}}"></script>
    <!-- swiper js -->
    <script src="{{ asset( 'js/slick.min.js' )}}"></script>
    <script src="{{ asset( 'js/jquery.counterup.min.js' )}}"></script>
    <script src="{{ asset( 'js/waypoints.min.js' )}}"></script>
    <!-- custom js -->
    <script src="{{ asset( 'js/custom.js' )}}"></script>
    <script src="{{ asset( 'js/main.js' )}}"></script>
    <script src="{{ asset( 'vendor/bootstrap/js/bootstrap.bundle.min.js' )}}"></script>
  <script src="{{ asset( 'vendor/php-email-form/validate.js' )}}"></script>
  <script src="{{ asset( 'vendor/aos/aos.js' )}}"></script>
  <script src="{{ asset( 'vendor/glightbox/js/glightbox.min.js' )}}"></script>
  <script src="{{ asset( 'vendor/imagesloaded/imagesloaded.pkgd.min.js' )}}"></script>
  <script src="{{ asset( 'vendor/isotope-layout/isotope.pkgd.min.js' )}}"></script>
  <script src="{{ asset( 'vendor/waypoints/noframework.waypoints.js' )}}"></script>
  <script src="{{ asset( 'vendor/swiper/swiper-bundle.min.js' )}}"></script>
    
</body>

</html>