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
                            <h2>Dementia</h2>
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
                        <h4 class="title_top">Understanding dementia</h4>
                        <div class="content">
Dementia is an <b>organic*</b> mental disorderinvolving a
general loss ofintellectual abilities and changes in the
personality. <br> <b>*"Organic"</b> means the disorder is caused by
physical changes in the brain.
                            <h4>Many different things cause dementia. The most
                            common. in order ofoccurrence, are:</h4>
                            <ol>
                                <li>Alzheimer's disease</li>
                                <li>Strokes and other blood vessel diseases</li>
                                <li>Parkinson's and other nervous system diseases</li>
                                <li>Miscellaneous causes such as alcoholism, malnutrition, head injuries, drug reactions,
thyroid disease, brain tumors, and infections.</li>
                            </ol>
                        </div>

                        <h4 class="title">Important things to remember about dementia</h4>
                        <div class="content">
                            <ol>
                                <li>
                                    Adult dementia sufferers deserve the respect and
                                    status they have earned. They often do not know
                                    their abilities have changed, and do not
                                    understand why people treat them differently.
                                    They must be given as many opportunities as
                                    possible to make decisions and retain control
                                    over their lives.
                                </li>
                                <li>
                                    With the right environment and support, a
                                    patient's ability to function can be strengthened
                                    and improved. If those supports are removed,
                                    the resident's function will decline.
                                </li>
                                <li>
                                    The deficiencies caused by dementia affect all
                                    areas of a person's life. Although the disability Is
                                    invisible, it affects the patient's ability to do even
                                    the smallest activities.
                                </li>
                                <li>
                                The way a person with dementia behaves is not
just the result of impaired brain functions.
Behavior is often caused by efforts to meet
needs while compensating for lost abilities.
                                </li>
                                <li>
                                We can help people with dementia by trying to
                                understand what they feel and think.
                                </li>
                            </ol>
                        </div>

                        <h4 class="title">The results of dementia</h4>
                        <p>
                        1. Memory Loss: <br>
                            - Affects recent memories the most <br>
                            - Makes to difficult to learn anything new or to follow instructions <br>
                        2. Language loss (the meaning of words): <br>
                            - Makes it difficult to recognize words and
                              understand complex sentences.  <br>
                            - Makes it difficult to express ideas <br>
                        3. Attention loss:  <br>
                            - Unable to start or stop a task <br>
                            - Easily distracted <br>
                        4. Judgment loss: <br>
                            - Cannot accurately assess circumstances <br>
                            -Unable to see consequences of actions <br>
                        5. Loss of perception or senses  <br>
                            - Unable to recognize things or people <br>
                            - Misinterpret what they see, hear, or feel <br>
                        6. Loss of muscle organization: <br>
                            - Unable to perform multiple step tasks <br>
                            - Require prompts or cues for routine tasks
                        </p>
                        <h4 class="title">Communication tips</h4>
                        <div class="content">
                            <ol>
                                <li>Be open, friendly, and gentle at all times.</li>
                                <li>Always address the person by name to get his
                                attention at the beginning of an interaction.
                                </li>
                                <li>Briefly introduce yourself and offer some cues
when you approach, stating your name and
relationship and the purpose of your visit.</li>
                                <li>Use gentletouching or hand holding, but get
                                permission first.</li>
                                <li>Avoid arguing and attempts to reason with a
person who Is upset. Acknowledge nis or ner
feelings and calmly distract him or her with
something calming, pleasant, and friendly.</li>
                            </ol> <br>
                            <p> <b>Dementia is like looking at the world, and being
                            seen by others, through a runhouse mirror.</b></p>
                        </div>

                        <h4 class="title">Ways to help a patient perform a task:</h4>
                        <div class="content">
                            <ol>
                                <li>Explain each step ni simple language, one thing at a time.</li>
                                <li>Demonstrate each step, doing the task while he or she watches.</li>
                                <li>Move the person through the steps ofthe task,
                                placing arms and legs in the right positions.</li>
                                <li>If distracted, begin again at the beginning.</li>
                                <li>Remember to be patient and unhurried</li>
                            </ol>
                            
                        </div>

                        <h4 class="title">Case Studies: What Would You Do?</h4>
                            <div class="content">
                                <p>Mr. Blair is not normally incontinent. Recently, however, he has begun walking outside to relieve himself. Sometimes the workers find he has urinated in his wastebasket. Occasionally he wets himself. He has started to wander, and he often seems anxious and agitated.</p><br>                  
                                <p><b>What caregivers may assume:</b> Mr. Blair has lost the ability to control his bladderand should be placed in adult incontinent briefs.</p><br>
                                <p><b>What is really happening:</b> Mr. Blair cannot find the toilet. He spends much of the day looking for a place to urinate, but when he can't find one he relieves himself outside or in a waste basket, most of which are brightly colored and easy to see.</p> <br>
                                <p><b>Try this:</b> Place a brightly colored toilet seat or toilet cover on Mr. Blair's toilet to help him locate it. If you notice Mr Blair wandering anxiously or acting agitated, ask if you can help him find a bathroom and then guide him to one.</p><br> <br><br>
                                <p>
                                Miss Mead was a nurse for forty years. She refuses to eat. She doesn'teat the food you bring, but places the dishes on her windowsills and cabinets "for the others." She is losing weight rapidly but refuses ot eat.</p>
                                <p><b>What caregivers may assume:</b> Miss Mead wil have to be placed in a hospital and fed with a stomach tube because of her refusal to eat. </p>
                                <p><b>What is really happening:</b> Miss Mead is concerned for the "others" that she sees ni her room. She believes that her reflections in the mirrors and
                                windows are actually people that need her to care for them. She will not eat until she feeds them first.</p>
                                <p><b>Try this:</b> Ask questions to determine what Miss Mead is trying to do. Once you understand the situation, remove the mirrors from Miss Mead's room. Cover the windows with blinds or shades. You could
                                provide two trays of food, one for Miss Mead and one for "the others."</p>
                                <p>Mrs. Allen is usually cooperative and pleasant. One day you find her wandering through the house, opening room doors and trying to get out an exit door. When you try to steer her back to her room, she becomes resistant, standing stilland loudly shouting that she won't go with you. When you take her hand to guide her along, she swings at you with her other hand.
                                </p>
                                <p><b>What caregivers may assume:</b> Mrs. Allen must be progressing in her disease and should now
                                be classified as "aggressive." She may need additional medication or evaluation in a hospital.</p>
                                <p><b>What is really happening:</b>Mrs. Allen is thirsty (changes ni the brain oftenmake people with dementia very thirsty). She knows something is wrong and that she needs something, but she doesn't understand the sensation she isfeeling. She also doesn't know how to meet the need, or what she
should do to find water. So she is wandering the
house looking for some cue that wil help her know what she needs to do. When you try to prevent this activity, she naturally becomes angry at your efforts to keep her from meeting an important need. She feels she is defending herself from someone who is trying to harm her.</p>
                            <p><b>Try this:</b> Help Mrs. Allen figure out what she needs. Askquestionstodeterminewhysheis
                            wandering around. Did she lose something? Is she hungry? Is she thirsty? Does she need company? Is she bored? Makethe questions simple and direct, allowing for yes or no answers. fI she cannot answer your questions, try bringing her a glass of water or a piece of fruit. Check to see fi she has soiled her clothing or needs to change into dry clothes. Once you have determined what Mrs. Allen needs and have met that need, she is more likely to return to her normal activities.</p>

</div>

                        <div>
                              <a href="{{ route('quizForDementia') }}"><button class='btn'>Take Quiz</button></a>
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