<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shadai Course</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css' )}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset ('css/animate.css' )}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css' )}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset ('css/themify-icons.css' )}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset ('css/flaticon.css' )}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset ('css/magnific-popup.css' )}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset ('css/slick.css' )}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset ('css/style.css' )}}">
    <style>
        .btn {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  font-family: "Roboto", sans-serif;
  color: #ffffff;
  font-size: 15px;
  background: #c3d934;
  padding: 15px 50px 15px 50px;
  text-decoration: none;
}

.btn:hover {
  background: #99ad18;
  text-decoration: none;
  color: white;
}
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand logo_1" href="index.html"> <img src="{{ asset ('img/logo.png' )}}" style="width: 100px; height: 100px;" alt="logo"> </a>
                        <a class="navbar-brand logo_2" href="index.html"> <img src="{{ asset ('img/logo.png' )}}" style="width: 100px; height: 100px;" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
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

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Individual Service Plan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{ asset ('img/health.jpg' )}}" style="width: 500px; height: 500px;" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top"><b>Individual Service Plan</b></h4>
                        <div class="content">
                            <p>The Individual Service Plan (ISP) is the written details of the supports, activities, and resources required for the individual to achieve personal goals. The Individual Service Plan is developed to articulate decisions and agreements made during a person-centered process of planning and information gathering. The general welfare and personal preferences of the individual are the key consideration in the development of all plans. The individual and his/her team are responsible for developing the individual plan of support. These teams, called interdisciplinary teams (IDT), are composed of people who care about and know the individual. The team may also ask specialists, consultants, or specific provider staff to contribute to the plan by completing evaluations, or by observing and collecting information that is basic to the preparation of the plan</p>
                        </div>

                        <h4 class="title">The IDT is ultimately responsible for assessing and documenting each person’s:</h4>
                        <div class="content">
                            <p>•Personal choices and preferences.</p>
                            <p>•Significant health care, mental health, or behavior needs and related maintenance needs.</p>
                            <p>•Safety and financial skills.</p>
                            <p>The teams translate this information into goals and objectives, which are then contained within the written plan. The plan results in outcomes that maintain or change services or supports to reflect what is most important to and most important for the individual in their daily life.</p>
                        </div>

                        <h4 class="title">Description of Induvial Service Plan for Adults</h4>
                        <div class="content">
                            <p>Although each agency has its own ISP format, there are some basic elements and information contained in almost all plans as listed below</p>
                            <p><b>Note:</b> Because of their highly individualized nature, not all service plans contain all the components listed. Some plans may have additional information not listed in the literature below.</p>
                            <p>Life Goals Individual Service Plans should reflect the goals of the individual served. Because we are all different and unique people, each person’s ISP should be unique and address the needs and desires of the person.</p>
                            <p>To begin the process, we must first learn how a person wants to live. In your role as a DSP, you can continually encourage people to experience new things. This enables the person to exercise greater choice in life because they have the experience to do so. After we learn what a person wants, we can then decide what needs to be done to help the person move toward that life. Good plans are rooted in what is important to the person, while taking into account all the other factors that impact the person’s life.</p>
                            <p>Life changes just as people change, service plans need to be revised to reflect growth, new interests and desires. Service plans are reviewed a minimum of once per year at Individual Service Plan meetings. Sometimes these meetings are called annuals. More and more, agencies are getting away from that practice and holding meetings to discuss these plans on an as needed basis. In a year’s time, much in your own life changes. This includes developing new interests and desires, changing where you live or work, who your friends are, etc.</p>
                        </div>
                         <h1 class="title">Sections of the Service Plan – Most service plans contain the following information:</h1>
                        <div class="content">
                           <p><b>Personal Description-</b> This section describes the person. It goes beyond the old way of describing a person (e.g., 25-yr. old black male with Down Syndrome).</p>
                            <p>Medical/Dental/Nutritional- This section contains a summary of significant medical issues. This includes any medication the person takes and the reasons. There may be nutritional information mentioned here, as well.</p>
                            <p><b>Background/Historical-</b> This is a summary of significant events that have happened in the individual’s life. These events may be a clue as to what shaped who the person is today.</p>
                            <p><b>Social Relationships-</b> Here is where details of the person’s social life are outlined. Important people are mentioned, as well as all types of relationships (e.g., family, friends, work, staff members). Some of these relationships may be positive and others not. Sometimes we draw maps to show how these people are related. These show graphically, the connections between people. This area would indicate whether the person prefers to be with people or by himself/herself.</p>
                            <p><b>Goals/Objectives-</b> This section identifies areas targeted for development. The information for this section is gathered through interviews, assessments, and ongoing interactions with the person. Goals can be from any area, but they need to be important to the person, not necessarily the staff providing input into the plan. We must set goals in various areas to obtain funding. This includes economic self-sufficiency, daily living skills, and community integration. We look at what the person wants to learn and prioritize short and long-term goals based on the person’s preferences.</p>
                            <p><b>Interests and Activities-</b> This is where we learn what interests the person outside of work and home responsibilities. Leisure activities, hobbies, sports, or just about any other interest can be listed in this section.</p>
                            <p><b>Personal Values-</b> This section makes a statement about what is important to the person. This is useful to know because often times we are motivated by what we value the most.</p>
                            <p><b>Personality, Feelings, & Emotions-</b> We need to know these things about the person in order to develop a supportive environment. Therefore, getting to know the person is essential.</p>
                            <p><b>Sources of Comfort and Discomfort-</b> This section will outline what things provide comfort as well as discomfort to the person. You may want to remember that we can never know everything about a person. So, this section may have information only known to the staff who wrote it. Further, as people grow and change, this area of the plan may have to undergo change. Again, you will learn much about the person as you interact with him/her.</p>
                            <p><b>Assessments-</b> The results of assessments or tests may be included here. For example, PT/OT, IQ, speech and language, etc.</p>
                            <p><b>Strengths and Needs-</b> Here we learn about the abilities as well as areas which require support.</p>
                            <p><b>Vocation-</b> This section will describe the kinds of work the individual likes to do or would like to do.</p>
                            <p><b>Education-</b> A summary of the person’s educational background as well as educational goals.</p>
                            <p><b>Financial-</b> This area discusses financial information about the person including sources of income and needs for the future.</p>
                            <p><b>Communication Style-</b> The best way to communicate with the person would be spelled out here. People can and do communicate in a variety of ways and it is important for you to understand how to communicate with each person you will be working with.</p>
                            <p><b>Learning Style-</b> How the person learns is outlined. This includes strategies you can use to work most effectively given the person’s specific situation.</p>
                            <p><b>Personal Rights-</b> In this area, we would learn which rights are most important to the person. Also, what, if any, rights restrictions might be in place and details of the situation.</p>
                            <p><b>Recent Life Changes-</b> Anything that has recently occurred in a person’s life which may have an effect on his/her day-to-day functioning should be noted here. This is another area that would be updated continually.</p>
                            <p><b>Vision for the Future-</b> Just as we have dreams and hopes for the future, so do people we support in our programs. You need to get to know the person. This will assist you in identifying his/her hopes and dreams. Then you can assist the person in realizing them.</p>
                       
                        </div>

                    </div>
                            <br><br>

                        <div>
                              <a href="{{ route('showCertForIndividualServicePlan') }}"><button class='btn'>End Training</button></a>
                        </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

    <!-- footer part start-->
    <footer class="footer-area">
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
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset ('js/jquery-1.12.1.min.js' )}}"></script>
    <!-- popper js -->
    <script src="{{ asset ('js/popper.min.js' )}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset ('js/bootstrap.min.js' )}}"></script>
    <!-- easing js -->
    <script src="{{ asset ('js/jquery.magnific-popup.js' )}}"></script>
    <!-- swiper js -->
    <script src="{{ asset ('js/swiper.min.js' )}}"></script>
    <!-- swiper js -->
    <script src="{{ asset ('js/masonry.pkgd.js' )}}"></script>
    <script src="{{ asset ('js/jquery.nice-select.min.js' )}}"></script>
    <!-- particles js -->
    <script src="{{ asset ('js/owl.carousel.min.js' )}}"></script>
    <!-- swiper js -->
    <script src="{{ asset ('js/slick.min.js' )}}"></script>
    <script src="{{ asset ('js/jquery.counterup.min.js' )}}"></script>
    <script src="{{ asset ('js/waypoints.min.js' )}}"></script>
    <!-- custom js -->
    <script src="{{ asset ('js/custom.js' )}}"></script>
</body>

</html>