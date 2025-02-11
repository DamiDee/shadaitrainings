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
                            <h2>Mental Retardation</h2>
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
                        <h4 class="title_top">Understanding Mental Retardation</h4>
                        <div class="content">
                            <p>Mental health problems are common among the elderly, the chronically ill or
disabled, and the poor. Since people with mental illness can demonstrate many different
symptoms, we often do not recognize the signs. As a result, many people do not receive the
medications or treatments that might help. Caregivers should learn how to recognize mental
illness and how to care for the mentally ill.</p>
                            <h4>WHAT IS MENTAL ILLNESS?</h4>
                            <p>Mental illness is a brain disorder that causes abnormal ways of thinking, feeling, or acting.</p>
                        </div>

                        <h4 class="title">Symptoms of abnormal thinking:</h4>
                        <div class="content">
                            <ol>
                                <li>Delusions. This means believing
things that are not true. A person might
think someone wants to kil or hurt them.</li>
                                <li>
                                Hallucinations. This means seeing or
hearing things that are not really there. A
person who is hallucinating might hear
people talking to him when no one is.
                                </li>
                                <li>
                                Confused thinking. The person might
be illogical or not understand things
happening around him.
                                </li>
                                <li>
                                Suicidal thoughts. Someone with a
mental illness might have frequent or
constant thoughts of killing him or herself.
                                </li>
                        
                            </ol>
                        </div>

                        <h4 class="title">Symptoms of abnormal behavior:</h4>
                        <div class="content">
                            <ol>
                                <li>Disruptive or anti-social behaviors.</li>
                                <li>Changes in sleeping routines.</li>
                                <li>Changes in eating habits.</li>
                                <li>Alcohol, drug, or medicine abuse.</li>
                                <li>Very slow or fast speech or
                                movements.</li>
                                <li>Agitated behavior or fits of temper.</li>
                                <li>Changes in hygiene practices.</li>
                                <li>Unwillingness to cooperate.</li>
                                <li>Easily distracted; can't pay attention.</li>
                                <li>Withdrawal from normal activities or
                                from people.</li>
                            </ol>
                        </div>


                        <h4 class="title">Symptoms of abnormal feelings</h4>
                        <div class="content">
                            <ol>
                                <li>Frequent mood changes.</li>
                                <li>Depression or sadness.</li>
                                <li>Anxiety, worry, or panic.</li>
                                <li>Irritability or anger.</li>
                                <li>Frequent crying, tearfulness.</li>
                                <li>Apathy, poor motivation.</li>
                                <li>Hopeless and/or helpless feelings.</li>
                                <li>Excessively low or high self-esteem.</li>
                                <li>Excessively energetic or euphoric.</li>
                                <li>Poor judgment, impulsiveness.</li>
                            </ol> 
                        </div>

                        <h4 class="title">TYPES OF MENTAL DISORDERS</h4>
                        <div class="content">
                            <p>Many different things cause mental health problems. Sometimes mental disorders are genetic, meaning they runin families. Mental illnesses can be caused by reactions to stressful events, by imbalances in the body's chemistry, or by a combination of several factors. This affects the person's thought processes, emotions, and/or behavior. It is important to remember that mentally ill people usually cannot control the way they think, feel, or behave. Mental illness is not the person's fault.
The seven main types of mental disorders are cognitive, dissociative, anxiety, eating, mood, personality, and psychotic disorders.
</p>
                        </div>

                        <h4 class="title">COGNITIVE DISORDERS</h4>
                            <div class="content">
                                <p>Cognitive impairment is a loss of mental abilities and awareness that occurs in varying degrees with a variety of underlying causes. In the elderly, it is usually caused by physical changes in the brain. Symptoms include loss of intellectual abilities, personality changes, forgetfulness, inability to concentrate, poor judgment, and verbal confusion. It can hinder a person's ability to do daily activities.</p> <br>
                                <p>Dementia. This disorder involves the parts of the brain that control thought, memory,
                                and language. Healthy brain tissue deteriorates, causing a steady loss ni memory and mental abilities. Strokes or changes ni the brain's blood supply may result ni the death of brain tissue. Symptoms of dementia caused by problems withblood vessels can appear suddenly,whereas symptoms develop slowly in persons with Alzheimer's disease. Although found primarily in the elderly, 50% of people with AIDS develop dementia as well.</p><br>
                                <p>Alzheimer's Disease.Thisisthe most common form of dementia among people age 65 and older. It may begin with slight memory loss and confusion, but eventually leadsto a severe, permanent mental impairment that destroys the ability to remember, reason, learn, and imagine. On the average, people die within 10 years of getting Alzheimer's.</p>
                            </div>


                            <h4 class="title">DISSOCIATIVE DISORDERS</h4>
                            <div class="content">
                                <p>These disorders come in many forms, all thought to stem from traumatic events. When an extremely stressful event occurs, the person is toooverwhelmed to process ti and tries to cope with the trauma by separating him or herself from the experience. This can lead to loss of memory or the formation of separate personalities.</p> <br>
                                <p>Dissociative identity disorder. This disorder is evidenced by two or more personalities oridentitiesthat control a person's consciousness at different times. Itused to be called multiple personality disorder.</p> <br>
                                <p>Dissociative amnesia. In this disorder the person forgets some or all ofhis personal information, such as who he is or where he lives.</p>
                            </div>

                            <h4 class="title">ANXIETY DISORDERS</h4>
                            <div class="content">
                                <p>Anxiety causes physical symptoms such as rapid shallow breathing, increased heart rate, sweating, and trembling. It can causeemotional symptoms includingalarm, dread, and apprehension. Treatment may include medication, therapy, or a combination of both.</p>
                                <p>Panic disorder. This is a sudden onset
of intense fear, apprehension, and
impending doom that may last from
minutes to hours. Approximately 1 in 3
people with panic disorder develop
agoraphobia. Persons with agoraphobia
are afraid of having attacks in public, so
they avoid leaving the house.</p>
<p>Post-traumatic stress disorder.
Persons with this disorder re-experience
the anxiety associated with a previous
traumatic event. Many times it is caused
by exposure to an extremely stresstul
event, such as abuse or rape.</p>

<p>Phobias. A person with a phobia feels
very anxious when exposed to a
particular object or situation, such as a
high place. The person fears and avoids
whatever causes the anxiety.</p>
<p>Obsessive compulsive disorder
(OCD). OCD is characterized by the
need to maintain control, order,
neatness, cleanliness, and/or perfection.
People with OCD feel compelled to
perform repetitive acts such as
handwashing or repeatedly checking to
be sure a door is locked. Luvox is one
drug used to treat this disorder.</p>

<p>Generalized anxietydisorder (GAD). This disorder may occur at anyage. It is
diagnosed after at least six months ofpersistent, excessive anxiety and worry. Drugs
used to treat many forms of anxiety disorders include Tenormin, Tranxene, Valium,
Xanax, Ativan, Centrax, Inderal, Serax, BuSpar, and Klonopin.</p>
                            </div>


                            <h4 class="title">PERSONALITY DISORDERS</h4>
                            <div class="content">
                            <p>Personality disorders are chronic conditions with biological and psychological
                            causes. Psychotherapy isthe treatment, sometimes along with medications.</p>
                            <p>Borderline personality disorder. This
disorder is characterized by impulsive
behavior, unstable social relationships,
and intense anger. These persons can
have periods of psychotic thinking,
paranoia, and hallucinations.</p><br>

<p>Obsessive-compulsive personality.
These people tend to be high achievers.
They are dependable and orderly but
can't adjust tochange and are intolerant
of mistakes. They can be uncomfortable
with relationships. This is not the same
as obsessive-compulsive disorder.</p> <br>

<p>Narcissistic personality. Persons with
this personality feel superior toothers
and expect to be admired. They are
seen as self-centered and arrogant</p> <br>

<p>Antisocial personality, formerly
called psychopathic or sociopathic
personality. People with these
disorders show noregard for the rights
and feelings of others.They do not
tolerate frustration and become hostile
or violent. They show no remorse or
guilt and blame others for their behavior.
They are prone to addictions, sexual
deviation, job failures, and abuse. Most
are male.</p> <br>

                            </div>

                            <h4 class="title">MOOD DISORDERS</h4>
                            <div class="content">
                                <p>Mood disorders usually involve chemical imbalances in the brain, and are
                                often treated with antidepressants and/or psychotherapy.</p>
                                <p>Depression. Depression causes severe, prolonged sadness. It can affect a person's thoughts, feelings, behavior, and physical health. It may develop at any age. Depressed people often look sad or expression less and lose interest in normal activities. Depression is the leading cause of disability in the U.S., affecting more women than men.
                                Older people often think sadness is part of aging or that forgetfulness, loss of appetite, and insomnia are symptoms of dementia. Depression is not a sign of old age. It is an illness and needs treatment like any other illness.</p>
                                <p><b>Drugs used in the treatment of depression:</b></p>
                                <ol>
                                    <li><b>Tricyclics: Anafranil, Elavil, Tofranil, Norpramin, Pamelor, Sinequan, Vivactil, Aventyl</b></li>
                                    <li><b>Selective Serotonin Reuptake Inhibitors (SSRIs): Celexa, Paxil, Luvox, Zoloft, Prozac</b></li>
                                    <li><b>Monoamine Oxidase Inhibitors (MAOls): Parnate, Nardil, Marplan</b></li>
                                    <li><b>Others: Desyrel, Effexor, Remeron, Serzone, Wellbutrin, Buspar, Zyban</b></li>
                                </ol>
                                <p>Bipolar disorder, also called manic depression, causes episodes of
                                severe mania (euphoria, increased energy and confidence) and depression (sadness, fatigue, poor concentration) that alternate with periods of normal mood. It occurs equally in men and women. This illness can be successfully treated with medications like Eskalith, Lithobid,Lithonate, Depakote, and Depakene.</p>
                                <p>Seasonal affective disorder (SAD). This disorder is characterized by recurrent bouts of depression in
certain months of the year, usually fall and winter. Symptoms include oversleeping, carbohydrate craving, weight gain, lethargy, and social withdrawal. SAD is treated with bright fluorescent light, which alters
the levels of brain chemicals. Sometimes antidepressants are used.</p>
                            </div>

                            <h4 class="title">PSYCHOTIC DISORDERS</h4>
                            <div class="content">
                                <p>In acute phases of psychosis, a person loses touch with reality and is unable to meet the ordinary demands of life. Most psychotic episodes are brief.</p>
                                <p>Schizophrenia. Schizophrenia is a severe and chronic brain disorder that impairs the ability to think
                                clearly, make decisions, and relate to others. Persons with this disorder suffer frightening symptoms that leave them fearful and withdrawn.</p>
                                <p>One out of every hundred people
has this treatable illness, men and
women alike. It involves problems with brain structure and chemistry.
People with schizophrenia do not have a "split personality." They may have delusions or hallucinations.</p>
<p>They cannot tell what is real and
what is not real. People with this
disorder may talk to themselves,
walk in circles, pace, and have
difficulty carrying onconversations.</p>
<p>There may be a lack of facial
expression. They may be unable to
follow through with activities they
start.</p>
<p>Schizophrenia is manageable with medication and psychotherapy. Acute
episodes are treated with hospitalization and antipsychotic drugs.</p>
                            </div>
                            <h4 class="title">TREATMENT OF MENTAL ILLNESS</div>
                            <div class="content">
                                <p>Mental health disorders are treatable, and many people recover.
Medications, psychotherapy, psychoeducation, electroconvulsive therapy, and
self-help and support groups are used in the treatment of mental illnesses.
Anything that improves a person's quality of life can help, such as pets, social
events, activities, orreality orientation classes. Many communities and facilities
are affiliated with mental health professionals that can screen for mental health
problems and conduct therapy sessions.</p>


                             <h4 class="title">MEDICATIONS</h4>
                             <div class="content">
                                <p>Many of the medicines used to treatmental illness cause unpleasant side
effects. Some of the more common ones are dry mouth, constipation, blurred
vision, appetite changes, loss ot sexual function, drowsiness, and weight gain.
Drinking 8 glasses of water a day and eating fruits and vegetables can help with
some of this. <br>
Antipsychotic drugs can cause tremors, stiffness, muscle contraction and
rigidity, restlessness, and loss of facial expression. Elderly people and those that
have taken these medicines for years sometimes develop a condition called
tardive dyskinesia. This causesuncontrolled facial movements andjerking or
twisting movements of other body parts. This condition can be treated with
medication.</p>

                        <h4 class="title">PSYCHOTHERAPY</h4>
                        <div class="content">
                            <p>Psychotherapy is the use o psychological techniques to change behaviors,feelings, thoughts, or habits. It is recommended for persons experiencing
                            emotional distress.</p>
                            <p><b>Behavior management.</b> The aim of behavior management is toincrease
the occurrence of desirable behavior by rewarding the person for acting
correctly. Unsuitable behavior is reduced by giving negative
consequences.</p>
<p><b>Cognitive therapy.</b> Cognitive therapy emphasizes a rational and positive
view. This therapy attempts to change destructive thought patterns that
can lead to disappointment and trustration. It is etfective with anxiety and
depression.</p>
<p><b>Psychoeducation.</b> Psychoeducation is teaching people about their illness, about their treatment, and how to recognize a relapse. Teaching coping skills to the family will help them deal with an il relative.</p>
<p><b> Electroconvulsive therapy.</b>  This treatment is used only for delusions and hallucinations, major depression, or serious sleep and eating disorders
that cannot be effectively treated with drugs. Sedatives are given, and
then low doses of electric shock are applied to the brain. Most people show rapid improvement.</p>
<p><b>Self-help and support groups.</b> These groups help because members give each other ongoing support. It's comforting to know others have the same or similar problems. These groups can also help families work together for needed research, treatments, and community programs.</p>                        

</div>

                             </div>
                            </div>
                            <br><br>

                        <div>
                              <a href="{{ route('quizForMentalRetardation') }}"><button class='btn'>Take Quiz</button></a>
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