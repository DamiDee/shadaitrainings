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
                            <h2>Complaint Resolution</h2>
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
                        <h4 class="title_top"><b>Definition</b></h4>
                        <div class="content">
                        <p>A grievance is a concern relating to patient care conditions or to relationships between a patient and the Agency or a caregiver in which the patient believes that he/she has been wronged and wants the wrong corrected. It is regarding problem areas in the delivery of care which appear to threaten the health and well-being of the patient.</p>
                        </div>

                        <h4 class="title">Policy</h4>
                        <div class="content">
                            <p>All patients will be informed of their right to voice a complaint/grievance against anyone furnishing services on behalf of the Agency.
                            </p>
                            <p>All patients will receive verbally and in writing the Agency's process for receiving, investigating and resolving complaints.
                            </p>
                            <p>All patients receive the state regulatory hotline number, telephone number as well as the appropriate person/department within the Agency to contact regarding a complaint/grievance regarding services furnished by the Agency and/or concerns regarding the implementation of Advance Directive requirements.</p>

                            <p>The Agency will investigate any complaint made by patient or patient's family or guardian regarding treatment or care that is (or fails to be) furnished, or regarding the lack of respect for the patient's property by anyone furnishing services on behalf of the Agency. Both the existence of the complaint and the resolution of the complaint will be documented.</p>

                            <p>A summary of grievances, complaints and concerns will be reported to the Governing Body quarterly.</p>

                            <p>Patient grievances, complaints and concerns will be included in the (Pl) annual report.</p>

                            <p>Agency staff will be educated on patient grievance policies at orientation and annually thereafter.</p>

                            <p>All complaints/grievances are retained for a minimum of three years.</p>
                        </div>

                        <h4 class="title">Procedure</h4>
                        <div class="content">
                        <ol>
                            <li>When a patient is admitted to the Agency, he/she is to be given an admission packet that includes a copy of the Agency Bill of Patient Rights and Responsibilities. This policy indicates that grievances are to be filed with the Agency Administrator. The fact that the policy was given to the patient is to be recorded in the clinical record.</li>
                            <li>All grievances and concerns are to be dealt with by the Administrator or his/her designee.</li>
                            <li>Any employee receiving a complaint/grievance will complete and submit a report to the Administrator. If the complaint is received after business hours, the supervisor on call will be notified and the complaint form will be submitted the next business day.
                            </li>
                            <li>When a grievance is received, whether written or verbal, it is to be documented in the patient's clinical record by the Administrator or his/her designee. It is also to be noted in a log kept by the Administrator.
                            </li>
                            <li>The resolution of the problem is also to be documented in the same manner.</li>
                            <li>Each written grievance received is to be responded to in writing by the Agency within ten (10) days.
                            </li>
                            <li>Grievance received after hours, on weekends and holidays and whenever the office is closed are handled on the next business day.</li>
                            <li>Each written or verbal grievance received is to be responded to in writing by the Administrator within ten (10) days. This information is reviewed by the Administrator and a complaint form is completed by the Administrator. Each person involved is interviewed by the Administrator who then evaluates all collected information.
                            </li>
                            <li>After thorough evaluation, The Administrator makes a determination and formulates a decision notifying all persons involved. All information regarding activities, investigation, analysis, resolution and outcomes are documented in the Administrator's log and in the patient's chart.</li>
                            <li>The response is to explain the decision rendered by the Agency and it is to notify the patient of his/her right to appeal.</li>
                            <li>A copy of the outcome is to be filed in the clinical record and noted in the Administrator's log.
                            </li>
                            <li> If the patient files an appeal, it is to be reviewed and responded to by a member of the Governing Body within thirty (30) days of its receipt by the Agency.</li>
                            <li> The response to the appeal is to be filed in the patient's clinical record and noted in the Administrator's log.</li>
                        
                        </ol> 
                    </div>
                         <h1 class="title">Staff Rights</h1>
                        <div class="content">
                            
                                <p>All employees have rights and are entitled to fair, consistent and professional treatment including but are not limited to the following:</p>
                                <ol>
                                    <li>Staff may request a change in assignment because of a personality conflict.</li>
                                    <li>Staff may complain without fear of repercussion.</li>
                                    <li>Staff has the right to special consideration to accommodate personal requests arising from cultural or religious practices provided the Agency can cover the needs of the patient/clients.</li>
                                    <li>Staff has a right to be treated in accordance with the Agency mission and vision.</li>
                                    <li>Staff is to receive information in a timely manner.</li>
                                    <li>Staff is entitled to a workplace free from solicitation and distribution of unsolicited material.</li>
                                </ol>
                        </div>

                        <h4 class="title">Grievance Procedures</h4>
                        <div class="content">
                        <ol>
                            <li>Any person(s) who believes that he/she or any class of individuals has been subject to discrimination may file a complaint pursuant to procedures set forth below, on behalf of him or herself another person or handicapped persons as a class. Filing of a complaint will not subject employees to any form of adverse action, reprimand, retaliation or otherwise negative treatment by the Agency.</li>
                            <li>Accordingly, the Agency has adopted an internal grievance procedure providing for the prompt and equitable resolution of complaints alleging any action prohibited by the United States department of Health and Human Services regulation 45 CFR part 84, 29 USC 794. The law and regulations may be examined in the office by the Administrator who has been designated to coordinate the efforts of the agency to comply with the regulation.</li>
                            <li>Complaint processing procedures are as follows:
                                <ol type="a">
                                    <li>All complaints involving matters prohibited shall first be filed with the Director, who shall render an initial resolution within seven days of receipt of the complaint.</li>
                                    <li>If the complaint is not satisfied with the results achieved in step 'a,' the complainant may file an appeal with the President/CEO, who shall render a decision within five days.</li>
                                    <li>A complaint should be in writing, contain the name and address of the person filing it and briefly describe the action(s) alleged to be prohibited.</li>
                                    <li>All complaints should be filed as set forth above within three days after the complaining party becomes aware of the action(s) allegedly prohibited by the regulations.</li>
                                    <li>All complaints should also be referred to the office of the coordinator, who shall maintain the files and records of the Agency relating to complaints filed hereunder. The coordinator may assist persons with the preparation and filling of complaints, participate in the investigation of complaints and advise the President/CEO concerning their resolution.
                                    </li>
                                    <li>The President/CEO, or his designee, shall take steps to ensure an appropriate investigation of each complaint to determine its validity. These rules contemplate informal but thorough investigations, affording all interested persons and their representatives, if any, an opportunity to submit evidence relevant to the complaint. The right of a person to prompt and equitable resolution of the complaint filed hereunder shall not be impaired by the person's pursuit of other remedies such as the filing of a Complaint with the Office for Civil Rights of the United States Department of Health and Human services. Utilization of this grievance procedure is not a prerequisite to the pursuit of other remedies.
                                    </li>
                                </ol>
                            </li>
                            <li>These rules shall be liberally construed to protect the substantial rights of interested persons, to meet appropriate due process standards and to assure Agency compliance with regulations.</li>
                        </ol>
                        </div>

                        
                    </div>
            
                            <br><br>

                        <div>
                              <a href="{{ asset('img/ComplaintForm.pdf') }}"><button class='btn'>Download Complaint Form</button></a>
                        </div>
                        <br>
                        <div>
                              <a href="{{ route('quizForComplaintResolution') }}"><button class='btn'>Take Quiz</button></a>
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