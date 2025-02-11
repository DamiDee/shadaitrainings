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
                            <h2>Visit Bag Technique Procedure</h2>
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
                        <h4 class="title_top">PURPOSE</h4>
                        <div class="content">
                            <ol>
                                <li>To prevent contamination of the visit bag</li>
                                <li>To prevent cross-contamination and spread of infectious organisms</li>
                             </ol>  
                        </div>

                        <h4 class="title">RELATED PROCEDURES</h4>
                        <div class="content">
                        <ul>
                            <li>Hand washing</li>
                            <li>Maintaining Medical Supplies and Equipment in the Car</li>
                        </ul>   
                        </div>

                        <h4 class="title">EQUIPMENT</h4>
                        <div class="content">
                            <ol>
                            <li>Visit bag with impermeable lining</li>
                            <li>Paper towels</li>
                            <li>Suitable barrier</li>
                            <li>Leak-proof and puncture-proof container for bag storage in the car</li>
                            <li>Alcohol-based hand sanitizer</li>
                            <li>Liquid soap (bar soap can be a haven for bacteria)</li>
                            <li>An impermeable plastic trash bag (see Infection Control)</li>
                            </ol>
                            <p><b>NOTE:  Disposable paper or plastic, disinfectant gel, paper towels, soap and antiseptic cleanser shall be kept in a compartment on outside of bag.</b></p>
                            </div>

                        <h4 class="title">PROCEDURE</h4>
                        <div class="content">
                        <ul>
                            <li>1. Observe the principles of Standard Precautions at all times. The inside of the visit bag should be regarded and maintained as a clean area. Never enter without cleansing hands and all equipment must be cleaned before replacing into bag.</li>
                            <li>2. Transport the visit bag in the car on top of a clean barrier.  In addition, the bag should be stored in a clean area of the car, preferably in a closeable plastic or cardboard container designated for such use.</li>
                            <li>3. Once in the patient’s home, select the cleanest and most convenient work area and spread the barrier.</li>
                            <li>4. Place the bag on the middle of the barrier so that you will have one side for clean and one side for dirty.</li>
                            <li>5. Prepare a receptacle (impermeable plastic trash bag for disposable items).</li>
                            <li>6. Remove items needed to wash hands (hand washing supplies should be kept in a side pocket or extra zippered area, at the top of the bag) and take to sink area (if using antimicrobial soap). </li>
                        </ul>
                        <p><b><i>Use the visit bag as few times as possible.</i></b></p>
                        <ul>
                        <li>7. Cleanse and dry hands according to the procedure for Hand washing.</li>
                        <li>8. Return to the visit bag, open it again, remove necessary items for the visit and place on clean area of barrier.  Apply personal protective equipment as needed. Keep the bag closed during the visit. If additional equipment or supplies are needed from the bag during the home visit, the hand washing procedure must be repeated. Never enter the clean area of the bag without cleansing hands.</li>
                        <li>9. Discard disposable personal protective equipment in an impermeable plastic trash bag. To discard a disposable gown or plastic apron, remove the apron by folding the exposed side inward.</li>
                        <li>10. After providing care, clean all equipment with a home health agency-approved</li>
                        Use disinfectant wipes to clean equipment before returning it to the bag. Return unused clean supplies to the visit bag after care is completed.  Contaminated equipment or equipment that cannot be cleaned in the patient’s home may be transported for disinfection to the home health agency in an impermeable sealed plastic bag placed on the floor of the car (preferably in a closed container; “dirty”). Never place used needles, soiled equipment, or dressings in the visit bag.
                        <li>11. Wash hands. Discard any remaining items according to Standard Precautions. Return cleaning supplies (e.g., hand sanitizer, liquid soap) to the visit bag.</li>
                        <li>12. The visit bag should be thoroughly cleaned, and restocked as necessary, at least monthly.</li>
                        <li>13. Rolling bags are discouraged because of the risk of cross-contamination as the bag is rolled from client’s home to client’s home.</li>

                        </ul>
                        </div>

                        <h4 class="title">Skin problems</h4>
                            <div class="content">
                            <p><b>Decubitus ulcers (Bed sores or pressure sores)</b></p>
                            <p>Causes:</p>
                            <ol>
                            <li>Sustained pressure on the skin compresses
                            the blood vessels and prevents nutrition and
                            oxygen from getting to the skin cells. Over
                            time, the skin tissue dies and decubitus ulcers
                            develop.</li>
                            <li>The skin is under pressure where the bones
                            press against the skin tissue, especially when
                            the weight of the body or a body part is
                            pushing down on a pressure point.</li>
                            <li>Body fluids such as urine and feces contain
                            damaging chemicals. When they remain on
                            the skin, they cause moist areas that become
                            irritated and develop sores.</li>
                            <li>Friction from clothing or bedding can injure the
                            skin and lead to skin ulcers.</li> 
                            </ol>

                             
                            </div>
                            <h4 class="title">What to report to the nurse, doctor, or supervisor: </h4>
                            <div class="content">
                                <ul>
                                   <li>A red pressure area that does not become normal after 20 minutes without pressure.</li>
                                   <li>A reddened area of the skin that does not turn white when you push on it</li>
                                    <li>A skin area that is warm or hot to the touch</li>
                                    <li>Any swelling</li>
                                    <li>Any opening in the skin</li>
                                    <li>Blisters, tears, craters, rashes, or holes</li>
                                    <li>Scrapes or abrasions.</li>
                                    <li>Drainage or weeping from the skin</li>
                                </ul>
                                <p>Be especially alert when you are caring for
                                    residents that are frail, don’t move around much, or
                                    have poor nutrition. <u>Patients with little or no feeling in
                                        parts of the body, such as stroke victims, must be
                                        watched because they don’t feel pressure spots and
                                        change position when they should.</u>
                                </p>
                            </div>
                        
                        <h4 class="title">Preventing skin problems</h4>
                            <div class="content">
                            <ol type="disc">
                              <li>Encourage or help patients to walk or exercise several times a day.></li>
                              <li>Encourage or help patients to keep their skin clean, dry, and lubricated.</li>
                              <li> Encourage or help patients to keep their bedding free of wrinkles.</li>
                              <li>Encourage or help patients to eat well and drink plenty of liquid. </li>
                            </ol>
                            <h3>For patients who are in chairs most of the time:</h3>
                            <ol>
                            <li>Encourage or help them to stand, walk, or shift their weight every 15 minutes.</li>
                                <li>Teach them how to do chair push-ups with their arms.</li>
                                <li>Teach them to sit with their knees at the same level as their hips, with their thighs horizontal to the chair. This
                                will distribute their weight along their thighs and away from pressure points.</li>
                                <li>If a patient cannot do these things, he or she should return to bed after an hour in a chair.</li>
                            </ol>
                            <h3>For patients who are in bed most of the time:</h3>
                            <ol>
                               <li>Teach them how to use side rails and the trapeze to change position frequently, at least every two hours. Be
                                available to assist them if necessary. Even small shifts in body weight are helpful.</li>
                                <li>When you are helping a patient to change position, move him or her carefully so you do not create friction and
                                shearing between the skin and the bedding or clothes.</li>
                                <li>The head of the bed should be raised as little as possible, no more than 30 degrees, to prevent sliding and
                                pressure on the bony areas. If it must be raised higher for eating, it should be lowered an hour later.</li>
                                <li>Massage the skin when possible, but avoid massaging pressure points or irritated areas.</li>
                            </ol>
                            <h3>For patients who use special chair cushions or mattress overlay pads:</h3>
                            <ol>
                                <li>Check to be sure that the pads are thick enough to do the job. Place your hand under the pad while the resident is on top of it—if you can feel the patient’s body through the cushion, the pad is too thin. </li>
                            </ol>
                            <h3>For patients with pressure sores: </h3>
                            <ol>
                               <li> Keep weight and pressure off any reddened areas and wounds.</li>
<li>Use pillows to elevate or separate body parts and keep pressure off an area, such as a pillow under the calf to
raise the heel off the bed, or a pillow between the legs to keep the knees from touching each other. </li>
                            </ol>
                        </div>
                            
                       <div>
                              <a href="{{ route('quizForBagTechnique') }}"><button class='btn'>Take Quiz</button></a>
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