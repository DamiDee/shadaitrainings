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
                            <h2>Range of motion and positioning</h2>
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
                        <h4 class="title">Course Objective</h4>
                        <div class="content">
                        <p>Participants in this lesson will be able to: <br>
                            • Explain the importance of range of motion exercises and proper positioning. <br>
                            • Demonstrate range of motion exercises. <br>
                            • Use positioning skills to assist clients with limited mobility.
                            </p>
                            <p>
                            <p>
                            Read the following quote to participants: <br>
                            “Much of what we call aging is nothing more than the
                                accumulation of a lifetime of inactivity. Muscles shrink. Body fat increases. The results are an increased
                                risk of diabetes, hypertension, obesity, and osteoporosis. By preserving muscle mass, we can prevent
                                these problems from occurring. Women are especially at risk because they have less muscle mass than
                                men have to begin with and they start to lose muscle strength more rapidly after 60. Without weight
                                training, the average woman will lose up to 40% of her muscle strength by age 65. With this increasing
                                weakness comes frailty; loss of balance and more frequent falls; difficulty in walking and in accomplishing
                                daily activities; and ultimately loss of independence in later years. An otherwise healthy woman may
                                become so profoundly weak that she has to be institutionalized.” (From Karen Lepere, fitness writer and
                                educator.)
                                Ask participants to think about clients who would be able to function more independently if they had more
                                strength and flexibility.
                            </p> 
                            </p>
                        </div>
                        <h4 class="title">Why is motion important?</h4>
                        <div class="content">
                        <p>Most people take free,
                            comfortable movement for granted.
                            Motion is meant to be smooth and
                            painless. The ligaments, tendons,
                            muscles, and joint capsules that
                            surround each joint in the body work
                            best if they are used regularly.
                            As people get older, however,
                            muscles gradually lose their strength,
                            endurance, and flexibility. We
                            experience a progressive loss of muscle
                            mass at an average rate of 4% per
                            decade from 25 to 50 years and 10%
                            per decade thereafter. In addition, the
                            joints in older people change, often
                            becoming stiff and difficult or painful to
                            move. Tissues in the joints sometimes
                            become swollen or inflamed, hindering
                            movement and making the joints more
                            prone to injury.
                            As a result, people tend to move
                            less as they age. This is the worst
                            thing we can do. Lack of activity
                            worsens the changes that occur with
                            aging. Research confirms that regular
                            exercise can slow or reverse many
                            changes associated with the age-related
                            loss of strength, endurance, and
                            flexibility.

When people are not physically
active, every cell and system in the body
is affected. The body’s cells and
systems begin to lose the ability to
perform their specialized functions.
When movement is difficult,
people experience a general

decline in quality of life. Self-
image often suffers.

Lack of activity and
exercise can lead to heart
disease, diabetes, stroke,
and other health problems.
Decreased mobility hinders
one’s ability to feed
and clothe oneself,
to grocery shop, and
to attend to personal
hygiene. It promotes mental
deterioration and loss of independence.
In addition, when muscles are not
used they continue to weaken. Muscle
weakness increases the risk of falls,
and, therefore, of fractures. The risk of
falling increases with age. Falls are the
leading cause of injury death for people
ages 65 and older.</p>

                        </div>

                        <h4 class="title">What kinds of motion are best?</h4>
                        <div class="content">
                            <p>There are four types of exercise:</p>
                            <ul>
                            <li>→strength</li>
                            <li>→ stretching</li>
                            <li>→ endurance (also known as cardiovascular)</li>
                            <li>→ range of motion</li>
                            </ul>
                            <p>Exercise benefits people of all ages. Regular exercise can slow or reverse the decrease
                                    in mobility that contributes to disease and disability in the elderly.</p>
                            <p><b><u>Strength</u></b></p>
                            <p><img src="{{ asset ('img/strength1.png' )}}" style="float:right" width="200" height="200">
                            Even a small change in muscle size can make a big difference in
strength. That’s why strength exercises are so important.
Improving muscle size by lifting small weights helps people build
their capacity to do such things as walk, climb stairs, and carry a
package. These kinds of activities can mean the difference
between keeping one’s independence and relying on others.</p>
<p><b><u>Stretching</u></b></p>
<p><img src="{{ asset ('img/strength3.png' )}}" style="float:right" width="200" height="200">
Stretching exercises that gently stretch the
muscles and tendons help ensure flexibility.
Stretching exercises do not build strength or endurance. Clinical
research has demonstrated that most elderly, even the frail, benefit
from a combination of flexibility and strengthening exercises. It helps
them maintain function and mobility, prolong independence, and
improve their quality of life.</p>
<p><img src="{{ asset ('img/strength2.png' )}}" style="float:right" width="200" height="200">
<p><b><u>Endurance</u></b></p>

Walking, running, bicycling, and swimming are examples of endurance
exercise. By spending time in motion, the body and muscles become
able to endure for longer periods of time, and the heart and lungs
become stronger.

</p>

<br>

<p><b><u>Range Of Motion</u></b></p>
Range of motion exercises are designed to increase flexibility.
Range of motion (ROM) is the normal amount a person’s joints can be moved in
certain directions, or the range in which you can move a body part around a joint.
Limited range of motion is a reduction in the normal distance and direction through
which a joint can move.
When a joint is not fully extended on a regular basis, over time it will become
permanently unable to extend beyond a certain fixed position. To keep the joints,
tendons, ligaments, and muscles loose and flexible, ROM exercises are used. These
exercises move the joints through a full range of motion, helping to prevent stiffening.
</p>
                        </div>

                        <h4 class="title">Getting started</h4>
                        <div class="content">
                            <p>
                            By doing a little exercise
                            regularly, even in small ten-minute
                            increments several times a week, it’s
                            possible to offset a variety of health
                            problems. Exercise can help produce
                            new red blood cells, strengthen the
                            immune system, and improve bone
                            density. Physical activity, even at low
                            intensity in short sessions, may reduce
                            the risk for certain chronic diseases.
                            Exercise also helps relieve depression.
                            Older adults need to
                            be up and moving
                            seven days a week.
                            They should spend
                            time 3–5 days a week
                            doing flexibility
                            exercises or walking.
                            Daily activities do not
                            move joints through
                            their full ROM.
                            Caregivers can help
                            clients improve their health by
                            encouraging them to exercise.
                            </p>
                        </div>

                        <h4 class="title">Exercise tips</h4>
                        <img src="{{ asset ('img/strength4.png' )}}" width="200" height="200" style="float: right">
                            <div class="content">
                            <p>
                          <li>→ Move joints through their full range of motion 1–2 times a day.</li>
                          <li>  → Do each exercise 3–10 times.</li>
                          <li>  → Move slowly. Do not bounce.</li>
                          <li> → Breathe while you exercise. Count aloud.</li>
                          <li> → Begin exercises slowly, doing each exercise a few times and
                            gradually building up.</li>
                            <li> → Try to achieve full range of motion by moving until you feel a slight stretch, but
                            don’t force a movement.</li>
                            <li> → Stop exercising if you have severe pain.</li>
                            <li> → Encourage clients with limited mobility to bear weight during transfers
                            from bed to chair, and to walk whenever possible.</li></p>
                            
                        </div>

                        <h4 class="title">Range of motion exercises that can be done while seated</h4>
                            <div class="content">
                            <p><b>Neck</b><br>
                             (Breathe with the movements, breathing out when the head moves down, breathing in when it moves up. Don’t let shoulders or upper body sway to the side.) <br>
                                1. Turn head slowly to the right, then to the left. Repeat three to four times. <br>
                                2. Tilt head toward one shoulder, then toward the other shoulder. Repeat 3–4 times.
                            </p>
                            <p>
                            <b>Arms and shoulders</b> <br>
                                1. Raise shoulders up toward ears and hold. Make full circles: up, forward, down, 
                                 and back. <br>
                                2. Take a deep breath, extend arms overhead. Exhale slowly, dropping arms.
                            </p>
                            <p>
                           <b>Hands and fingers</b> <br>
                            1. Massage each hand, one at a time. Take your time; go in between each finger. <br>
                            2. Raise hands up and back. Slowly rotate hands down and around in circles. <br>
                            3. Close hand in a fist. Open hands fully, stretching fingers and thumbs out wide.
                            </p>
                            <p>
                            <b>Chest and upper body</b><br>
                                1. With hands on waist, tilt to the right, return to center, then tilt to the left and return
                                to center. Exhale as the movement goes down; inhale as the movement comes
                                up. Don’t allow upper body to tilt forward. Don’t try to hold head up; instead, let it
                                relax to the side. <br>
                                2. Sit straight in chair with hands on your hips. Gently rock hips from side to side.
                            </p>
                            <p>
                            <b>Legs</b><br>
                                1. Raise right leg up and forward. Repeat with left leg. <br>
                                2. Sit up straight, knees together, with legs extended forward as far as possible, keeping feet on floor. Slowly stretch forward, sliding both hands down to ankles.
Hold 10–15 counts. <br> 
                                3. Grasp one knee with both arms, pull to chest, and hold for five counts. Repeat
with opposite leg. 
                            </p>
                            <p>
                            <b> Ankle and Foot</b> <br>
                                1. Point toes toward floor. Point toes toward ceiling. Slowly rotate feet in circles. <br>
                                2. Cross right leg over left knee. Rotate foot slowly, making large complete circles—
                                ten rotations to the right, ten to the left. Repeat for left leg.
                            </p>
                            </div>
                        
                        <h4 class="title">Passive range of motion exercises</h4>
                            <div class="content">
                            <p>
                            When an individual is able to perform range of motion exercises with minimal
                                        assistance, the person is doing active range of motion. When an individual is unable to
                                        perform range of motion exercises, a caregiver should move the person’s joints in
                                        passive range of motion exercises at least once or twice a day.
                                        Use the chart below to guide you in moving every joint in the body through its full
                                        range of motion. Go slowly and be very gentle. Do not force any body part to move in
                                        any way that creates resistance or causes discomfort.
                            </p>
                            
                        </div>

                        <h4 class="title">Know these terms</h4>
                            <div class="content">
                            <ol type="disc">
                                <li>Flexion: forward bending</li>
                                <li> Extension: straighten out</li> 
                                <li>Hyperextension: backward bending<li>
                                 <li>Lateral flexion: sideways bending.</li>
                                <li>Internal rotation: turn toward the body</li>
                                <li>External rotation: turn away from the body.</li>
                                <li>Circumduction: move in a circle</li>
                                <li>Abduction: move away from the body(think of “abduct,” or “take away”)</li>
                                <li>Adduction: move toward and/or across the body (think “add to the body”)</li>
                                <li>Inversion: move or twist inward</li>
                                <li>Eversion: move or twist outward</li>
                                <li>Supination: turn or lie upward; face up</li>
                                <li>Pronation: turn or lie downward; face down</li>
                            </ol>
                            <img src="{{ asset ('img/strength5.png' )}}" width="600" height="500" style="float: "> 
                            <img src="{{ asset ('img/strength6.png' )}}" width="597" height="300" style="padding-left:15px;">
                        </div>

                        <h4 class="title">POSITIONING</h4>
                            <div class="content">
                            <p>Everyone positions themselves when they sit,
stand, move, and lie down. The position we use for
these activities affects circulation, joint pressure,
and muscle use.</p> 
<p>People with limited mobility who sit or lie
down for long periods of time are prone to skin
breakdown and deterioration of muscles or nerves. Using correct
positioning can prevent these problems. It is important to limit
pressure over bony parts of the body by changing positions. Use pillows to keep knees
and/or ankles from touching each other. Clients who are bedridden should avoid lying
directly on their hipbones when on their sides. Help clients to use positions that spread
weight and pressure evenly, with pillows placed to provide support and comfort.</p>
        <p>A person in a chair or wheelchair should use a cushion. Avoid donut-shaped
        cushions because they reduce blood flow and cause tissue to swell. People sitting in
        chairs or wheelchairs should change positions every hour. Good posture and comfort
        are both important.</p>
</div>

                    <h4 class="title">Some basic rules of positioning</h4>
                    <div class="content">
                        <ol>
                            <li>→ Always be familiar with a client’s plan of care. Specific issues such as fractures,
skin integrity, and health condition will determine the type of positioning that should
be done.</li>
<li>Turn individuals who cannot turn themselves at least every two hours when in bed.
A person in a wheelchair should change positions at least every hour. External
pressure from staying in one position compresses the skin’s blood vessels and
obstructs circulation, especially over the bones, leading to skin breakdown.</li>
<li>When moving a client, lift rather than drag. Dragging creates friction and heat,
which can lead to skin breakdown.</li>
<li>Straighten sheets and clothing to remove wrinkles.</li>
                        </ol>
                    </div>
                    <h4 class="title">Bed positioning tips</h4>
                    <div class="content">
                        <ol>
                            <li>Position the spine in alignment.</li>
                            <li>Position the hips straight without leg rotation.</li>
                            <li>Position the upper extremities away from the body.</li>
                            <li>Support the arms when the client is lying on his side.</li>
                            <li>Keep the knee joints flexed 15 degrees when the client is supine (lying on the back).</li>
                            <li>Turn the client from side to side and prone (lying face down) on a scheduled basis.</li>
                            <li>Keep the head in a straight, midline position.</li>
                        </ol>
                    </div>
                <h4 class="title">Positions</h4>
                <div class="content">
                    <h5 class="title">Supine (on back)</h5>
                    <ol>
                        <li>→ Place a pillow under the head.</li>
                        <li>→ Place pillows under both arms. When bedridden clients lie on their back with forearms and palms facing down, pressure can damage wrist nerves.</li>
                        <li>→ Place pillows under legs from midcalf to ankle to keep heels off the bed. Do not put a pillow under the knees only, as doing so will cause the heel to rub against the bed.</li>
                        <li>→ Hand rolls (Roll washcloths and place in hands to prevent freezing of finger joints).</li>
                        <li>→ Use foot-positioning devices such as shoes, boots, and footboards.</li>
                    </ol>
                    <h5 class="title">Lying on side</h5>
                    <ol>
                        <li>→Position client up in bed if needed.</li>
                        <li>→ Position client to one side of bed. Turn client by sliding arm under the shoulders and head; lift upper body over, then move hips and legs.</li>
                        <li>→ Cross the client’s top ankle over the bottom ankle, or flex top knee.</li>
                        <li>→ Turn the client by placing one hand on the shoulder and one hand on the hip.</li>
                        <li>→Place pillow under head and another behind client’s back.</li>
                        <li>Support flexed extremities with pillows and positioning devices.</li>
                        <li>Ensure proper body alignment.</li>
                    </ol>

                    <h5 class="title">Prone (on stomach)</h5>
                    <ol>
                        <li>→ Lift client toward you.</li>
                        <li>→ Bend arm up around head.</li>
                        <li>→ Place other arm at side.</li>
                        <li>→ Place pillow under abdominal muscles.</li>
                        <li>→ Roll client on stomach.</li>
                        <li>→ Support ankles with pillows.</li>
                    </ol>
                    <h5 class="title">Positioning while seated</h5>
                    <ol>
                        <li>→Seat client in a chair that supports the back.</li>
                        <li>→Keep ears in line with the hips.</li>
                        <li>→Support the curve of the lower back with a rolled up towel or lumbar roll.</li>
                        <li>→Knees should be level with the hips.</li>
                        <li>→Feet should be flat on the floor or on a footrest.</li>
                        <li>→ Support ankles with pillows.</li>
                    </ol>
                <h5 class="title">Positioning while standing (To help clients learn balance when using walkers or canes.)</h5>
                <ol>
                  <li>→Position the feet a few inches apart.</li>
                  <li>→Position the hips in front of the ankles.</li>
                  <li>→Position the shoulders over the hips.</li>
                  <li>→Keep the head balanced over the hips.</li>
                  <li>→Keep the spine straight.</li>
                </ol>
                <p>Range of motion
                    exercises and proper
                    positioning can help prevent
                    the permanent disabilities
                    and life-threatening
                    complications that often
                    result from immobility.
                    Caregivers need to intervene
                    to prevent physical decline
                    and deterioration. We can
                    accomplish this by keeping
                    clients moving.
                </p>
                </div> <br><br>
                <div>
                    <a href="{{ route('quizForRangeOfMotion') }}"><button class='btn'>Take Quiz</button></a>
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