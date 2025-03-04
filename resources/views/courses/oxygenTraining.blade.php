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
                            <h2>Oxygen Training</h2>
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
                        <h4 class="title_top">Learning guide</h4>
                        <div class="content">
                            OXYGEN is one component of the air that is all around us. It is a colorless,  odorless, tasteless gas that forms 21% of our atmosphere. About two-thirds of the  human body is composed of oxygen. About nine-tenths of all water is oxygen. It is  absolutely essential to life on this planet. The human body must constantly take in fresh  
                            oxygen. We cannot survive longer than a few minutes without it.  
                        </div>

                        <h4 class="title">How a healthy person processes oxygen</h4>
                        <div class="content">
                        <p> When we breathe in, or inhale, our respiratory system takes oxygen in through  the nose, warming it as it moves down the trachea (windpipe), through the bronchial  tree, and into the lungs. Once in the lungs, the oxygen moves into the blood through  special cells called alveoli. In the blood, red blood cells trade waste products (carbon  dioxide) for oxygen and carry the fresh oxygen to the cells.  
                            When everything is working properly, the oxygen goes into the blood and to  every cell in our body, providing oxygen for energy, growth, and cell reproduction. 
                            When the demand for oxygen increases, as when we exercise, we take more air into the body  to meet the needs of the cells. The body also uses the mechanism of breathing to  release carbon dioxide, a waste product, from the body. As we breathe out, or exhale,  the carbon dioxide leaves the body. Look closely at the diagram and drawing below.</p>
                        <img src="{{ asset ('img/oxygenImage1.png' )}}" width="300" height="300"> 
                        <img src="{{ asset ('img/oxygenImage2.png' )}}" width="300" height="300">
                        </div>

                        <h4 class="title">When things don’t work right</h4>
                        <div class="content">
                            <p>When something goes wrong with the  body’s normal method for processing  oxygen, medications and supplemental 
                                oxygen are used to help make sure the body gets the oxygen it needs.
                                <img src="{{ asset ('img/oxygenImage3.png' )}}" width="100" height="100" style="float: right"> <br>
                                If a resident has heart failure,  he or she may have difficulty  
                                breathing. In this case, oxygen is  often given along with special medications to make sure tissues in the heart and throughout the  body receive needed oxygen.
                                <img src="{{ asset ('img/oxygenImage4.png' )}}" width="100" height="100" style="float: left">  
                                If a resident has emphysema or COPD (chronic obstructive pulmonary disease),  the alveoli become ineffective in  exchanging oxygen for carbon dioxide.  
                                Supplemental oxygen therapy helps  meet the resident’s need for oxygen.  
                                Residents with sleep disorders such as  sleep apnea may also need oxygen therapy.
                                Other conditions, such as asthma,  pneumonia, bronchitis, and severe  allergies, 
                                may require short-term use of  oxygen therapy. Usually people with  
                                these conditions use extra oxygen for  only a short time, until they are well.</p>
                        </div>

                        <h4 class="title">Oxygen Therapy</h4>
                        <div class="content">
                            <p>
                            Some people use oxygen only while exercising, others only need it while sleeping, and still others need oxygen continuously. A person’s physician can do blood tests to help determine how much oxygen is needed and when. Oxygen therapy is a plan of oxygen supplementation prescribed by a doctor.
                            For people who do not get enough oxygen naturally, supplements of oxygen can have several benefits. Supplemental oxygen can improve their sleep and mood, increase their mental alertness and stamina, and allow their bodies to carry out normal functions. It also prevents heart failure in people with severe lung disease.
                            Oxygen at very high levels over a long period of time can be toxic and very harmful to one’s health; therefore, a doctor’s prescription is required. Oxygen used to treat medical conditions is a drug. We administer and document oxygen therapy according to the rules that govern medication administration. 
                            <img src="{{ asset ('img/oxygenImage5.png' )}}" width="200" height="100" style="float: left">
                            The doctor’s prescription will spell out the flow rate in liters per minute (LPM or L/M). This is how much oxygen the person needs per minute, and it should not be changed without a doctor’s order.
                            <img src="{{ asset ('img/oxygenImage6.png' )}}" width="100" height="100">
                            </p>
                        </div>

                        <h4 class="title">Obtaining Oxygen Equipment</h4>
                            <div class="content">
                            <p>The purpose of oxygen delivery systems is to get extra oxygen into the person’s respiratory system and blood. Oxygen is available from three different delivery systems. Each system of delivery has advantages and disadvantages.The three systems are:</p>
                            <h2 class="title">Compressed Gas</h2>
                            <p>Oxygen gas can be compressed and stored in tanks or cylinders of steel or aluminum. These tanks come in many sizes; larger ones usually stay in one place, and people take the smaller ones with them when they want to move around. The tanks must be refilled with oxygen when the oxygen in them is gone.</p>
                            <h2 class="title">1. Liquid oxygen</h2>
                            <p>
                            <img src="{{ asset ('img/oxygenImage7.png' )}}" width="200" height="200" style="float: left">
                                <p style="font-weight: bolder">PORTABLE LIQUID OXYGEN</p>
                                When oxygen gas is cooled, it changes to a liquid form. People who are more active often use liquid oxygen because larger amounts of it can be stored in smaller, more convenient containers than compressed oxygen. 
                                The disadvantage is that liquid oxygen cannot be kept for a long time because it will evaporate. 
                                The containers must be refilled with liquid oxygen.
                            </p>
                            <h2 class="title">2. Oxygen concentrators</h2>
                            <span style="font-weight: bolder">ELECTRICAL OXYGEN CONCENTRATOR</span>
                            <p>
                              <img src="{{ asset ('img/oxygenImage8.png' )}}" width="200" height="200" style="float: right">
                            Oxygen concentrators deliver higher concentrations of oxygen from the air. An oxygen concentrator is an electric device about the size of an end table. It produces oxygen by concentrating the oxygen that is already in the air and eliminating
                            other gases. This method is less expensive, easier to maintain, and doesn't require refilling, but it is not portable. Some oxygen concentrators give off heat and are noisy. Back-up methods are necessary in case of a power failure, and the electric bill may rise. Oxygen concentrators may not deliver enough oxygen for some people. An oxygen concentrator will usually include a humidifier to warm and add moisture to the prescribed oxygen.
                        </p>
                            <h2 class="title"> 3. Large tanks and portable tanks</h2>
                            <p>
                            <img src="{{ asset ('img/oxygenImage9.png' )}}" width="200" height="200" style="float: right">
                            Skilled care facilities sometimes have a system for delivering oxygen directly into the person’s room or apartment. Individuals living in any setting may have large tanks to store large amounts of liquid oxygen or compressed oxygen gas.
                            In either case, the resident may need small, portable tanks of liquid or compressed oxygen for brief periods—a few hours—outside his or her room or apartment. Portable tanks are a backup system suitable
                            to use in an emergency or when the resident leaves the room or apartment for meals or outings.
                            </p>

                        </div>

                        <h4 class="title">Oxygen Administration</h4>
                            <div class="content">
                            <p>
                            Oxygen is usually administered with continuous flow through a two-pronged nasal tube called a nasal cannula, even though this system wastes oxygen. To improve efficiency and increase the person’s ability to move around, there are other devices. These include face masks,
                            reservoir cannulas, and demand-type systems. Usually, a respiratory therapist,
                            medical equipment specialist, nurse, or physician instructs the person about proper oxygen use.
                            <img src="{{ asset ('img/oxygenImage10.png' )}}" width="200" height="100" style="float: right">
                            The doctor’s prescription will spell out the flow rate in liters per minute (LPM or L/M). This is how much oxygen the person needs per minute, and it should not be changed without a doctor’s order.
                            <img src="{{ asset ('img/oxygenImage11.png' )}}" width="100" height="100" style="float: right">
                            </p>
                        </div>
                        
                        <h4 class="title">General Guidelines</h4>
                            <div class="content">
                            <p>
                            When assisting with an oxygen tank, an oxygen concentrator, or liquid oxygen, follow these important guidelines:
                            </p>
                            <ol type="disc">
                                <li>Always stabilize the oxygen tank (using a special stand) and store it in an area that is out of the way so it will not fall.</li>
                                <img src="{{ asset ('img/oxygenImage12.png' )}}" width="200" height="200" style="float: right">
                                <img src="{{ asset ('img/oxygenImage13.png' )}}" width="200" height="200" style="float: right">
                                <li> Close the oxygen tank tightly when not in use.</li> 
                                <li> Because oxygen can cause an explosion, keep the oxygen tank away from any flammable source, such as matches, heaters, or hair dryers.</li> <br> <br>
                                <li>Check the water level in the humidifier bottle (if one is provided) often. If it is near or below the refill line, pour out any remaining water and refill it with sterile or distilled water.</li>
                                <img src="{{ asset ('img/oxygenImage14.png' )}}" width="100" height="100" style="float: none">
                                <li>If the resident complains of his or her nose “drying out,” ask your supervisor about obtaining a water-soluble lubricant like K- Y Jelly to help keep nasal passages moist. Do not use petroleum-based products.</li>
                                <li>If the oxygen tubing irritates the resident’s skin (on sides of face or behind ears), ask your supervisor about using cotton balls or getting special moleskin protectors to protect skin from the tubing.</li>
                                <li>If the resident’s supply of oxygen is getting low (for portable tanks), advise him or her to re-order, or check with your supervisor about reordering. Oxygen should be ordered at least two or three days in advance to allow time for delivery.</li>
                                <li>Maintain the oxygen flow at the prescribed rate. If you’re not sure whether oxygen is flowing, check the tubing for kinks, blockages, or disconnection. Then make sure the system is on. If you’re still unsure, submerge the nasal cannula in a glass of water, with the prongs pointing down. If bubbles appear, oxygen is flowing through the system. Shake off extra water before reinserting the cannula in the resident’s nose.</li>
                            </ol>
                        </div>

                        <h4 class="title">Safety tips</h4>
                            <div class="content">
                            <ol type="disc">
                                <li>Oxygen is highly combustible and may explode. It should not be used near electrical equipment or while using an electric appliance, such as an electric razor.</li>
                                
                                <img src="{{ asset ('img/oxygenImage16.png' )}}" width="200" height="200" style="float: none">
                                <li> A sign is usually placed on or near the apartment or room door to alert visitors that oxygen is in use. 
                                    In a care facility, your supervisor will notify the local fire department that oxygen is in use in the building.
                                </li> 
                                <li> Familiarize yourself with the location of fire extinguishers in the resident’s home or in the care facility. If a fire does occur, turn off the oxygen immediately.</li>
                                <img src="{{ asset ('img/oxygenImage15.png' )}}" width="200" height="200" style="float: none">
                                <br>
                                <li>Don’t smoke—and don’t allow others to smoke— near the oxygen system. Keep the system away from direct sunlight, space heaters and other sources of heat, and open flames, such as in a gas stove.</li>
                                <img src="{{ asset ('img/oxygenImage17.png' )}}" width="100" height="100" style="float: none">
                                <li>Don’t run oxygen tubing under clothing, bed covers, furniture, or carpets.</li>
                                <li>Keep the oxygen system upright.</li>
                                <li>Make sure the oxygen is turned off when not in use.</li>
                                <li>Keep oxygen concentrators away from the wall to allow air to circulate.</li>
                            </ol>
                        </div>

                        <h4 class="title">When to call your supervisor</h4>
                            <div class="content">
                                <p>
                                The resident may not be getting enough oxygen if you notice these signs:
                                </p>
                            <ol type="disc">
                                <li>Difficult, irregular breathing</li>
                                <li>Restlessness or anxiety</li> 
                                <li>Tiredness or drowsiness</li>
                                <li>Blue fingernail beds or lips</li>
                                <li>Confusion</li>
                                <li>The resident is easily distracted</li>
                            </ol>
                            <p>The resident may be getting too much oxygen if you notice these signs:</p>
                            <ol>
                                <li>Headaches</li>
                                <li>Slurred speech</li>
                                <li>Sleepiness or difficulty waking up</li>
                                <li>Shallow, slow breathing</li>
                            </ol>
                        </div>
                        
                        <p>If any of these signs develop, call your supervisor or a nurse or doctor immediately. And—above all—never change the oxygen flow rate unless a licensed medical professional tells you to do so.</p>
                        <br><br>
                        <div>
                              <a href="{{ route('take-quiz') }}"><button class='btn'>Take Quiz</button></a>
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