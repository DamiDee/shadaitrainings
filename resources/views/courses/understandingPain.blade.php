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
                            <h2>Understanding Pain</h2>
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
                        <h4 class="title_top">What’s wrong here?</h4>
                        <div class="content">
                       <p>
                        Here are four conversations that were overheard in an assisted living facility. Each one
                        demonstrates a misunderstanding about pain. Can you identify the problem or suggest a better
                        way to think and talk about pain? Don’t worry if you don’t recognize the problem, because in this
                        lesson you will learn about pain and how to deal with it in your work.
                        </p>
                        <p>
                            <b>Mrs. Flynn:</b> “My hands are really hurting today. That medicine the doctor gave me doesn’t help very much.” <br>
                            <b>Attendant:</b> “I know how you feel. I have arthritis in my knees and they really hurt sometimes with all the walking I have to do. I guess it just gets worse the older you get, so we might as well get used to it and not complain about it.”  
                        </p><br>
                        <p>
                            <b>Attendant Mary:</b> “That Mrs. Garrett is always complaining about her pain. She takes way too much of her pain medicine if you ask me. I think she’s addicted to it.” <br>
                            <b>Attendant Alex:</b> “You’re probably right. Anyway, I don’t think she really hurts all that bad. She’s just lonely and wants some attention.”
                        </p><br>
                        <p>
                        <b>Attendant Joan:</b> “Poor Mr. Howard. He’s so confused, he doesn’t even recognize his own daughter sometimes.” <br>
                        <b>Attendant Jerry:</b> “Well, one good thing, at least he doesn’t complain about anything. Even when he fell and hurt his leg, he didn’t ever say it bothered him. I heard that when your mind goes, you don’t feel pain.”
                        </p> <br>
                        <p>
                        <b>Attendant:</b> “Good morning, Mrs. Moore. How are you feeling today?” <br>
                        </b>Mrs. Moore:</b> “I don’t like to complain.” <br>
                        </b>Attendant:</b> “Is something wrong?” <br>
                        </b>Mrs. Moore:</b> “Yes, my back is killing me and it hurts to walk, but please don’t tell anyone. If my daughter or my doctor hear about it, they’ll start doing a lot of painful tests on me and
put me in a nursing home. Just help me get up, and I’ll be okay.”
                        </p>

                        </div>

                        <h4 class="title">Common misconceptions about pain</h4>
                        <div class="content">
                            <p>Patients and workers may think that:</p>
                            <ol>
                                <li>Pain is a sign of aging.</li>
                                <li>Nothing can be done about some kinds of pain.</li>
                                <li>Pain is a punishment for past actions.
                                <li>Pain is a sign of serious illness or impending death.
                                <li>Complaining of pain is a sign of weakness.</li>
                                <li> Complaining of pain will lead to unpleasant medical tests.
                                <li>Complaining of pain will result in losing one’s independence.
                                <li>Elderly and disabled people have a higher pain tolerance.
                                <li>Confused people have a higher pain tolerance.
                                <li>People who complain of pain are just trying to get attention.</li>
                                <li>Elderly and disabled people are likely to get addicted to painkillers.</li>
                            </ol>
                            <p>In the conversations you read, which of these misconceptions about pain can you find? Write
the number of the matching misconception(s) beside the conversations on the preceding page.</p>
<p>All of these ideas are wrong. Pain is a sign that something is wrong with our bodies, and
it doesn’t occur just because we get older. Healthy older people should not have pain. If
something hurts, a physician should investigate to see if the pain is caused by a treatable
condition. If the pain is caused by a condition that cannot be improved with treatment, then the
doctor should prescribe medications that will allow the person to live without constant pain.</p>
<p>Everyone has the right to try to live without pain if it is possible to do so and the right to receive
appropriate pain management when necessary. No one should suffer unnecessarily when

treatment or relief is available.</p>

                        </div>

                        <h4 class="title">Pain: The fifth vital sign.</h4>
                        <div class="content">
                            <p>To find out whether a person is healthy or
not, we often check the four major vital
signs: blood pressure, temperature, pulse,
and respirations. In addition, we should
check to see if the person is experiencing
any pain. This is now being called “the fifth
vital sign” because we know that the
presence of pain is an indication of a health
problem that should be investigated. When
residents tell you they are having pain, or
you see nonverbal signs of pain, always
report it to your supervisor.
In addition, we must remember that
only the patient really knows how he or she
is feeling or how much pain he or she is
experiencing. The person having pain is the
only expert on this subject, and no one else
has the right to make a judgment about the

type or amount of pain an individual has.

We must always believe a person’s self-
report of pain.</p>
                        </div>

                        <h4 class="title">How do you know if someone is in pain and can’t or won’t tell you?</h4>
                        <div class="content">
                            <p>Watch for these nonverbal signs of pain:</p>
                            <ol>
                            
                            <li>Guarded movements</li>
                            <li>Facial grimacing</li>
                            <li> Rapid heartbeat</li>
                            <li>Rapid breathing</li>
                            <li>Sadness or depression</li>
                            <li>Elevated blood pressure</li>
                            <li> Restlessness or sleeplessness</li>
                            <li>Moaning, groaning, or sighing</li>
                            <li>Bracing or tensing the muscles</li>
                            </ol>
                            <p><b> Any of these symptoms should be
                            reported to your supervisor.</b></p>
                        </div>

                        <h4 class="title">Types of pain</h4>
                            <div class="content">
                                <h3>Acute pain</h3>
                                <p>Acute pain is severe and usually signals an
injury or illness that must be treated.
Kidney stones and heart attacks cause
acute pain. When the cause of the pain is
cured, the pain goes away. Acute pain can
be a symptom of serious problems that
require emergency treatment. Acute pain is
generally too intense to ignore and will often
cause people to clutch the part of the body
that hurts. This type of pain indicates that
medical attention is needed.</p>
<h3>Chronic pain</h3>
<p>Chronic pain is a persistent, ongoing pain
that lasts for weeks, months, or years.
Sometimes the pain was originally caused
by an injury or illness that was cured, but for
unknown reasons the pain continues.
There may be an incurable disease causing
the pain, such as cancer. Chronic pain can
even occur without any known injury or
illness causing it. The best that can be done
in these situations is to treat the pain,
without curing the underlying disease.
Chronic pain is not always constant and
continuous, but it can come and go.
Sometimes chronic pain becomes very
sharp or severe for a time, and then
subsides. It can be very disabling to live
with chronic pain because the pain makes it
too painful or tiring to perform everyday
activities.
Chronic pain is caused when the nervous
system keeps sending out pain signals
repeatedly. It can cause loss of appetite,
depression, irritability, and sleeplessness.
Chronic pain sufferers get caught in a
vicious cycle of exhaustion and depression
that can make the pain worse.
New medicines and treatments make it
possible to relieve even the most severe
pain. No one today should have to live with
untreated chronic pain.</p>
        <h3>Major types of chronic pain</h3>
        <p>These are some of the common kinds of
chronic pain. Each has a variety of causes.</p>
<ol>
<li>Headache</li>
<li>Low back pain</li>
<li>Cancer pain</li>
<li>Arthritis pain</li>
</ol>
<p>
<b>Angina</b>—the chest pain caused by restricted blood flow to the heart <br>
<b>Neurogenic pain</b>—this kind of pain comes from the nerve tissues and includes such painful conditions as trigeminal neuralgia,
a disease that causes severe pain in the face.
<b>Psychogenic pain</b>—this kind of pain is not due to any known disease or injury but seems to come from the brain or mind.
</p>
                            </div>

                        <h4 class="title">Major types of pain management</h4>
                            <div class="content">
                            <p>Medication prescribed by a doctor is
the best treatment for pain. There are also
nondrug treatments that caregivers can use.</p>
                                <h3>Mild exercise</h3>
                                <p>Exercise helps to increase flexibility
and strength, relieving muscle stress that
can cause backaches, headaches, and
fatigue. Exercising in warm water is
particularly good for arthritis sufferers,
because the water relaxes and supports the
muscles, making exercises easier to
perform.</p>
                            <h3>Heat or cold applications</h3>
                            <p>Warm or cool compresses applied to
a painful area can bring temporary relief for
headache, backache, and arthritis.</p>
        <h3>Massage</h3>
        <p>Massage is useful for back pain, but
any painful area that is red or swollen
should not be massaged until a doctor has
evaluated the problem.</p>
<h3>Support</h3>
<p>Sometimes a sympathetic listening
ear and a caring attitude are the best
medicine for people with chronic pain.</p>
                            
                        </div><br><br>
                        
                        <div>
                              <a href="{{ route('quizForUnderstandingPain') }}"><button class='btn'>Take Quiz</button></a>
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