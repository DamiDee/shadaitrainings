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
                            <h2>Emergency Plan</h2>
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
                        <h4 class="title_top">Main Course:</h4>
                        <div class="content">
                        An emergency is any situation that disrupts or alters the normal day to day business.
                        </div>

                        <h4 class="title">DEFINITION OF  EMERGENCY</h4>
                        <div class="content">
                        <p> 
                        Any natural, technological or civil emergency that causes damage of enough severity and magnitude to result in declaration of a state of emergency by a county, the Governor or the President of the United States.
                        </p>
                        <p>
                        The Administrator or designee at the agency will
make the decision to implement the plan.
                        </p>
                        </div>

                        <h4 class="title">REMEMBER</h4>
                        <p>
                        The Agency will present its best effort to provide care to clients in emergency situations. However, if the Agency is unable to comply with situations beyond its control making it impossible to provide
                        services, such as when roads are impassable or when a client relocated to a place unknown by the Agency, the Agency is not required to continue to
                        provide care.
                        </p>
                        <h4 class="title">Emergency Preparedness Plan</h4>
                        <div class="content">
                            <ol>
                                <li>In depth policies are in the Emergency Preparedness Section.</li>
                                <li>The plan is an orderly procedure to be implemented in an emergency to ensure that the health care needs of clients continue to be met.
                                </li>
                                <li>All employees shall be oriented to the plan and their responsibilities.</li>
                                <li>Possible emergency or risk factors will be identified for each client and appropriate emergency plans discussed with the client and/or responsible person at the time of admission.</li>
                                <li>The disaster plan is reviewed at least yearly through the Professional Advisory Committee (PAC), if applicable, or the QAPI Committee.</li>
                            </ol> <br>
                        </div>

                        <h4 class="title">Employee plan</h4>
                        <div class="content">
                            <ol>
                                <li>In-service on hire</li>
                                <li>The agency will maintain and updated employee list with phone numbers</li>
                                <li>The Agency will maintain an updated employee call tree that will be activated in the event of an emergency</li>
                            </ol>
                        </div>

                        <h4 class="title">Patient/Client plan</h4>
                            <div class="content">
                                <ol>
                                    <li>Disaster classifications based on patient needs (Class I thru IV)</li>
                                    <li>Disaster code is assigned to the patient at SOC (start of care) and documented in the system, (as appropriate) and on the outside of the patient/client record</li>
                                    <li>Emergency information in SOC packets.</li>
                                    <li>Special needs registration with local shelters</li>
                                </ol>                    
                            </div>

                        <h4 class="title">Patient Disaster Classifications</h4>
                            <div class="content">
                            <ol>
                                <li>Class I - Patients with life threatening conditions that require ongoing medical treatment or a medical device to sustain life.</li>
                                <li>Class II - Patients with the greatest need for care will be seen as soon as possible. Patients requiring daily insulin injections, IV medications, sterile wound care of a wound with a large amount of drainage.</li>
                                <li>Class Ill - Services could be postponed 24-48 hours without adverse effects. Diabetic patients able to self-inject, sterile wound care to a wound with minimal amount or not drainage.</li>
                                <li>Class IV - Service could be postponed 72-96 hours without adverse effects. Postoperative with no wound, routine catheter changes or discharge within 10-14 days.</li>
                            </ol>
                        </div>
                        
                        <h4 class="title">The client is provided with the following:</h4>
                            <div class="content">
                            <ol type="disc">
                                <li>A copy of the Agency's policy on how to handle disaster related emergencies in the home</li>
                                <li>Client responsibilities in the Agency's Emergency Preparedness and Response Plan.</li> 
                                <li>A list of community disaster resources that can assist during a disaster-related emergency</li>
                                <li>Survival tips and plans for evacuation and sheltering in place.</li>
                            </ol>
                        </div>

                        <h4 class="title">When an emergency is declared</h4>
                            <div class="content">
                            <ol>
                            <li>The Administrator will contact all office staff to inform them and have them contact the field staff.</li>
                            <li>Staff safety is a primary concern.</li>
                            <li>Staff will not be asked to jeopardize their safety if the situation becomes potentially dangerous. If this occurs, authorities will be notified and if necessary, an ambulance wiII be called for the patient.</li>
                            <li>Staff will be expected to contact the office and report their whereabouts and availability.</li>
                            <li>The patient/clients will be contact in order of their disaster classification assigned at the time of admission.</li>
                        </ol>
                        </div>

                        <h4 class="title">Emergency Preparedness Policies</h4>
                            <div class="content">
                              
                                <ol>
                                    <li>If inclement weather occurs the employee is expected to contact the office or answering service for instructions regarding the opening of the Agency.</li>
                                    <li>All staff that who can safely report to work are asked to do so. If you are not able to report to work, the supervisor should be notified so that any visits needed may be covered.</li>
                                    <li>If the office telephone service is out of order, operations wiII be maintained from an alternate location designated by the Administrator.</li>
                                    <li>Patients/clients who rely on public transportation will be assisted by the Agency with alternate arrangements.</li>
                                    <li>Local authorities may be contacted to assist as needed.</li>
                                    <li>In the event of work stoppage by the Agency, the patient/client will be contacted, and appropriate arrangements will be made for services as possible.</li>
                        
                                </ol>
                                </p>
                        </div>

                        <h4 class="title">Emergencies and Disasters</h4>
                            <div class="content">
                            <p>
                                <ol>
                                    <li>Employees, for the benefit of their own safety must learn what to do in case of an emergency.</li>
                                    <li>Each employee must be familiar with the Agency's Disaster Plan, and a copy is maintained in the office.</li>
                        
                                </ol>
                            </p>
                        </div>


                        <h4 class="title">Emergency Preparedness Policy 8.1</h4>
                            <div class="content">
                                <ol>
                                    <li>The Emergency/Disaster Plan provides an orderly procedure to be implemented in an emergency to ensure that the health care needs of patients continue to be met.</li>
                                    <li>The Agency is not required to physically evacuate or transport a client in the event of an emergency.</li>
                                    <li>All employees will be oriented to the plan and their responsibilities in carrying out the plan.</li>
                                    <li>The Administrator or Agency manager is designated as the disaster coordinator. In his/her absence the Alternate Administrator or Agency Manager will act in this role.</li>
                                    <li>The Agency has a continuity of operations business plan to address emergency needs, essential functions for the client services, critical. personnel and how to return to normal operations as quickly as possible.</li>
                                    <li>The Agency has a risk assessment to identify the potential disasters from natural and man-made causes most likely to occur in the Agency's service area.</li>
                                    <li>The Agency will follow procedures for communicating with staff, clients/family, local, state and Federal emergency management services.</li>
                                    <li>This may include:
                                        <ul>
                                            <li>Emergency medical services</li>
                                            <li>State regulatory department</li>
                                            <li>Other healthcare providers and suppliers</li>
                                            <li>Alternate modes of communication or alert systems in the event of telephone or power failure.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        <h4 class="title">Pre-Impact Plan</h4>
                        <div class="content">
                            <ol>Decision to implement the Plan</ol>
                            <ol>Call tree implemented</ol>
                            <ol>Communication to all staff of emergency plan implementation and/or closure</ol>
                            <ol>Determine patient classification list</ol>
                            <ol>Patients contacted</ol>
                        </div>

                        <h4 class="title">Pre-Impact Considerations</h4>
                        <div class="content">
                            <ol>Run visit calendar to determine which patients will require visits</ol>
                            <ol>Coordinate for visits as appropriate</ol>
                            <ol>Make sure that all Special needs patients are registered with the county in which they reside</ol>
                        </div>

                        <h4 class="title">Agency considerations</h4>
                        <div class="content">
                            <ol>Security of the Office</ol>
                            <ol>Rolling of the phones</ol>
                            <ol>File back-up</ol>
                            <ol>Security of equipment/files</ol>
                        </div>

                        <h4 class="title">Staff Emergency Preparedness Plan</h4>
                        <div class="content">
                            <ol>Know the Agency's Plan</ol>
                            <ol>Have the automobile equipped</ol>
                            <ol>Have alternative communication devices available for use</ol>
                            <ol>Establish a family preparedness</ol>
                        </div>

                        <h4 class="title">Special Needs Considerations</h4>
                        <div class="content">
                            <h2>HEARING ISSUES:</h2>
                            <ul>
                                <li>Have a pre-printed copy of key phrases available, such as:<br>
                                - I use American Sign Language <br>
                                - I do not write or read English well<br></li>
                                <li>Consider having a weather radio with visual/text display</li>
                            </ul>

                            <h2>VISION ISSUES:</h2>
                            <ul>
                                <li>Mark disaster supplies with fluorescent tape, large print or Braille</li>
                                <li>High powered flashlights</li>
                                <li>Place security lights in each room to light path of travel</li>
                            </ul>

                            <h2>ASSISTIVE DEVICE USERS:</h2>
                            <ul>
                                <li>Label equipment with simple instruction cards</li>
                                <li>If you use a cane, keep extras in strategic locations</li>
                                <li>Keep a spare cane in emergency kit</li>
                                <li>Know what your options are if you are not able to evacuate with your assistive device</li>
                            </ul>
                        </div>

                        <h4 class="title">Post-Impact Plan</h4>
                        <div class="content">
                            <ol>
                                <li>All employees to contact the Agency as soon as possible post disaster</li>
                                <li>The Administrator will assess the status of the physical facility and of systems</li>
                                <li>Post impact meeting</li>
                                <li>Contact all patients per the calendar</li>
                                <li>Document any significant information including missed client visits</li>
                            </ol>
                        </div>

                        <h4 class="title">Damage of Written Records</h4>
                        <div class="content">
                            <ol>
                                <li>If written records are damaged during a disaster, the Agency must not reproduce or recreate client records except from electronic records.</li>
                                <li>Records reproduced from existing electronic records must include:</li>
                                <li>The date the record was reproduced</li>
                                <li>The Agency staff member who reproduced the record</li>                                </li>
                                <li>How the original record was damaged</li>
                            </ol>
                        </div>

                        <h4 class="title">Follow Up</h4>
                        <div class="content">
                            <ol>
                                <li>All disaster/emergency activities will be documented by the Administrator in the Agency records.</li>
                                <li>Contacts with the clients shall be documented in the patient/client record.</li>
                                <li>The Administrator shall declare when the emergency/disaster plan is discontinued.</li>
                                <li>The details of the execution of the plan wiII be analyzed to determine any revisions that may be indicated for the plan.</li>                                </li>
                                <li>These recommendations will be provided to the PAC or the QAPI Committee who will advise the Board of Directors of any needed changes.</li>
                            </ol>
                        </div>

                        <div>
                              <a href="{{ route('quizForEmergencyManagement') }}"><button class='btn'>Take Quiz</button></a>
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