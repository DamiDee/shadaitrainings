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
                            <h2>Occupational Safety and Health Act(OSHA)</h2>
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
                        <h4 class="title_top">What is OSHA?</h4>
                        <div class="content">
                            <p>
                            The Occupational Safety and Health Act (OSH Act) of 1970 was passed to prevent workers from being killed or seriously harmed at work.  The law requires employers to provide their employees with working conditions that are free of known dangers. The Occupational Safety and Health Administration (OSHA) was created, as a result, to set and enforce protective workplace safety and health standards.  OSHA provides information, training and assistance to workers and their employers.  Workers may file a complaint to have OSHA inspect their workplace if they believe that their employer is not following OSHA standards or that there are serious hazards (1-800-321-6742).
Workers are entitled to working conditions that do not pose a risk of serious harm.  To help assure a safe and healthful workplace, OSHA also provides workers with the right to:

                            </p>
                            <ol>
                                <li>Ask OSHA to inspect their workplace</li>
                             <li>Use their rights under the law without retaliation and discrimination</li>
                             <li>Receive information and training about hazards, methods to prevent harm and OSHA standards that apply to their workplace</li>
                             <li>Get copies of test results done to find hazards in the workplace</li>
                             <li>Review records of work-related injuries and illnesses</li>
                             <li>Get copies of their medical records</li>
                            </ol>
                            <p>
                            Employers have the responsibility to provide a safe workplace that does not have serious hazards and to follow all relevant OSHA safety and health standards.  Employers must find and correct safety and health problems. OSHA further requires employers to try to eliminate or reduce hazards first by making changes in working conditions rather than relying on masks, gloves or other types of personal protective equipment (PPE). Employers MUST also:
                            </p>
                            <ol>
                                <li>Inform employees about hazards through training, labels, alarms, color-coded systems, chemical information sheets and other methods</li>
                                <li>Keep accurate records of work-related injuries and illnesses</li>
                                <li>Perform tests in the workplace, such as air sampling required by some OSHA standards</li>
                                <li>Provide hearing exams or other medical tests required by OSHA standards</li>
                                <li>Post OSHA citations, injury and illness data, and the OSHA poster in the workplace where workers will see them</li>
                                <li>Notify OSHA within 8 hours of a workplace incident in which there is a death or when three or more workers go to a hospital</li>
                                <li>Not discriminate or retaliate against a worker for using their rights under the law.</li>
                            </ol>
                        </div>

                        <h4 class="title">Recordkeeping Requirements for the Survey of Occupational Injuries and Illnesses</h4>
                        <div class="content">
                            <p>As in the past, OSHA requires that all recordable work-related injuries and illnesses information be reported, utilizing Bureau of Labor Statistics Survey of Occupational Injuries and Illnesses (SOII) recordkeeping requirements annually.   These forms (OSHA 300, Log of Work-Related Injuries and Illnesses) have changed to include an additional column on (M5) on Hearing Loss. Use of the new forms will begin with submission of work-related injuries and illnesses that occur during calendar year 2013.  Instructions for completing the Survey of Occupational Injuries and Illnesses for the 2013 year will be mailed to facilities in January of 2014.</p>
                        </div>

                        <h4 class="title">OSHA Hazardous Communication Standard</h4>
                        <div class="content">
                             <p>OSHA has revised its Hazard Communication Standard, March 2012, 77 FR 17574, (HCS) concerning classification and labeling of chemicals.  This is recognized by health care providers as Material Safety Data Sheets (MSDS) and will now be called Safety Data Sheets (SDSs). Two significant changes contained in the revised standard require the use of new labeling elements and a standardized format for Safety Data Sheets (SDS).  Effective December 1, 2013, employers must have trained their workers on the new label elements and SDS format.  It is important that employees understand the new label and SDS formats.  The specific requirements of the revised standard will be phased in over several years (December 1, 2013 to June 1, 2016)</p>
                        
                            <p><b>Product Identifier:</b></p>
                            <p>This can be the chemical name, code number or batch number.  The manufacturer decides the identifier and must print the identifier on both the label and in Section 1 of SDS (Identification).</p>
                        
                            <p><b>Signal Word:</b></p>
                            <p>This will be used to indicate the relative level of severity of hazard and alert the reader to a potential hazard on the label.  There are only 2 signal words, “Danger” and “Warning”.  Only one will appear on the label.</p>
                            <ol>
                                <li>Danger - used for the more severe hazards</li>
                                <li>Warning - less severe hazards.</li>
                            </ol>
                            <p><b>Pictogram:</b></p>
                            <p>The required pictograms will be in the shape of a square set at a point and will include a black hazard symbol on a white background with a red frame.  A square red frame without a hazard symbol is not a pictogram and is not permitted on the label.  OSHA has designated 8 pictograms which can be used under this standard.</p>

                            <p><b>Hazard Statements(s):</b></p>
                            <p>This will describe the nature, and where appropriate, the degree of the hazard(s). i.e. “Causes damage to kidneys through prolonged or repeated exposure when absorbed through the skin”.  The hazard statements are specific to the hazard classification categories, and chemical users should always see the same statement for the same hazards, no matter what the chemical s or who produces it.</p>
                        
                            <p><b>Precautionary Statement(s):</b></p>
                            <p>A phrase that describes recommended measures to be taken to minimize or prevent adverse effects resulting from exposure to or improper handling/storage of a hazardous chemical.</p>
                            <p><b>Name, address and phone number of the chemical manufacturer, distributor, or importer:</b></p>
                        
                            <p>
                            How the employee might use the labels in the workplace, for example,
                            How information on the label can be used to ensure proper storage
                            How the information might be used to quickly locate information on first aid when needed by employees or emergency personnel.
                            General understanding of how the elements work together.  For example,
                            That where a chemical has multiple hazards, different pictograms are used to identify various hazards.
                            When precautionary statements are similar, the one providing the most protective information will be included on the label.

                            </p>
                        <p>The Hazard Communication Standard (HCS) requires chemical manufacturers, 
                            distributors, or importers to provide Safety Data Sheets 
                            (SDSs, formerly known as MSDSs) to 
                            communicate the hazards of hazardous chemical products.  
                            <b>Employers must ensure that SDSs are readily accessible to employees</b>.  By June 1, 2015, the HCS will require new SDSs to be in a uniform format and include the section numbers, the headings, and associated information under the headings below</p>
                        </div>

                        <h4 class="title">Hazard Communication Safety Data Sheets</h4>
                        <div class="content">
                            <p><u>Section 1, Identification</u>, includes product identifier; manufacturer or distributor name, address, phone number; emergency phone number; recommended use; restrictions on use.</p>

                            <p><u>Section 2, Hazard(s) identification</u> includes all hazards regarding the chemical; required label elements.</p>
                        
                        <p><u>Section 3, Composition/information</u> on ingredients includes information on chemical ingredients; trade secret claims.</p>
                        <p><u>Section 4, First-aid measures</u> includes important symptoms/effects, acute, delayed; required treatment.</p>
                        <p><u>Section 5, Fire-fighting measures</u> lists suitable extinguishing techniques, equipment; chemical hazards from fire.</p>
                        <p><u>Section 6, Accidental release measures</u> lists emergency procedures; protective equipment; proper methods of containment and cleanup.</p>    
                        <p><u>Section 7, Handling and storage</u> lists precautions for safe handling and storage, including incompatibilities.</p>
                        <p><u>Section 8, Exposure controls/personal protection</u> lists OSHA’s Permissible Exposure Limits (PELs); Threshold Limit Values (TLVs); appropriate engineering controls; personal protective equipment (PPE).</p>
                        <p><u>Section 9, Physical and chemical properties</u> lists the chemical’s characteristics.</p>
                        <p><u>Section 10, stability and reactivity</u> lists chemical stability and possibility of hazardous reactions.</p>
                        <p><u>Section 11, Toxicological Information</u> includes routes of exposure; related symptoms, acute and chronic effects; numerical measures of toxicity.</p>
                        <p>*OSHA will not be enforcing sections 12 -15 as other agencies are responsible</p>
                        <p><u>Section 16, other information</u> includes the date of preparation or last revision</p>
                    
                    </div>

                        <h4 class="title">NOTE:</h4>
                            <div class="content">
                            <p>Training on the format of the SDS must include:</p>
                            
                            <ol>
                            <li>Standardized 16-section format, including the type of information found in the various sections (see previous example)
	For example, the employee should be instructed that with the new format, Section 8 will 
              always contain information about exposure limits, engineering controls and ways to 
              protect self, including personal protective equipment,
</li>
                            <li>Section 8, Exposure controls/Personal Protection will always contain information about exposure limits, engineering controls and ways to protect self, including personal protective equipment,
</li>
                            <li>Precautionary statements on label would be the same on the SDS.
</li>
                            </ol>
                    <p>OSHA requires employers to present information in a manner and language that their employees can understand.  If the employee speaks/reads a language other than English, the employer will need to provide safety and health training in that language.  OSHA’s Hazard Communication website (http://www.oshagov/dsg/hazcom/index.html) has the following “quick cards” and OSHA briefs in English and Spanish to assist employers with training:
</p>
<ol>
    <li>Label QuickCard</li>
    <li>Pictogram QuickCard</li>
    <li>Safety Data Sheet QuickCard</li>
    <li>Safety Data Sheet OSHA Brief</li>
    <li>Label/Pictogram OSHA Brief</li>
</ol>
   </div>
    
                       <div>
                              <a href="{{ route('quizForOsha') }}"><button class='btn'>Take Quiz</button></a>
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