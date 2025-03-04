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
                            <h2>Strokes and Seizures</h2>
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
                       <b>What is a seizure?</b><br>
                       <b>What is epilepsy?</b><br>
                       <b>What causes seizures?</b><br>
                       <b> What are some types of seizures?</b><br>
                       <b> Responding to a seizure</b><br>
                       <b>What is stroke?</b><br>
                       <b>What are the symptoms of stroke?</b><br>
                       <b>What is transient ischemic attack?</b><br>
                       <b>Who is at risk for stroke?</b><br>
                       <b>Responding to a TIA or stroke</b>
                        </p>
                        </div>

                        <h4 class="title">Seizure disorder</h4>
                        <div class="content">
                            <p>About 2.3 million people in the United States have some form of epilepsy, also
called seizure disorder. For the vast majority of cases, no single cause has been
determined. People with epilepsy often struggle to overcome low self-esteem and the
stigma that is attached to having seizures. Some people mistakenly believe that
epilepsy is a form of mental illness or mental retardation. The truth is that many people
with seizure disorders lead productive and outwardly normal lives.</p>
                           
                        </div>

                        <h4 class="title">What is a seizure?</h4>
                        <div class="content">
                            <p>A seizure is rhythmic jerking of the body or an involuntary change in body
movement, sensation, awareness, or behavior. It can last from a few seconds to a few
minutes. Seizures are sometimes called convulsions.</p>
                        </div>

                        <h4 class="title">What is epilepsy?</h4>
                        <div class="content">
                            <p>The word epilepsy is used when more than one seizure in a row has occurred. If
someone has a single seizure they are not usually said to have epilepsy. The terms
epilepsy and seizure disorder are often used interchangeably. The onset of epilepsy is
most common in children and the elderly.</p>
                            
                        </div>

                        <h4 class="title">When is a seizure not epilepsy?</h4>
                            <div class="content">
                                <ol>
                                    <li>First seizures</li>
                                    <li>Febrile (caused by high fever) seizures</li>
                                    <li>Eclampsia seizures (in pregnancy)</li>
                                    <li>Arthritis pain</li>
                                </ol>
                                <p>Symptoms experienced by a person during a seizure depend on where in the
brain the disturbance in electrical activity occurs.</p>
                            </div>

                        <h4 class="title">Why are seizures harmful?</h4>
                            <div class="content">
                                <p>A person can be injured during a convulsion, because the body is moving
                                    uncontrollably. Also, the brain can be starved of oxygen during long seizures. This can
                                    lead to brain damage. Repeated seizures or seizures that last longer than 20–30
                                    minutes can damage the brain’s neurons (nerve cells).</p>
                            </div>
                        
                            <h4 class="title">What causes seizures/epilepsy?</h4>
                            <div class="content">
                                <p>A seizure occurs when neurons generate uncoordinated electrical discharges
that spread throughout the brain. Anything that disturbs the normal pattern of nerve cell
activity can lead to seizures. Neurons are very sensitive to abnormal electrical impulses.
Illness, injury, an imbalance of the chemicals in the brain that carry messages between
nerve cells, and brain abnormalities can be responsible for seizure. Some examples:</p>
                            <ol>
                           <li> Heart attacks and strokes, or any condition that deprives the brain of oxygen.
                            Proper treatment of heart disease and high blood pressure can prevent some
                            cases of epilepsy.</li>
                            <li> Metabolic disturbances: alcohol withdrawal, severe liver disease, kidney disease.</li>
                            <li> Infections such as meningitis and AIDS. Good treatment may prevent seizures.</li>
                            <li> Brain tumors or head injury. Wearing seat belts and cycle helmets and using
                            child car seats can prevent brain injury and therefore prevent this type of seizure.</li>
                            <li> Presence of certain drugs or stopping certain drugs suddenly (such as narcotics).</li>
                            <li>Illicit drug use, like cocaine, heroine, or PCP.</li>
                            <li> Alzheimer’s disease.</li>
                            <li> Neurodegenerative disorders, such as multiple sclerosis.</li>
                            <li>Inherited disorders and genetic factors.</li>
                            </ol>
                       </div>

                       <h4 class="title">What are some types of seizures?</h4>
                            <div class="content">
                                <p>There are many different kinds of seizures. Following are four types:</p>

                            <ol>
                           <li> A grand mal, or tonic-clonic seizure, involves the entire body in a convulsion.
When a person has this type of seizure he or she may cry out, fall to the floor
unconscious, twitch or move uncontrollably, drool, or even lose bladder control. It
usually lasts for 5–20 minutes. When the seizure is over and the person regains
consciousness, he or she feels exhausted and dazed. This is the image most
people have when they hear the word epilepsy. Sometimes people experience
warning signs beforehand, such as unusual smells, visual changes, or feelings.
This warning is called an aura.</li>
                            <li> A complex partial seizure causes a person to appear confused or dazed. He will
not be able to respond to questions or direction..</li>
                            <li>A petit mal (pet-ee mal), or absence seizure, causes a brief loss of
consciousness without other symptoms. There is no warning. This type of seizure
is not noticeable in some people. The person may briefly stop what he or she is
doing, stare for 5–10 seconds or blink rapidly, then continue his or her activity.
The person becomes unresponsive, appears to be daydreaming, and cannot be
aroused during this time.</li>
<li>Status epilepticus is prolonged, repetitive seizure activity that last more than 20–
30 minutes while the person is unconscious. It is a medical emergency and can
result in death if not treated aggressively. It is caused by certain medications,
stroke, infection, trauma, cardiac arrest, drug overdose, and brain tumor.</li>
                            </ol>

                            </div>

                            <h4 class="title">How is epilepsy treated?</h4>
                            <div class="content">
                            <p>There are several ways to treat
epilepsy. Treatments can control
seizures some of the time in about 80%
of people with epilepsy. Once epilepsy
is diagnosed, it is crucial that treatment
begin as soon as possible.
There are many different
medications and a variety of surgical
procedures that may provide good
control of seizures. Some people are
helped with special diets.
People with seizure disorders
should carry an ID card or wear a
bracelet that tells about their condition,
their medications, and their doctor’s
name and phone number.
Medications to control seizures
are called anticonvulsants. These must
be taken regularly as directed, without
missing doses. Missed doses may
cause a single seizure, several seizures,
or death.

People with severe seizures who
don’t take their medications have a
shorter life expectancy and more risk of
cognitive impairment.
Common anticonvulsants are
Dilantin (phenytoin), Tegretol
(carbamazepine), Depakene (valproate),
and phenobarbital. These medications
should be taken with food or milk to
prevent stomach problems.
Anticonvulsant medications can
cause changes in a person’s mental
status, including mood and behavior.
They can also affect speech, balance,
the eyes, the stomach, and the gum
tissue in the mouth. Changes in any of
these areas must be reported. Good
oral hygiene will help prevent gum
problems.</p>
                            </div>

                            

                            <h4 class="title">What should you do if you see someone having a seizure?</h4>
                            <div class="content">
                           <li> Roll the person on his or her side to prevent choking on any fluids or vomit.</li>
                           <li> Loosen any tight clothing around the neck</li>
                           <li> Keep the person’s airway open. If necessary, grip the person’s jaw gently and tilt his or her head
back.</li>
<li>DO NOT restrict the person from moving unless he or she is in danger.</li>
<li> DO NOT put anything into the person’s mouth, not even medicine or liquid. These can cause
choking or damage to the person’s jaw, tongue, or teeth. Contrary to widespread belief, people
cannot swallow their tongues during a seizure or at any other time.</li>
<li>Remove any sharp or solid objects that the person might hit during the seizure.</li>
<li> Note how long the seizure lasts and what symptoms occurred so you can report it as soon as
possible to your supervisor, or to emergency personnel if needed.</li>
<li>Stay with the person until the seizure ends. After a seizure ends, the person may be sleepy and
tired. He or she may have a headache and be confused or embarrassed. Be patient with the
person. You may need to help him or her clean up.</li>
                            </div>


                            <h4 class="title">When is a seizure an emergency situation? Call for help if</h4>
                            <div class="content">
                                <ol>
                                <li>the person does not begin breathing again and return to consciousness after
the seizure stops.</li>
<li> another seizure begins before the person regains consciousness.</li>
<li>the person injures himself or herself during the seizure.</li>
                                </ol>
                            </div>


                            <h4 class="title">Stroke</h4>
                            <div class="content">
                            <p>About 600,000 Americans will have a stroke this year. More than 160,000 will die
from it. Two-thirds of all strokes happen to people over age 65. Stroke risk doubles
every ten years past age 55. Many of the causes of stroke can be controlled, and rapid
treatment when stroke occurs can save lives and prevent permanent damage. May is
American Stroke Month.</p>
                            <h3 class="title">What is a stroke?</h3>
                                <p>A stroke is a “brain attack,”
meaning it occurs in the same
way a heart attack does, only it
affects the brain instead of the heart. A
stroke occurs when the blood supply to
part of the brain is suddenly cut off. This
can happen when a blood clot blocks a
blood vessel or when a blood vessel
breaks and spills blood into the brain. As
a result, brain cells in the affected area
die. The cells usually die within minutes
to a few hours after the attack starts.
When brain cells die, they release
chemicals that start a chain reaction,
killing even more brain cells in a bigger
area.

When brain cells die, the
abilities that are controlled by that
area of the brain are lost. This can
include speech, movement, and
memory, depending on where in the
brain the stroke occurs and how many
brain cells are killed. A small stroke
might cause weakness of an arm or leg.
A large stroke might cause paralysis on
one side of the body or loss of the ability
to speak and understand language.
People can sometimes recover
completely from minor strokes, but a
severe stroke can be fatal. Rapid
treatment is the key to preventing death
and paralysis. Stroke is an emergency!</p>
<h4 class="title">What are the symptoms of stroke?</h4>
<p>The five most common stroke symptoms include:</p>
<ol>
<li> Sudden numbness or weakness of face, arm, or leg, especially on one side of the
body.</li>
<li> Sudden confusion, trouble speaking, or trouble understanding.</li>
<li>Sudden trouble seeing in one or both eyes.</li>
<li> Sudden dizziness, trouble walking, or loss of balance or coordination.</li>
<li>Sudden severe headache with no known cause.</li>
</ol>
<p>Call 911 if you see any of these symptoms in someone.
Treatment is much more effective if given soon after the attack.
Every minute can make a difference in preventing serious damage or death.
Get emergency help even if the symptoms are painless or go away quickly.</p>
<p>Some other less common stroke symptoms include:</p>
<ol>
<li> Sudden nausea, fever, and vomiting. This is different from a viral illness because it
comes on very quickly, in minutes or hours instead of over several days.</li>
<li> Brief loss of consciousness or a period of decreased consciousness, such as
fainting, confusion, convulsions, or coma.</li>
</ol>
<p>These symptoms should be reported to medical personnel immediately.</p>
</div>

<h4 class="title">What is transient ischemic attack?</h4>
<div class="content">
    <p>A transient ischemic attack (TIA)
is a stroke that lasts only a few minutes
and goes away quickly. A TIA occurs
when the blood supply to part of the
brain is briefly interrupted. The
symptoms are similar to those of stroke,
but they usually disappear within an
hour.

Only a doctor can tell whether
stroke symptoms are from a TIA or a
serious stroke. You should assume that
all stroke-like symptoms require
emergency help. Don’t wait to see if
they go away. TIAs are often warning
signs that a person is at risk for a more
serious stroke.</p>
</div>
<h4 class="title">Who is at risk for stroke?</h4>
<div class="content">
    <p>People over age 65, African-Americans, people with diabetes, men, and people
with a family history of stroke are at greater risk of brain attack than the rest of the
population. These things cannot be controlled. People with diabetes, however, can lower
their risk of stroke with treatment.
Many things that increase the risk of stroke can be controlled or treated, such as:</p>
<ol>
<li>High blood pressure—untreated high blood pressure increases stroke risk four to
six times. Blood pressure is too high if it is usually more than 140/90.</li>
<li>Heart disease—some heart conditions increase stroke risk by up to six times.</li>
<li>High cholesterol—this increases the risk of stroke by clogging blood vessels.</li>
<li>Personal history of stroke or TIA—people who have had a stroke or TIA are at risk
for having another stroke. 35% of those who experience TIAs have a stroke within
5 years.</li>
<li> Sleep apnea—people who do not breathe for periods of time while they are
sleeping develop low levels of oxygen in the blood, possibly leading to blood clots
and stroke.</li>

<li>Smoking—cigarette or cigar use doubles the risk of stroke by
damaging blood vessels.</li>
<li>Alcohol—excessive alcohol consumption is associated with
stroke in some studies.</li>
<li>Weight—excess weight puts a strain on the blood vessels
and is often linked to high blood pressure, high cholesterol, and diabetes.</li>
</ol>
<h4 class="title">What should you do if you see someone having a stroke? Call 911!</h4>
<h4 class="title">52% of the stroke patients in one study were not aware they were experiencing
a stroke. Most strokes are recognized by someone other than the victim.</h4>
<p>The National Stroke Association urges everyone to know the 3 Rs of stroke:</p>
<img src="{{ asset( 'img/stroke.png' )}}" alt="">

<h4 class="title">Seizures and strokes learning activity</h4>
<div class="content">
    <p>Read the stories below, and then decide how you would respond in each situation.</p>
    <p>1. You find a client on the floor. Her arms and legs are jerking and thrashing around, and
it appears that she has wet herself. She does not respond when you call her name.
What is the first thing you should do? List five or six things you should do to respond
to this client’s seizure.</p>
            a. ____________________________________________________________
            b. ____________________________________________________________
            c. ____________________________________________________________
            d. ____________________________________________________________
            e. ____________________________________________________________
            f. ____________________________________________________________

        <p>2. After the client in the first scenario has stopped convulsing, she does not open her
eyes or respond when you call her name. After a minute or two she begins convulsing
again. How should you respond now?</p>
____________________________________________________________
<p>You are helping a client with a shower. Suddenly the client begins acting strangely.
He doesn’t seem to understand what you are saying to him, and he appears
confused. This is not normal behavior for this client.</p>
<p>
What is this a possible symptom of? _________________________________
How should you respond to this problem? ____________________________
</p>
<p>You notice that your client is not using his right arm like he usually does. He is letting
the arm hang at his side while he uses his left hand to do things. When you ask him
about it, he says his arm is feeling weak today, but he’s sure it will pass. What, if
anything, should you do about this?</p>
____________________________________________________________
</div>
<h3 class="title">Seizures and strokes learning activity answer key</h3>
<p>1. You find a client on the floor. Her arms and legs are jerking and thrashing around, and
it appears that she has wet herself. She does not respond when you call her name.
What is the first thing you should do? List five or six things you should do to respond
to this client’s seizure.</p>
<p>
a. <u>Roll her on her side to prevent choking.</u>
b. <u>Loosen any tight clothing around her neck.</u>
c. <u>Keep her airway open.</u>
d. <u>Remove anything sharp or solid that she might hit.</u>
e. <u>Report what is happening to a supervisor or medical personnel as soon as
possible.</u>
f. <u>Stay with the client until she is fully conscious and calm.</u>
</p>
<p>2. After the client in the first scenario has stopped convulsing, she does not open her
eyes or respond when you call her name. After a minute or two she begins convulsing
again. How should you respond now?</p>
<p> 
    <u>Call for emergency medical help.</u>
    <u>Status epilepticus, or repetitive seizure activity, is life-threatening.</u>
</p>


<p>3. You are helping a client with a shower. Suddenly the client begins acting strangely.
He doesn’t seem to understand what you are saying to him, and he appears
confused. This is not normal behavior for this client.

What is this a possible symptom of? <u>It could be a stroke.</u>
How should you respond to this problem? <u>Call for emergency medical help.</u></p>
<p>You notice that your client is not using his right arm like he usually does. He is letting
the arm hang at his side while he uses his left hand to do things. When you ask him
about it, he says his arm is feeling weak today, but he’s sure it will pass. What, if
anything, should you do about this?
<u>This is a symptom of possible stroke. Call for emergency medical help.</u></p>

</div><br> <br>

                        <div>
                              <a href="{{ route('quizForStrokeAndSeizure') }}"><button class='btn'>Take Quiz</button></a>
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