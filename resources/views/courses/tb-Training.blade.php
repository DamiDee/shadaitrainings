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
                                    <a class="nav-link" href="https://www.shadaihomehealth.com/contact">About</a>
                                </li>
                                
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li> -->
                                @auth
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('logout') }}">Log out</a>
                                </li>
                                @else
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('login') }}">Sign in</a>
                                </li>
                                @endauth
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('register') }}">Sign up</a>
                                </li>
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
                            <h2>TB INSERVICE</h2>
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
                        <h4 class="title_top">Define TB </h4>
                        <div class="content">
                        Tuberculosis (TB) is an airborne infectious disease that is caused by a germ that gets into the lungs. TB is spread through casual contract. It is spread when the contact takes place in confined spaces and in poorly ventilated areas that increase the risk of exposure. It can also be spread on mucous droplets of an infected person through talking, laughing, singing, yelling, breathing or coughing. 
                        Symptoms of TB may also be present in people who are not infected. These people may be a “carrier” but not be infectious.  A carrier will not show signs and symptoms but will test positive on a TB skin test.
                        </div>

                        <h4 class="title">Let’s Talk about TB</h4>
                        <div class="content">
                        <p> 
                        Before the 1940’s TB was a common disease.  TB was the leading cause of death in the United States. It has been estimated that one in seven deaths were caused by TB.  Fortunately, a cure was found and TB was significantly reduced in the United States. When it seemed we had won the war against tuberculosis, it is now becoming a serious health threat again.  During the mid 1980’s, cases of TB began to increase, especially among the HIV positive population.  New, drug resistant strains of TB have also been found.  The World Health Organization estimates 1.7 billion people are infected with tuberculosis. 
                        Healthcare workers are often exposed to diseases without their knowledge.  This is important for everyone who works in healthcare to understand TB.  Understanding symptoms and precautions is the only way to prevent getting or giving the disease. Knowledge takes the fear out of the unknown.  TB is more common among older people, especially males, foreign borne individuals and individuals who are also infected with HIV. Anyone with a compromised immune system is at a greater risk of contracting TB. 
                        In 2001, 1,145 cases of TB were reported in Florida, which made FL the 4th highest TB in the United States.  43% of the TB cases were reported in 2001 were from people outside the United States.   In 1995, it was only 15%.   23% of the reported Florida TB cases in 2001 were HIV positive. 
                        A simple TB skin test can identify those people who are either currently infected with the disease or have been exposed to it.   A chest x‐ray can then determine if the disease is present.
                        </p>
                        </div>

                        <h4 class="title">The CDC considers the following individuals at high risk for TB and recommends a TB skin test.</h4>
                        <div class="content">
                            <ol>
                                <li>Persons with signs or symptoms of tuberculosis </li>
                                <li>Persons who have had contact with a person with active TB </li>
                                <li>Persons with an abnormal chest X‐Ray suggestive of TB </li>
                                <li>Persons who inject drugs</li>
                                <li>Persons with poor or compromised immune systems</li>
                                <li> Groups at high risk of recent infection of TB (recent immigration from other countries, employees and residents of nursing homes, hospitals, prisons, and mental institutions)</li>
                            </ol> <br>
                            <p>The tuberculin test that gives the most accurate result is the Mantoux test, often call “PPD” named for the serum that is used. (Purified Protein Derivative).  The serum is injected just below the skin, usually on the forearm, and then checked in 48‐72 hours for results. If the area is red and raised, (6‐10mm) it 
could be an indication of exposure to TB or active TB. The PPD is not 100% accurate. False positives and false negatives may occur.  However, there is no better diagnostic test available.  This skin test is a screening tool and is the traditional method of diagnosing individuals infected with mycobacterium tuberculosis. </p>
                        </div>

                        <h4 class="title">Foreign Countries</h4>
                        <div class="content">
                            <p>
                            People born in foreign countries may have been vaccinated with BCG.  BCG is a vaccination for TB.  This vaccination is not widely used in the United States, but is given to infants and small children in foreign countries where TB is high.  BCG does not always protect the individual from TB. 
A PPD test should not be given to people who have been vaccinated with BCG.  BCG causes a false positive result.  These individuals need to have a chest x‐ray to determine their TB status. 
(Just in case you’re interested … BCG vaccine was named after the French scientists named Calmette and Guerin.  The “B” stands for Bacillus.)
                            </p>
                        </div>

                        <h4 class="title">Symptoms of Tuberculosis </h4>
                            <div class="content">
                                <p>Just because a person has a cough or is tired, does not mean they have TB.  TB is suspected when the symptoms last longer than three weeks, if the person has had a “positive” PPD, or if they have had a recent exposure to TB.  Many other diseases, including HIV, have some of the same symptoms, so a visit to the doctor is always recommended for accurate diagnosing. </p>
                            </div>

                        <h4 class="title">So, what are the symptoms of TB?</h4>
                            <div class="content">
                            <p>
                            Respiratory symptoms lasting more than three weeks should be evaluated, especially if they are accompanied by one or more of the following: 
                            </p>
                            <ol>
                                <li>Fatigue (tired all the time)</li>
                                <li>Malaise (generally “feeling bad”)</li>
                                <li>Loss of appetite</li>
                                <li>Weight Loss (not planned)</li>
                                <li>Fever</li>
                                <li>Night Sweats</li>
                                <li>Prolonged Coughing</li>
                                <li>Coughing Up Blood</li>
                                <li>Chest Pain</li>
                            </ol>
                        </div>
                        
                        <h4 class="title">The Difference between TB Infection and TB Disease </h4>
                            <div class="content">
                            <p>
                            There are two kinds of TB exposures. 
                            </p>
                            <ol type="disc">
                                <li>TB Infection‐ also called latent TB, or inactive TB </li>
                                <li>TB Disease‐ also called active TB</li> 
                            </ol>
                            <p>TB Infection (inactive TB) – This means that the person has the TB germ, but doesn’t look or feel sick. They cannot give another person TB.  A TB skin test, given to someone who has inactive TB, will test positive.  Sometimes, a doctor will prescribe preventative treatment.  A single medication is given, usually for 6 months, but can be given for up to one year. Only about 5‐ 10% of inactive TB cases become active TB. 
TB Disease‐ (active TB)‐ With active TB, the person usually feels sick.  The person will have a cough for 3 weeks or more, feel weak, have a fever, have weight loss, and low appetite. They may have night sweats, or cough up blood.   Sometimes, they have chest pains while coughing.  This person IS contagious unless he or she is taking TB medications as directed by a physician.  Treatment for active TB requires more than medication.  The therapy usually lasts between six months and a year.  After one to two weeks, the person is no longer contagious.  TB patients who are prescribed medication (but stop taking them before they should, are at very high risk for a stronger form of TB).  This form is resistant to the normally prescribed medications.  Stronger drugs are taken for a longer period of time required to kill this type of TB.  Without treatment, the disease will become worse.  If TB is in the lungs, it may produce phlegm, mucous, and or blood.  TB can get into other parts of the body as well, including the liver, kidneys, spine, bones and abdominal cavity.  TB disease in other parts of the body has different symptoms than with TB in the lungs.  Symptoms depend upon the part of the body that is infected. 
A positive PPD requires a chest x‐ray for complete diagnosis.  The chest x‐ray will show any damage to the lungs.  Phlegm from a persistent cough can also be tested for TB.  The test requires 3 different specimens.  They must be obtained first thing in the morning after the patient has brushed their teeth and rinsed their mouth.  A deep cough is needed to produce the phlegm, which is put into a sterile container and tested. 
If TB bacilli are present in the lungs or throat, they can be exhaled into the air by breathing or coughing.   Others can breathe in the bacilli and become infected.  This is the reason that TB patients are isolated and visitors are required to wear masks. 
</p>
                        </div>

                        <h4 class="title">How a Person Becomes Infected with TB</h4>
                            <div class="content">
                            <p>The organism, mycobacterium tuberculosis, is a bacterium.  It is carrier on drops of moisture in the air.   When the droplets are inhaled, they travel inside the lungs where they start to multiply.  Once the TB germ has entered the body, the person now has TB INFECTION (inactive TB). 
You cannot get TB by touching the person with TB or from their drinking glasses, clothing, shaking their hand or sitting on the same toilet seat. 
The immune system traps TB with its white blood cells.  The white blood cells try to destroy the bacteria to help keep the person from getting sick.  These germs go into a “sleeping state”.  The infected person usually feels fine at this point.  But often, when person is tired, run down, or the immune system is compromised by other diseases such as HIV, pneumonia, cancer, or diabetes, the germ breaks out of the capsules and begins to multiply. At his point, the person has TB DISEASE (active TB).</p>
                        </div>

                        <h4 class="title">Medication Treatment </h4>
                            <div class="content">
                                <p>
                                The type of treatment the individual will receive will depend on whether they have TB infection of TB disease.  TB infection (Inactive TB) is usually treated with a drug called “INH”, also known as Isoniazid. INH kills the TB bacteria that are in the body. If the person takes this medication as prescribed, it will 
usually keep them from getting the TB disease.  Treatment is 6‐12 months.  Side effects include loss of appetite, nausea, vomiting, yellowish eyes skin, fever, abdominal pain, and tingling in hands or feet.   Alcohol can increase the side effects and can contribute, to liver problems with these drugs, so while taking this medication, drinking alcohol not allowed. 
Multi‐drug therapy is required for TB Disease (active TB) and can include the use of Rifampin.   Rifampin can turn urine orange.  It may even turn tears or saliva orange.  Rifampin will stain contact lenses, so persons taking this drug must wear their glasses until the treatment is over.  Rifampin also causes sensitivity to the skin so a good sunscreen should be used. Rifampin may interfere with birth control pills.  Alternate birth control methods must be used during the treatment.  Alcohol should not be used while taking this drug. 
Other drugs used include Pyrazinamide and Ethembutel.  Streptomycin may also be given by injection.   TB does not normally require hospitalization.  Treatment can usually be given on an out‐patient basis through a doctor’s office. 

                                </p>
                        </div>



                        <h4 class="title">Why Health Care Workers Need to be Concerned </h4>
                            <div class="content">
                            <p>At one time, TB in the United States had almost been eliminated.  Unfortunately, because of HIV and other immune compromising diseases, it is on the rise.  Prevention is the way to control this disease.  As a healthcare provider, you have an increased risk of coming in contact with someone who has the disease.  The greater your exposure to a person with the disease the greater your risk is of becoming infected. 
In order to protect yourself you must understood all of the following: </p>
                            <ol>
                                <li>How TB is transmitted</li>
                                <li>Testing for TB infection</li>
                                <li>Wearing personal protective equipment (PPE) when in contact with people who have TB or have been exposed to TB</li>
                                <li>Reporting to your supervisor any possible exposure to TB</li>
                                <li>Participating in annual PPD screening tests.</li>
                            </ol>
                        </div>


                        <h4 class="title">PPE and Isolation Precautions </h4>
                            <div class="content">
                                <p>When working in a facility with patients who have TB, PPE (personal protective equipment) should be worn according to that facility's specific policy.   The policy and procedures should cover the use glove, gowns, masks, as well as the proper disposal of these items. 
                                    The mask you will be required to use for an individual with TB is different from the general type of masks used: A TB mask is called a respirator mask.   It's a special fitting respirator that will not allow the tiny TB particles to enter. It has a specially designee filter and is referred to as an N95 mask. 
                                </p>
                            </div>




                            <h4 class="title">Isolation procedures include</h4>
                            <div class="content">
                                <p>
                                An acid fast bacillus (AFB) isolation card should be present, instructing the health care worker to wear a mask, wear a gown, and to use gloves for touching the patient and/or all infected article.   Good hand washing is very important.   Any item in the isolation room should be treated as if it is contaminated.   There should be an isolation cart outside the room with proper PPE available for immediate use. 
Keep in mind that the air we breathe is a positive air pressure environment. A person with TB needs to be placed in a negative air pressurized room.  Negative air pressure means air flows INTO the room from the outside. The air is also filtered back to the outside, passing through specially designed filters. The air is cycled through at least six times an hour.  Remember to open doors SLOWLY to prevent air from flowing back into the building.  The door must always remain closed.  Wear a respirator mask when in a room that has known or suspected TB.  You must be fitted for a respirator mask. 

                                </p>
                            </div>


                            <h4 class="title">*** IMPORTANT TO REMEMBER ***</h4>
                            <div class="content">
                                <p>
                                It very important that the mask fits your face without leaking. TB particles are very small and can get inside a mask that doesn't fit properly. 
It you must take the patient out of the room for any reason, the patient is to wear a REGULAR SURGICAL MASK, NOT A RESPIRATOR TYPE N95, LIKE YOU WEAR TO ENTER THE ROOM!!!  This is because the respirator N95 mask ONLY filters INHALED air NOT EXHALED AIR.

                                </p>
                            </div>


                            <h4 class="title">Home Care</h4>
                            <div class="content">
                                <p>
                                Patients with newly diagnosed TB are placed on medication and when they are sent home, they are put on home isolation. This means they cannot go to any public places such as work, school, church or stores. 
How infectious a patient is, is determined   by a number of repeated   tests.  The tests must be negative for three days in a row before a patient is free to leave the home. 
As treatment continues the patient feels much better.   This means the medication is working.   If the patient does not feel better after 3 weeks of medication, the medication may not be working.   You should report this to your supervisor. 
The local public health department tests everyone living in the home for TB.  If anyone tests positive for the infection or disease they are treated with medication.  The public health department does not recommend uninfected persons leave the home unless they are very young. 
If the patient has active lung disease, with positive tests, the home care staff should wear a N9S fit‐ tested mask. 
Home care staffs do not need to take any special precautions with their bags, equipment or clothing. These items do not present any TB risk to themselves or other patients. 
Patients with active TB should be taught respiratory hygiene and cough precautions. 
                                </p>
                                <ol>
                                    <li>Always cover the mouth when coughing or sneezing</li>
                                    <li>Use two Kleenex to cover the mouth </li>
                                    <li>Practice good hand washing including, after coughing, sneezing or contact with respiratory secretions </li>
                                    <li> Avoid singing or yelling</li>
                                    <li> Family members can decrease the possibility of becoming infected by sleeping in a different room than the patient while they are contagious.</li>
                                </ol>
                            </div>




                            <h4 class="title">Summary</h4>
                            <div class="content">
                                <p>
                                TB is a disease that is spread from person to person through the air.  It is particularly dangerous to those with a weakened immune system.  TB is the leading cause of death among HIV infected people, accounting for about one in every three people infected with HIV. 
TB is preventable.  An annual TB skin test is necessary to identify exposure and begin proper treatment quickly to prevent transmission and even death. 
It is important for the healthcare worker to understand how TB is spread and take all necessary precautions to prevent transmission and even death.

                                </p>
                            </div>
                            <br><br>
                            <div>
                              <a href="{{ route('quizForTB') }}"><button class='btn'>Take Quiz</button></a>
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