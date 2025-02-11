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
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
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
                            <h2>ACHC</h2>
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
                        <h4 class="title_top">Cultural Diversity History</h4>
                        <div class="content">
                         First introduced in 2000 by the Department of Health and Human Services' Office of Minority Health, 
                         and then updated in 2010, the National Standards for Culturally and Linguistically Appropriate Services in Health 
                         Care work to increase cultural competence in the health care industry. Among these standards is a cultural diversity 
                         training recommendation. Since then, a number of federal agencies, including the Joint Commission on 
                         Accreditation of Health Care Organizations and the Centers for Medicare and Medicaid Services, 
                         have adopted the national standards and require health care professionals to receive cultural 
                         competence training.
                        </div>

                        <h4 class="title">Workforce Diversity Training</h4>
                        <div class="content">
                            <ul>
                                <li>Internal training focuses on the beliefs, attitudes and expectations of a culturally diverse workforce. The emphasis is on teamwork, developing good interpersonal relationships and maintaining effective work performance. </li>
                                <li>Cultural diversity is essential to maintaining a balanced organization. In global organizations whose operations include business dealings and affiliations in other countries, understanding cultural differences is key to successful business partnerships.</li>
                                <li>Employees should be aware of the importance of respecting the cultural differences of others, and employers can offer training to increase awareness and to better equip employees to function in a diverse workplace.</li>
                            </ul>
                        </div>

                        <h4 class="title">Importance of Cultural Diversity</h4>
                        <div class="content">
                            <ol>
                                <li>Recognizing and respecting cultural differences in the workplace is essential to a company’s organizational structure and the health of its human resources. </li>
                                <li>Companies with employees of culturally diverse backgrounds recognize the benefits of having people with different perspectives, problem-solving skills and creativity. </li>
                                <li>Many companies benefit from multilingual employees.</li>
                                <li>Training is key to helping employees with different backgrounds understand and respect each other's differences so they learn to collaborate and achieve the company's goals</li>
                            </ol>
                        </div>

                        <h4 class="title">Common Diversity Issues</h4>
                        <div class="content">
                            <li>It is not uncommon for companies to hire employees of various nationalities and ethnic groups.</li>
                            <li>Issues such as differences in pay or differing treatment of employees because of cultural differences could be perceived as discrimination.</li>
                            <li>Issues such as differences in pay or differing treatment of employees because of cultural differences could be perceived as discrimination.</li>
                            <li>By emphasizing awareness of and promoting sensitivity to cultural issues, employers can show they recognize the contributions and value of all workers.</li>
                        </div>

                        <h4 class="title">Importance of Cultural Competence</h4>
                            <div class="content">
                                <li>Cultural competence relates to the quality of the day-to-day interactions and relationships between health care providers and patients. </li>
                                <li>Unlike workforce diversity training, which affects patients indirectly, cultural competence affects patients directly. </li>
                                <li>For example, the quality of patient interactions, including communication, determines how well or whether a patient is able to communicate symptoms, follow instructions and participate in his care. It also affects whether a patient feels respected or disrespected, as both an individual and a member of a cultural group.</li>
                            </div>

                        <h4 class="title">Cultural Competence Training</h4>
                            <div class="content">
                          <ul>
                                <li>Working with a diverse patient population requires ongoing training that provides workers with specific knowledge, abilities and skills. </li>
                                <li>For example, health care workers must understand common cultural barriers to preventing and treating conditions or disease. </li>
                                <li>When interacting with patients, an ability to ask questions tactfully and respectfully and negotiate between a patient’s cultural interpretation of a condition or disease and treatment expectations and options is crucial to good patient care. </li>
                                <li>Practical skills such as using a telephone or working with an interpreter are also important.</li>
                            </ul>
                        </div>
                        
                        <h4 class="title">Employee Relations</h4>
                            <div class="content">
                            <ol type="disc">
                                <li>The lack of cultural diversity or the perception of disrespect for other cultures can be detrimental to partnerships. </li>
                                <li>Organizational leaders can benefit from understanding the differences in the way operations at other organizations are structured.</li> 
                                <li>Cultural differences are not limited to ethnicity and race relations; they extend to areas of religious views, sexuality and even differences in geographical differences pertaining to the location of one’s upbringing.</li>
                                <li>Consideration should be given to each of these areas when evaluating the organizational balance. </li>
                                <li>Managers should demonstrate sensitivity to employees who express concern regarding the ability to interact with others in the group. </li>
                                <li>In some cases, communication may be hindered due to cultural differences.</li>
                                <li>Moving past these barriers requires training and sensitivity to the differences of the employees and ensuring that other employees recognize this importance as well.</li>
                            </ol>
                        </div>

                        <h4 class="title">Prevention and Education</h4>
                            <div class="content">
                                <li>A complete understanding of cultural diversity is imperative for successful business operations</li>
                                <li>Mandatory diversity training for managers should be incorporated as part of a developmental learning process to ensure managers can effectively deal with diversity issues</li>
                                <li>By staying abreast of federal guidelines governing employment discrimination and the importance of cultural diversity and employment practices, managers become equipped on how to handle conflicts in the organization that may stem from these differences. </li>
                                <li>Managers with an understanding of the importance of cultural diversity also can key in on employee relations and retention.</li>
                    
                            </div>

                        <h4 class="title">Workplace Discrimination Laws</h4>
                            <div class="content">
                                <li>A company’s leaders are charged with ensuring compliance with federal laws that govern the equal treatment of employees regardless of race, ethnicity, religious views and many other individual traits. </li>
                                <li>When employees believe they are treated differently because of their individualism, this perception could lead to legal trouble for the company. </li>
                                <li>The U.S. Equal Employment Opportunity Commission prohibits companies from discriminating against employees for any reason.</li>
                                <li>Allegations of discrimination in the workplace, if proved, could result in financial penalties for the company. </li>
                                <li>The EEOC website provides information about employment laws and ways to avoid discrimination for both employers and employees.  <a href="https://www.eeoc.gov">www.eeoc.gov</a></li>
                            </div>



                        <h4 class="title">Customer Service</h4>
                            <div class="content">
                            <ol>
                                <li>Cultural diversity training and education is important to support the customer service efforts of an organization. </li>
                                <li>Providing quality customer service across many cultures requires a solid understanding of what different cultures consider appropriate behavior.</li>
                                <li>Diversity training will help businesses understand what barriers are affecting key customer relationships as well as improve communication between employees and their clients.</li>
                            </ol>
                        </div>


                        <h4 class="title">Tips on Culture Diversity in the Workplace</h4>
                            <div class="content">
                                <li>Attempts at cultural diversity in the workplace have been met with mixed reviews, according to <a href="https://www.AdminSecret.com">AdminSecret.com.</a></li>
                                <li>To a small business owner, diversification may mean hiring only a handful of workers from different cultural backgrounds. </li>
                                <li>However, due to the highly interdependent nature of the small-business work force, it is critical that diversity is implemented successfully.</li>
                            
                            </div>




                            <h4 class="title">Learn to Communicate</h4>
                            <div class="content">
                               <li>You may need to communicate differently with workers from other cultures.</li>
                               <li>For example, some cultures do not openly praise workers in front of others, preferring that it be done in private.</li>
                               <li>You may need to read and study about the differences in your worker home culture to build trust and avoid offending them.</li>
                            </div>
                            
                            <h4 class="title">Train Frequently</h4>
                            <div class="content">
                               <li>To ensure that workers fully understand policies and procedures, you may need to spend additional time on training and orientation so that there are no ambiguities.</li>
                               <li>For example, you may need to spend extra time covering areas such as sexual harassment or general behavior so employees are clear as to how you expect them to act.</li>
                               <li>If you have a dress code, you may also need to clarify what attire is appropriate.</li>
                               <li>Cultural diversity training can help employees improve their performance by creating a workplace free of judgments and stereotypes. Although employees may have certain opinions about their co-workers, diversity training will help employees recognize the behaviors that could possibly create a hostile or uncomfortable work environment.</li>
                               <li>Educational activities about cultural variations also provide employees with a level of understanding about other cultures they may not have had before.</li>
                            </div>

                            <h4 class="title">Orient Current Workers</h4>
                            <div class="content">
                               <li>You may also need to spend some time getting your current workers to accept a more diverse work force. </li>
                               <li>This may include sensitivity or diversity training that allows employees to understand the difficulties people from different cultures may have in adapting.</li>
                               <li>You should also attempt to identify any issues your current workers may have with the implementation of a multicultural work force.</li>
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
                            
                        <div class="col-lg-4 right-contents">
                                <div class="sidebar_top">
                                    <a href="" class="btn_2 d-block">Take Quiz</a>
                                </div>
                            </div>
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