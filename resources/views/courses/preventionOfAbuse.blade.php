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
                            <h2>Prevention Of Abuse</h2>
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
                        <h4 class="title_top"><b>A 2012 National Survey on Abuse of People with Disabilities showed that:</b></h4>
                        <div class="content">
                        <ul>
                            <li>70% of people with disabilities said they had been a victim of abuse and/or bullying. While emotional and verbal abuse was most prevalent, a majority of victims said they had also experienced physical abuse.</li>
                            <li>90% of people with disabilities who were victims of abuse said they had experienced such abuse on multiple occasions.</li>
                        </ul>
                        </div>

                        <h4 class="title">General Signs and Symptoms of Abuse</h4>
                        <div class="content">
                        <b>Behavioral:</b>
                            <ol>
                                <li>Tearful, cries easily, emotionally upset.</li>
                                <li>Child-like behavior such as thumb-sucking, rocking, biting because the person is regressing.</li>
                                <li>Loss of interest in activities once enjoyed because the person feels constantly criticized.</li>
                                <li>Increased irritability and complaining.</li>
                                <li>Self-isolation.</li>
                                <li>Self-medication or substance abuse.</li>
                                <li>Changes in behavior that are extreme.</li>
                            </ol>

                            <b>Emotional:</b>
                            <ol>
                                <li>Eating issues.</li>
                                <li>Increased worry.</li>
                                <li>Anxiety and depression.</li>
                                <li>Low self-esteem: May believe everyone hates him or her, that he or she is no good; may feel criticized, humiliated, belittled, embarrassed.</li>
                                <li>Self-blaming; "It's all my fault." The person may feel responsible for doing something to cause this to happen.</li>
                            </ol>
                            <p>Encourage the person to communicate the cause of such feelings or behavior in order to rule out other possible causes for such symptoms. If the individual does communicate being abused in some manner, it is important to report this to AWC supervisory staff immediately. There are no exceptions to reporting abuse or neglect immediately!</p>
                       </div>

                        <h4 class="title">Defining Abuse:</h4>
                        <div class="content">
                        <p>As per ODP, following are the Types of abuse:</p>
                        <ol>
                            <li>Physical abuse</li>
                            <li>Psychological/emotional abuse</li>
                            <li>Sexual abuse</li>
                            <li>Verbal abuse</li>
                            <li>Improper/unauthorized use of restraint</li>
                            <li>Financial abuse/misuse of funds</li>
                            <li>Neglect</li>
                            <li>Individual to individual abuse</li>
                            <li>Rights violation</li>
                        </ol> 
                        <p><b>Office of Developmental Programs (ODP) mandates that abuse must be reported to the state within 24 hours of the occurrence of the incident.</b></p>
                    </div>

                        <div class="content">
                            
                                <p>1. Physical abuse is an intentional physical act by a person, which causes or may cause physical injury. There must be intent in the act, but actual injury is not required. Only the possibility of injury resulting from the act is required.
                                Physical abuse includes, but is not limited to:</p>
                                <ul>
                                    <li>Striking, hitting, kicking, scratching, slapping, biting, pushing, pinching, or forcibly pulling someone.</li>
                                    <li>Applying potentially harmful substances or conditions; intentionally subjecting an individual to any condition or substance that could be potentially harmful, such as forcing an individual to ingest alcohol or an illegal drug against his or her will.</li>
                                </ul>
                        
                        </div>

                        <h4 class="title">Signs of Physical Abuse</h4>
                        <div class="content">
                            <img class="img-fluid" src="{{ asset('img/abuse1.png') }}" style="width: 500px; height: 500px;" alt="Signs of Physical Abuse">
                            <p>It is the caregiver's responsibility to assure the individual that he or she is safe, and that the caregiver is there to help in any way needed. Listen, be supportive and reassuring.</p>
                            <ul><li>• Failure or neglect to report abuse or suspicions of abuse is abuse itself.</li></ul>
                        </div>

                        
                            <div class="content">
                            <p> 2. Psychological and/or emotional abuse consists of acts, other than verbal, which are intended to:</p>
                                <ul>
                                    <li>Inflict emotional harm (ex: intentionally ignoring an individual requesting attention)</li>
                                    <li>Invoke fear or humiliation (ex: laughing at an individual's mistakes)</li>
                                    <li>Intimidate (ex: posturing or showing body language that appears threatening)</li>
                                    <li>Degrade or demean (ex: showing disgust or disdain towards an individual's actions, especially in front of others)</li>
                                </ul>
                                Psychological/emotional abuse is typically used when someone wants to control an individual with fear, humiliation, and degradation. Psychological/emotional abuse can be a passive form of abuse. The general signs and symptoms of abuse are usually experienced by someone who has been abused psychologically or emotionally.
                            </div>
                            
                            <div class="content">
                            <p>3. Sexual abuse consists of acts or attempted acts of:</p>
                            <ul>
                                <li>Rape.</li>
                                <li>Incest.</li>
                                <li>Sexual harassment.</li>
                                <li>Inappropriate or unwanted touching by another.</li>
                                <li>Any sexual exposure or contact from agency staff.</li>
                                <li>Unwanted sexual exposure or contact from another individual.</li>
                                <li>Inappropriate sexual contact can be heterosexual or homosexual, and can include intercourse, fondling, exposure to pornographic material
                                and sexually explicit conversation that is offensive to or is done against the will and/or without the consent of the individual.</li>
                            </ul>
                            <p>Based on surveys, 42 % of individuals with disabilities reported having been victims of sexual abuse. 34% of those had intellectual/developmental disabilities. An adult with Intellectual Developmental Disability (IDD) has the right to (a) be sexually active
(b) Clearly understands this right and the consequences that can accompany it (c) Why, when, and how to say "No" and how to get help.
</p>
                            </div>

                            <h4 class="title">Signs of sexual abuse can include:</h4>
                            <div class="content">
                                <ul>
                                    <li>Difficulty walking and/or sitting</li>
                                    <li>Torn, stained, bloody clothing</li>
                                    <li>Genital pain or itching</li>
                                    <li>External genitalia bruising/bleeding</li>
                                    <li>Dramatic changes in behavior</li>
                                    <li>Sexually transmitted disease</li>
                                    <li>Pregnancy</li>
                                    <li>Inappropriate knowledge</li>
                                    <li>Nightmares</li>
                                    <li>Bedwetting</li>
                            </div>

                            <div class="content">
                            <p>4. Verbal abuse consists of verbalizations that are intended to:</p>
                                <ul>
                                    <li>Inflict emotional harm-"You're so dumb!"</li>
                                    <li>Invoke fear or humiliation -"If you make a mess at dinner again, you are going to be sorry!"</li>
                                    <li>Intimidate -"Come on, I dare you to do it again!"</li>
                                    <li>Degrade or demean-"Get your pants off! The doctor needs to check you out!"</li>
                                </ul>
                            <p>If a caregiver feels frustrated or stressed, it is best for the caregiver to excuse him/herself from the situation, ask another person to step in, or if alone, to step away-keeping the individual within sight until able to regain composure and professionalism rather than verbalizing hurtful thoughts. It is important to consider another's feelings before making statements that could cause emotional harm, fear, or humiliation. Developing positive relationships and means of open communication with individuals can help to prevent stressful situations resulting in incidents of verbal abuse.</p>
                            </div>

                            <div class="content">
                                <p>5. Financial abuse or Exploitation is an intentional act by someone to deprive, defraud or otherwise take an individual's money or personal property in an unfair or cruel way, against their will, or without consent or knowledge for his or her own benefit.</p>
                                <ul>
                                    <li>Requiring an individual to pay for a service that is normally provided.</li>
                                    <li>Requiring an individual to pay for items used by several individuals.</li>
                                    <li>Stealing an individual's money or personal items.</li>
                                    <li>Applying pressure to be a co-signer on a bank account.</li>
                                </ul>
                                <p>Financial abuse and Exploitation steal power and control and ultimately choice from an individual.</p>
                                <p>6. Neglect is the failure to obtain or provide the basic services and supports necessary that a person needs to develop physical, intellectual, and emotional capacity and overall well- being.
                                </p>
                                <p>These services/supports are defined by the person's individual support plan (ISP) and by laws and regulations. Neglect does not require intent or obvious harm. It is simply failure to provide needed care.
                                    </p>
                            </div>

                            <h4 class="title">SIGNS OF NEGLECT</h4>
                            <div class="content">
                            <ul>
                                <li>Lack of supervision</li>
                                <li>Lack of necessities - food, clothing, shelter</li>
                                <li>Lack of medical care</li>
                                <li>Unattended personal hygiene</li>
                                <li>Unsanitary living conditions</li>
                                <li>Unsafe living conditions</li>
                            </ul>
                            </div>

                            <h4 class="title">WHEN AN INDIVIDUAL REPORTS ABUSE</h4>
                            <div class="content">
                                <p>Self-reports of Abuse should be reported immediately.</p>
                                <ul>
                                    <li>Acknowledge the individual.</li>
                                    <li>Never dismiss or ignore self-reports of abuse.</li>
                                    <li>Ensure individual's immediate safety and well-being.</li>
                                    <li>Seek professional assistance as needed.</li>
                                    <li>Report per agency guidelines and state regulations.</li>
                                    
                                </ul>
                            </div>
                            <h4 class="title">ALLEGATIONS OF ABUSE</div>
                            <div class="content">
                                <p>Even though an allegation has yet to be proved or supported by evidence, ODP requires that all allegations of abuse be reported.</p>
                                <b>Remember:</b>
                                <ul>
                                    <li>•All allegations of abuse are reportable.</li>
                                    <li>•Allegations can come from a victim or other eyewitnesses.</li>
                                    <li>•Allegations cannot always be proven but must always be reported.</li>
                                </ul>
                            </div>
                             <h4 class="title">SUPPORT FOR VICTIMS OF ABUSE</h4>
                             <div class="content">
                             <p>To best support individuals of abuse, intervene as needed.</p>
                                • Take over care of the individual.<br>
                                • Ensure the individual's well-being by seeking medical services and law enforcement
                                assistance as needed.<br>
                                • Immediately contact a supervisor to report the abuse and request assistance.<br>
                                <p>Reassure the individual who has been victimized, "It was not your fault. You are safe. I am here to help you."</p>
                                <b>• DO: Believe, Respect, Support, Assist</b><br>
                                <b>• DON'T: Doubt, Judge, Blame, Punish </b><br>
                                Seek professional help as needed.
                            </div>

                        <h4 class="title">PREVENTION OF ABUSE</h4>
                        <div class="content">
                            <p>With the help of the following methods or activities one can seek to reduce or deter specific or predictable problems, protect the current state of well-being, or promote desired outcomes or behaviors.
                            </p>
                        <p>• Education and Training. <br>
                        • Talk about it. Make a plan.<br>
                        • Proper reporting procedures.</p>
                        </div>


                        
                    </div>
            
                            
                    </div>
                    <br><br>
                        <div>
                              <a href="{{ route('quizForPreventionOfAbuse') }}"><button class='btn'>Take Quiz</button></a>
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