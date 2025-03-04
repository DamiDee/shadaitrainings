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
                            <h2>Respiratory Disorder</h2>
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
                        <h4 class="title_top">Learning guide</h4>
                        <div class="content">
                           Respiration means breathing. In this lesson you will learn about the respiratory tract, also called the respiratory system. This is the passage that air goes through as we breathe in and out. The respiratory tract contains these important parts:
                        </div>

                        <h4 class="title">The upper respiratory tract</h4>
                        <div class="content">
                        <p>
                        → Nose—warms the air breathed and filters out bacteria and debris. Nasal breathing is important for best lung function.<br>
                        → Sinuses—cavities (holes) in the skull. They connect to the nasal passage and are lined with nasal tissue.<br>
                        ↓ Pharynx—passage way that conducts air from the nose to the voicebox.The pharynx also conducts food from the mouth to the esophagus, the tube that leads to the stomach.<br>
                        ↓ Epiglottis—flap that covers the entrance to the voicebox when we swallow.Itprevents food and liquids from getting into the lungs.<br>
                        ↓ Larynx—the voicebox,located between the pharynx and the windpipe(trachea).<br>
                        ↓ Trachea—windpipe.This is the airway connecting the larynx to the tubes leading to the lungs (bronchi).<br>
                        </p>
                        <img src="{{ asset ('img/resp1.png' )}}" width="300" height="300"> 
                        </div>

                        <h4 class="title">The lower respiratory tract</h4>
                        <div class="content">
                            <p>↓ Bronchi—twotubesthatleadfromthetracheatothelungs.The bronchi divide into many smaller airways, called bronchioles
                                <img src="{{ asset ('img/resp2.png' )}}" width="100" height="100" style="float: right"> <br>
                               ↓ Lungs—pairoflargespongyorgansthattakeoxygenoutofthe air we breathe and exchange it for carbon dioxide in our blood.
                                <img src="{{ asset ('img/resp3.png' )}}" width="100" height="100" style="float: left"><br>
                                ↓ Alveoli—millionsoftinyairsacsinthelungs,
                                surrounded by tiny blood vessels called capillaries. This is where the exchange of
                                oxygen and carbon dioxide takes place. These sacs look like bunches of grapes.
                                <img src="{{ asset ('img/resp10.png' )}}" width="100" height="100" style="float: left"><br>
                                → Pleura—a membrane that covers the lungs and helps them move freely.
                                </p>
                        </div>

                        <h4 class="title">How the Respiratory System Works</h4>
                        <div class="content">
                            <p>
                            The respiratory tract inhales oxygen into the lungs, transfers the oxygen to the blood, and exhales carbon dioxide. Breathing is usually automatic, controlled subconsciously by the respiratory center at the base of the brain. The brain senses when oxygen levels are too low or carbon dioxide levels are too high and increases the speed and depth of breathing. Normal respiration occurs 12–20 times a minute. <br>
                            All cells in the body need oxygen. They get oxygen when the body breathes in air that the blood can circulate to all parts of the body. Breathing is accomplished with the help of the diaphragm, a set of muscles lying across the bottom of the chest cavity. Oxygen is pulled into the lungs when the diaphragm contracts. Carbon dioxide is pumped out when the diaphragm relaxes. <br>
                            Air inhaled through the nose is filtered, moistened and warmed in the nasal passages. Air goes down the pharynx, into the trachea, through the larynx and into the two large bronchi. The bronchi branch into smaller airways that conduct the air into the lungs. The inhaled oxygen diffuses into the blood through the many capillaries. The blood exchanges carbon dioxide for oxygen. The carbon dioxide is then exhaled. <br>
                            Oxygenated blood travels from the lungs through the pulmonary veins and into the left side of the heart, which pumps the blood to the rest of the body.
                            <img src="{{ asset ('img/resp4.png' )}}" width="200" height="100" style="float: left">
                            The blood delivers its oxygen to the tissues and picks up and distributes nutrients and waste products, then returns to the heart and gets pumped back to the lungs to pick up oxygen and get rid of carbon dioxide.
                            <img src="{{ asset ('img/resp5.png' )}}" width="100" height="100">
                            Elimination of carbon dioxide is just as important as getting oxygen. A buildup of carbon dioxide leads to headaches, drowsiness, and even death.
                            </p>
                        </div>

                        <h4 class="title">Fast facts:</h4>
                            <div class="content">
                            <p>Chronic Obstructive Pulmonary Disease (COPD) accounts for more than 100,000 deaths every year. It is the fourth most common cause of death in the U.S.</p>
                            <p> People with asthma are almost 60% more likely to develop lung cancer. Each year more than 25,000 people in the U.S. get tuberculosis (TB).</p>
                        </div>

                        <h4 class="title">Problems that develop in the respiratory tract</h4>
                            <div class="content">
                            <p> There are many disorders and infections of the respiratory system. Infections occur more frequently in the respiratory tract than in any other organ in the body. Examples of upper respiratory infections include the common cold, sinusitis, and influenza (flu). Lower respiratory problems include infections such as bronchitis and pneumonia and disorders like emphysema and asthma. Some of the more serious ones are described in the following pages.</p>
                        </div>
                        
                        <h4 class="title">Upper respiratory infections</h4>
                            <div class="content">
                            <p>Influenza (Flu)</p>
                            <p>Influenza is a highly contagious infection of the upper respiratory tract. It is caused by a virus and spreads easily through coughing and sneezing. Influenza can lead to pneumonia and death and is responsible for epidemics that occur almost every winter. Flu vaccine can prevent influenza.
                            <img src="{{ asset ('img/resp6.png' )}}" width="200" height="200" style="float: right">
                            Influenza virus is generally passed from person to person by airborne transmission. However, the virus can live for a short time on objects such as pens, pencils, keyboards, and telephone receivers. Touching those objects can transmit the virus.
                            </p>
                            <p>Symptoms of influenza include high fever, headache, sneezing, coughing, sore throat, severe aches and pain, and fatigue. The most common complications of flu are respiratory disorders, especially bronchitis. Pneumonia is the most serious complication.
                            </p>
                            <p>
                                Treatment includes bed rest and increased fluids, antiviral drugs, and medication to relieve aches and fever. Most people recover in a week, but many flu victims feel exhausted for 3–4 weeks. Getting the annual flu shot, washing hands frequently, and avoiding contact with infected persons can prevent influenza.
                                <img src="{{ asset ('img/resp7.png' )}}" width="200" height="200" style="float: right">
                            </p>
                         
                        </div>

                        <h4 class="title">Lower respiratory infections</h4>
                            <div class="content">
                                <h3>Pneumonia</h3>
                                <p>Pneumonia is the most common and most serious type of lung infection. It can be caused by a virus that is inhaled or by bacteria that gets in through the mouth. Pneumonia causes the alveoli to fill with liquid that blocks the exchange of oxygen in the lungs. The lack of oxygen combined with the spread of infection can cause death.</p><br>
                                <p>Pneumonia caused by bacteria is spread from person to person through secretions from the nose, mouth, and throat. Symptoms may include high fever, chills, severe chest pain, and a cough that produces mucus. Bacterial pneumonia can come on gradually or suddenly. It often follows what appears to be an ordinary respiratory infection.</p><br>
                                <p>Bacterial pneumonia can develop 4– 14 days after an apparent recovery from the flu, especially in people with heart disease. Fever returns, along with a cough that produces mucus. This disease can progress rapidly from flu to serious pneumonia, and it often causes death.</p><br>
                                <p>Pneumococcal pneumonia is the most common type of bacterial pneumonia. It can be prevented with immunization and hand washing.</p><br>
                                <p>Pneumonia caused by a virus resembles the flu at first, with fever, dry cough, headache, muscle pain, weakness, and shortness of breath. Careful hand washing can help prevent its spread.</p>
                                
                                <h3>Tuberculosis</h3>
                                <p>Tuberculosis (TB) is an airborne infectious disease that is caused by an organism known as mycobacterium tuberculosis that gets into the lungs. TB is spread through casual contract. It is spread when the contact takes place in confined spaces and in poorly ventilated areas that increase the risk of exposure. It can also be spread on mucous droplets of an infected person through talking, laughing, singing, yellow breathing or coughing.</p> <br>
                                <p>The organism, mycobacterium tuberculosis, is a bacterium. It is carrier on drops of moisture in the air. When the droplets are inhaled, they travel inside the lungs where they start to multiply. Once the TB germ has entered the body, the person now has TB INFECTION (inactive TB). You cannot get TB by touching the person with TB or from their drinking glasses, clothing, shaking their hand or sitting on the same toilet seat.</p> <br>
                                <p>The immune system traps TB with its white blood cells. The white blood cells try to destroy the bacteria to help keep the person from getting sick. These germs go into a “sleeping state”. The infected person usually feels fine at this point. But often, when person is tired, run down, or the immune system is compromised by other diseases such as HIV, pneumonia, cancer, or diabetes, the germ breaks out of the capsules and begins to multiply. At his point, the person has TB DISEASE (active TB).</p>
                                
                                <h3>Types of TB</h3>
                                <p>TB Infection (inactive TB) – This means that the person has the TB germ, but doesn’t look or feel sick. They cannot give another person TB. A TB skin test, given to someone who has inactive TB, will test
positive. Sometimes, a doctor will prescribe preventative treatment. A single medication is given, usually for 6 months, but can be given for up to one year. Only about 5‐ 10%
of inactive TB
cases become
active TB.</p><br>
<img src="{{ asset ('img/resp8.png' )}}" width="200" height="200" style="float: right">
<p>TB Disease‐ (active TB) ‐ With active TB, the person usually feels sick.
The person
will have a
cough for 3
weeks or more, feel weak, have a fever, have weight loss, and low appetite. They may have night sweats, or cough up blood. Sometimes, they have chest pains while coughing. This person IS contagious unless he or she is taking TB medications as directed by a physician. Treatment for active TB requires more than medication. The therapy usually lasts between six months and a year. After one to two weeks, the person is no longer contagious. TB patients who are prescribed medication (but stop taking them before they should, are at very high risk for a stronger form of TB). 
This form is resistant to the normally prescribed medications. Stronger drugs are taken for a longer period of time required to kill this type of TB. 
Without treatment, the disease will become worse. If TB is in the lungs, it may produce phlegm, mucous, and or blood. 
TB can get into other parts of the body as well, including the liver, kidneys, spine, bones and abdominal cavity. 
TB disease in other parts of the body has different symptoms than with TB in the lungs. 
Symptoms depend upon the part of the body that is infected.</p><br>
<p>
    A positive PPD requires a chest x‐ray for complete diagnosis. 
    The chest x‐ray will show any damage to the lungs. Phlegm from a persistent cough can also be tested for TB. 
The test requires 3 different specimens. They must be obtained first thing in the morning after the patient 
has brushed their teeth and rinsed their mouth. A deep cough is needed to produce the phlegm, 
which is put into a sterile container and tested.</p><br>
<p>If TB bacilli are present in the lungs or throat, 
they can be exhaled into the air by breathing or coughing. 
Others can breathe in the bacilli and become infected. 
This is the reason that TB patients are isolated and 
visitors are required to wear masks.</p><br>
<h3>Background on TB</h3>
<p>Before the 1940’s TB was a common disease. TB was the leading cause of death in the United States. It has been estimated that one in seven deaths were caused by TB. Unfortunately, a cure was found and TB was significantly reduced in the United States when it seemed we had won the war against tuberculosis, it is now becoming a serious health threat again. During the mid-1980’s, cases of TB began to increase, especially among the HIV positive population. New, drug resistant strains of TB have also been found. The World Health Organization estimates 1.7 billion people are infected with tuberculosis. Healthcare workers are often exposed to diseases without their knowledge. This is important for everyone who works in healthcare to understand TB.</p><br>                        
 <p>Understanding symptoms and precautions is the only way to prevent getting or giving the disease. Knowledge takes the fear out of the unknown. TB is more common among older people, especially males, foreign borne individuals and individuals who are also infected with HIV. Anyone with a compromised immune system is at a greater risk of contracting TB. In 2001, 1,145 cases of TB were reported in Florida, which made FL the 4th highest TB State in the US. 43% of the TB cases were reported in 2001 were from people outside the
United States. In 1995, it was only 15%; 23% of the reported Florida TB cases in 2001 were HIV positive.
</p><br>
<p>People born in foreign countries may have been vaccinated with BCG. 
BCG is a vaccination for TB. 
This vaccination is not widely used in the United States, 
but is given to infants and small children in foreign countries where TB is high. 
BCG does not always protect the individual from TB. A PPD test should not be given to people who have been vaccinated with BCG. 
BCG causes a false positive result. These individuals need to have a chest x‐ ray to 
determine their TB status. (Just in case you’re interested ... 
BCG vaccine was named after the French scientists named Calmette and Guerin. The “B” stands for Bacillus.)</p><br>
<h3>Symptoms of Tuberculosis</h3>
<p>Just because a person has a cough or is tired, does not mean they have TB. 
TB is suspected when the symptoms last longer than three weeks, if the person has had a “positive” PPD, 
or if they have had a recent exposure to TB. Many other diseases, including HIV, have some of the same symptoms, 
so a visit to the doctor is always recommended for accurate diagnosing. 
Respiratory symptoms lasting more than three weeks should be evaluated, especially 
if they are accompanied by one or more of the following:</p>
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
<h3>Testing</h3>
<p>A simple TB skin test can identify
those people who are either currently infected with the disease or have been exposed to it. A chest x‐ray can then determine if the disease is present.
The CDC considers the following individuals at high risk for TB and recommends a TB skin test.</p>
<ol>
    <li>Persons with signs or symptoms of tuberculosis</li>
    <li>Persons who have had contact with a person with active TB</li>
    <li>Persons with an abnormal chest X‐ Ray suggestive of TB</li>
    <li>Persons who inject drugs</li>
    <li>Persons with poor or compromised immune systems</li>
    <li>Groups at high risk of recent infection of TB (recent immigration from other countries, employees and residents of nursing homes, hospitals, prisons, and mental institutions)</li>
</ol>
<p>The tuberculin test that gives the most accurate result is the Mantoux test, often call “PPD” named for the serum that is used. (Purified Protein Derivative). The serum is injected just below the skin, usually on the forearm, and then checked in 48‐72 hours for results. If the area is red and raised, (6‐10mm) it could be an indication of exposure to TB or active TB. The PPD is not 100% accurate. False positives and false negatives may occur. However, there is no better diagnostic test available. This skin test is a screening tool and is the traditional method of diagnosing individuals infected with mycobacterium tuberculosis.</p>
<h3>Concerns for Health Care Workers</h3>
<p>At one time, TB in the United States had almost been eliminated. Unfortunately, because of HIV and other immune compromising diseases, it is on the rise. Prevention is the way to control this disease. As a healthcare provider, you have an increased risk of coming in contact with someone who has the disease. The greater your exposure to a person with the disease the greater your risk is of becoming infected.
In order to protect yourself you must understood all of the following:
<ol>
    <li>How TB is transmitted</li>
    <li>Testing for TB infection</li>
    <li>Wearing personal protective equipment (PPE) when in contact with people who have TB or have been exposed to TB</li>
    <li>Reporting to your supervisorany possible exposure to TB</li>
    <li>Participating in annual PPD screening tests.</li>
</ol>
 </p>
 
<h3>Treatments</h3>
<p>The type of treatment the individual will receive will depend on whether they have TB infection of TB disease. TB infection (Inactive TB) is usually treated with a drug called “INH”, also known as Isoniazid. INH kills the TB bacteria that are in the body. If the person takes this medication as prescribed, it will usually keep them from getting the TB disease. Treatment is 6‐12 months. Side effects include loss of appetite, nausea, vomiting, yellowish eyes skin, fever, abdominal pain, and tingling in hands or feet. Alcohol can increase the side effects and can contribute, to liver problems with these drugs, so while taking this medication, drinking alcohol not allowed.</p>
<p>Multi‐drug therapy is required for TB Disease (active TB) and can include the use of Rifampin. Rifampin can turn urine orange. It may even turn tears or saliva orange. Rifampin will stain contact lenses, so persons taking this drug must wear their glasses until the treatment is over. Rifampin also causes sensitivity to the skin so a good sunscreen should be used. Rifampin may interfere with birth control pills. Alternatebirthcontrolmethodsmust be used during the treatment. Alcohol should not be used while taking this drug.
Other drugs used include Pyrazinamide and Ethambutol. Streptomycin may also be given by injection. TB does not normally require hospitalization. Treatment can usually be given on an out‐patient basis through a doctor's office</p>

<h3>PPE and Isolation Precautions</h3>
<p>When working in a facility with patients who have TB, PPE (personal protective equipment) should be worn according to that facility's specific policy. The policy and procedures should cover the use glove, gowns, masks, as well as the proper disposal of these items.
The mask you will be required to use for an individual with TB is different from the general type of masks used: A TB mask is called a respirator mask. It's a special fitting respirator that will not allow the tiny TB particles to enter. It has a specially designee filter and is referred to as an N95 mask.
</p>
<h3>Isolation procedures include</h3>
<p>An acid fast bacillus (AFB) isolation card should be present, instructing the health care worker to wear a mask, wear a gown, and to use gloves for touching the patient and/or all infected article. Good hand washing is very important. Any item in the isolation room should be treated as if it is contaminated. There should be an isolation cart outside the room with proper PPE available for immediate use.
Keep in mind that the air we breathe is a positive air pressure environment. A person with TB needs to be placed in a negative air pressurized room. Negative air pressure means air flows INTO the room from the outside. The air is also filtered back to the outside, passing through specially designed filters. The air is cycled through at least six times an hour. Remember to open doors SLOWLY to prevent air from flowing back into the building. The door must always remain closed. Wear a respirator mask when in a room that has known or suspected TB. You must be fitted for a respirator mask.
</p>

<h3>Home Care</h3>
<p>Patients with newly diagnosed TB are placed on medication and when they are sent home, they are put on home isolation. This means they cannot go to any public places such as work, school, church or stores.
How infectious a patient is, is determined b y a number of repeated tests. The tests must be negative for three days in a row before a patient is free to leave the home.
As treatment continues the patient feels much better. This means the medication is working. If the patient does not feel better after 3 weeks of medication, the medication may not be working. You should report this to your supervisor.</p>
<p>The local public health department tests everyone living in the home for TB. If anyone tests positive for the infection or disease they are treated with medication. The public health department does not recommend uninfected persons leave the home unless they are very young. If the patient has active lung disease, with positive tests, the home care staff should wear a N9S fit‐tested mask.
Home care staffs do not need to take any special precautions with their bags, equipment or clothing. These items do not present any TB risk to themselves or other patients. Patients with active TB should be taught respiratory hygiene and cough precautions.
<ol>
    <li>Always cover the mouth when coughing or sneezing</li>
    <li>Use two Kleenex to cover the mouth</li>
    <li>Practice good handwashing including, after coughing, sneezing or contact with respiratory secretions</li>
    <li>Avoid singing or yelling</li>
    <li>Family members can decrease the possibility of becoming infected by sleeping in a different room than the patient while they are contagious.</li>
</ol>

</p>
</div>

            <h4 class="title">*** IMPORTANT TO REMEMBER***</h4>
                <div class="content">
                    <p>
                    It is very important that the mask fits your face without leaking. TB particles are very small and can get inside a mask that doesn't fit properly.
                    It you must take the patient out of the room for any reason, the patient is to wear a REGULAR SURGICAL MASK, NOT A RESPIRATOR TYPE N95, LIKE YOU WEAR TO ENTER THE ROOM!!! This is because the respirator N95 mask ONLY filters INHALED air NOT EXHALED AIR.
                    
                    </p>
                   </div>
                        
                <h4 class="title">Lung disorders</h4>
                <div class="content">
                    <h3>Asthma</h3>
                    <p>Asthma is a long-term chronic breathing problem that can affect people of any age. It may be inherited, or may be caused by allergies to pollen, pets, dust, or medications. Smoking increases the risk of developing asthma, and stress may make it worse. Persons with asthma can live normal lives with medication and proper care.</p> <br>
                    <p>A person with asthma has sensitive bronchi that react to triggers such as smoke, air pollution, cold weather, exercise, or allergies. The bronchi may tighten or narrow, becoming inflamed and swollen, making it harder to breathe fresh air in and exhale the stale air. Sometimes it is harder to exhale than inhale. Symptoms of asthma are wheezing, dry cough, or sometimes a cough with mucus, shortness of breath, and chest tightness
                    <img src="{{ asset ('img/resp9.png' )}}" width="200" height="200" style="float: right">
                    </p>
                    <p>Medications may include an inhaler, puffer, or pills. Some medicines reduce the swelling and inflammation in the bronchi, helping to prevent asthma attacks from starting, but they do not stop an attack once it has started. Inhalers work quickly, opening the narrowed airways. They help stop an attack once it has begun and are used as needed. Some asthma drugs may cause irregular heartbeats.</p>
                    <p>Blood pressure medicines, sleeping pills, tranquilizers, sedatives, or aspirin may cause a problem in older people with asthma. These drugs make one breathe more slowly and less deeply, which can be dangerous if one has asthma.</p>
                </div>
                
                <h4 class="title">Common symptoms of respiratory problems</h4>
                <div class="content">
                    <p>These symptoms should be reported to your supervisor:</p>
                    <ul>
                        <li>Cough—varies with type of problem. Take notice of these things:
                            <ol>
                                <li>Is the cough dry,without sputum?</li>
                                <li>If there is sputum with the cough,what color is it? Is there any blood in the sputum? Is the sputum thick or thin?</li>
                                <li>What factors affect the cough,such as walking, talking, eating, etc.?</li>
                            </ol>
                        </li>
                    </ul>
                    <p>Two kinds of medicines are used to treat coughs. Antitussives suppress the cough, and expectorants help loosen mucus so it can be coughed up.</p>
                    <ul>
                        <li>Shortness of breath (SOB, dyspnea) is the unpleasant sensation of breathlessness or difficulty in breathing. Shortness of breath may happen mostly during activity, when it is often called distress on exertion, or DOE. Some people feel short of breath all the time because of narrowed airways. Sometimes shortness of breath occurs when lying down. This is usually due to heart failure and is relieved by sitting up.</li>
                        <li>Breathing that is abnormal—too fast, too slow, irregular, shallow, or gasping.</li>
                        <li>Pleurisy is a sharp pain caused by an irritation in the lining of the lungs. It is made worse
by deep breathing and coughing. Sometimes the area is sore to the touch.</li>
                        <li>Cyanosis is a bluish color of the lips, nails, and skin caused by lack of oxygen.</li>
                    </ul>
                </div>
                <h4 class="title">Chronic Obstructive Pulmonary Disease (COPD)</h4>
                <div class="content">
                    <p>COPD is the name for reduced airflow in to and out of the lungs. It is associated with diseases such as <b>emphysema</b> and <b>chronic bronchitis</b> . Smoking is the cause of 80%–90% of COPD. Other causes include heredity, second-hand smoke, and air pollution. There is no cure.</p>
                    <p><b>Bronchitis</b> is an inflammation of the bronchi. In chronic bronchitis the airways become narrow, scarred, and partly clogged with mucus, making it difficult to breathe. There may be a cough that lasts for months and returns often, lasting longer each time.</p>
                    <p><b>Emphysema</b> occurs when some of the air sacs deep in the lungs are damaged, often because of long-term infection and irritation. When lung tissue is damaged, the airways collapse, trapping stale air and blocking intake of fresh air. The lungs try to take in more air and become over-inflated and stretched out, gradually getting so big they completely fill the chest cavity. Many with severe emphysema develop a barrel- shaped chest because of this.</p>
                    <p>The stretched-out lungs cannot effectively exhale, creating the feeling that something is blocking the airway. Stale air is never completely replaced with fresh air, and less oxygen gets into the blood. Emphysema makes the heart work harder, eventually leading to heart failure.</p>
                    <p>Many people with emphysema lose 50–70% of their lung tissue before they are aware of symptoms. A daily morning cough with clear sputum is the earliest symptom. Gradually the morning cough becomes an all-day cough. Sometimes the first symptom people notice is breathlessness, especially with activity. Other symptoms of COPD include chest tightness and increased mucus.</p>
                </div>
                
                <h4 class="title">Care measures for COPD:</h4>
                <div class="content">
                    <ol>
                        <li>→ Medications.</li>
                        <li>→ Oxygen therapy.</li>
                        <li>→ Good nutrition and correct body weight.</li>
                        <li>→ Good ventilation. People with COPD often like to have a fan blowing air toward them.</li>
                        <li>→ Rooms should be at a comfortable, moderate temperature, not too hot, too cold, or too humid. Showers and baths should be quick if moisture in the air makes breathing difficult.</li>
                        <li>→ Loose-fitting clothes are best</li>
                        <li>→ Avoid dust, allergens, air pollution, smoke, and other irritants. Animal hair, scented soaps, colognes, perfumes, powders, cleaners, aerosol sprays, glues, and paints can all cause problems with breathing.</li>
                        <li>→ Exercise can strengthen, improve well being, and reduce shortness of breath.</li>
                        <li>→ Drinking lots of water will keep secretions thin and easy to bring up.</li>
                        <li>→Tasks should be broken into short segments with frequent rest periods of at least 5–15 minutes.</li>
                        <li>→ Sit when performing tasks if possible.</li>
                        <li>→ Relaxation exercises and special breathing techniques can help the COPD client feel better.</li>
                        <li>→ Caregivers must give frequent support, encouragement, and reassurance.</li>
                        <li>→ Be patient, be complimentary, and keep a positive attitude with COPD clients. They often feel anxious and irritable. Lack of oxygen in the blood can cause fatigue, forgetfulness, depression, confusion, poor appetite, moodiness, agitation, frustration, and sleeplessness.</li>
                        
                    </ol>
                </div>
                
                <h4 class="title">Breathing techniques and relaxation exercises that help those who feel breathless</h4>
                 <div class="content">
                     <p>Pursed-lip breathing is helpful in many cases of shortness of breath. It improves ventilation, reduces air trapped in the lungs, relaxes the client, and eases the effort of breathing. This is especially good to do while exercising or performing any physical activity:</p>
                    <ol>
                        <li>An erect, upright posture is best for full lung and chest expansion.</li>
                        <li>Breathe in slowly through the nose for 1 count. Feel lungs fill with air.</li>
                        <li>Purse lips slightly as if to whistle.</li>
                        <li>Breathe out gently and slowly through pursed lips for 2 slow counts.</li>
                        <li>Do not force the air out; let it escape naturally.</li>
                        <li>Keep doing this until breathing eases.</li>
                    </ol>
                    <p>Clients can learn controlled coughing techniques to help clear the breathing passages:</p>
                    <ol>
                        <li>Take a slow, deep breath and hold for 2 seconds.</li>
                        <li>Cough twice, with mouth slightly open. The first cough should loosen mucus, and the second should push it out of the lungs.</li>
                        <li>Pause. Sniff gently. Do not take a deep breath, as this may push mucus back to the lungs.</li>
                    </ol>
                    <p>The orthopneic position can help clients with enlarged lungs breathe better by stabilizing the chest and shoulders and helping the client use other muscles to support breathing:</p>
                    <ol>
                        <li>Sit leaning forward. Support the arms on a surface in front. An overbed table provides good support and can be adjusted to the right height. Arms can also be supported on the knees.</li>
                    </ol>
                    <p>Relaxation and visualization exercises can calm anxiety and agitation:</p>
                    <ol>
                        <li>Sit in a chair with eyes closed and do pursed lip breathing for a minute or two.</li>
                        <li>Frown, tightening the muscles in the forehead. Hold for 3 seconds and then relax.</li>
                        <li>Clench jaw by tightening the muscles in the lower jaw. Hold for 3 seconds and relax.</li>
                        <li>Tighten and relax arms and hands, then buttocks, then legs and feet.</li>
                        <li>Let the body go limp.</li>
                        <li>Imagine the most peaceful scene you can think of.</li>
                        <li>Visualize the scene with you in it. Think of as much detail as possible.</li>
                        <li>Think about how relaxing it is to be in that place and how easily you can breathe there.</li>
                    </ol>
                    <p>Energy conservation measures can help clients accomplish tasks with less effort:</p>
                    <ol>
                        <li>Push or slide objects instead of lifting them. Wheeled carts are helpful.</li>
                        <li>To stand, take several slow, deep breaths, then stand while breathing out through pursed lips.</li>
                        <li>Always exhale when lifting or pushing heavy objects or when doing an action or exercise.</li>
                        <li>When climbing stairs, use pursed-lip breathing, stop often to rest, and use the rail for support.</li>
                    </ol>
                 </div>
                
                
                        
                        <div >
                              <a href="{{ route('quizForRespiratoryDisdorder') }}"><button class='btn'>Take Quiz</button></a>
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