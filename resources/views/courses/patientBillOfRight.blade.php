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
                            <h2>Patient Bill of Rights Inservice</h2>
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
                        <h4 class="title_top">Main Course:</h4>
                        <div class="content">
                        Patient Rights are an integral part of healthcare today. All clients come to our Agency with different healthcare  experiences and may or may not be aware of their rights. Protections are afforded by federal and state  legislation and as health care providers we must educate our client about their rights and the manner in which  they may exercise them. For ease of access and teaching, the patient’s rights are clearly stated in one document  that is called The Patient’s Bill of Rights.  

                        </div>

                        <h4 class="title">Accessibility and Education</h4>
                        <div class="content">
                        <p> 
                        The Bill of Rights must always be accessible to the client, family, public and staff. It can be found posted in the  office and in the client’s admission packet. If a client would like an additional copy, they are located in the  office.  
Upon admission, the nurse will explain the Bill of Rights to the client and/or caregiver. The client/caregiver  must be given the opportunity to ask questions. Receipt of the Bill of Rights is documented in the clinical  record. The client must also be informed that he/she has the right to excursive the rights at any time without fear  of reprisal. Any questions about the protections afforded by the Bill of Rights may be directed to the  Administrator if the employee/ contractor cannot answer it.
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

                        <h4 class="title">Key Areas</h4>
                        <div class="content">
                            <p>Key things to remember about the Bill of Rights are:</p>
                            <ol>
                                <li>The rights can be exercised at anytime</li>
                                <li>Clients are to receive the best quality care without regard to race, creed, nationality/origin, lifestyle  choice and diagnosis</li>
                                <li>The client/caregiver ALWAYS has the right to refuse care</li>
                                <li>The client/caregiver must be informed of care prior to initiation</li>
                                <li>Privacy, including protection of PHI is paramount</li>
                                <li>The client/caregiver must be informed of charges prior to initiating service</li>
                                <li>The client has the right to be safe</li>
                                <li>The client has the right to be treated with respect.</li>
                                <li>The client has the right to make concerns/ grievances known without the fear of reprisal </li>
                            </ol>
                            <p>Specific questions about patients’ rights may be directed to the Administrator.</p>
                        </div>

                        <h4 class="title">Interacting with Clients</h4>
                            <div class="content">
                                <p>Client rights not only govern what the client may do and when, but how Agency staff interacts with the client  and their environment. Appropriate and professional interaction can increase client confidence and overall  satisfaction. When you are in a client’s home, remember:</p>
                            <ol>
                                
                                <li>Address the client using his or her name and the appropriate title. Nicknames like sweetie and honey are  well meaning but it can come across as demeaning. Terms of endearment should never be used and  nicknames should only be used if and when the client gives permission. </li>
                                <li>Treat the client’s property with respect. Remember although you are working, you are in someone’s  home! Observe cultural considerations and do not slam doors or damage personal property.  ∙ Clients have the right to know who you are and what you are doing. 
                                  <ol>
                                      <li>Always introduce yourself when you enter into a client’s environment and at the beginning of  telephone conversations.</li>
                                      <li>ALWAYS wear your ID badge</li>
                                      <li>Explain procedures prior to starting them </li>
                                      <li>Answer questions honestly.</li>
                                  </ol>
                        
                                </li>
                                <li>Be professional and smile. </li>
                            </ol>            
                                                
                            </div>

                        <h4 class="title">Complaints/ Grievances</h4>
                            <div class="content">
                            <p>
                            The client has the right to make concerns known. 
                            The Agency has a responsibility to investigate the problem  
                            and resolve the issue to the client’s satisfaction in a timely manner. 
                            Upon admission the client is given a copy of  the grievance process 
                            and rights pertaining to having problems resolved. 
                            If a client is upset it is important to  remember:  
                            </p>
                            <ol>
                                <li>Remain calm and objective.</li>
                                <li>Respond to questions and problems promptly</li>
                                <li>Do not take complaints personally</li>
                                <li>Remain professional
                                    <ol>
                                        <li>Do not yell</li>
                                <li>Do not name call</li>
                                <li>Do not make accusations</li>
                                <li>Do not accept or assign blame</li>
                                
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        
                        <h4 class="title">Responsibilities</h4>
                            <div class="content">
                            <p>
                            For every right, there is a responsibility to assure that the right is exercised in a safe manner. As a healthcare  provider you have the responsibility to:  
                            </p>
                            <ol type="disc">
                                <li> Listen to you patient when they tell you what they need. Do not assume you know what they need or  want. </li>
                                <li>Explain what you are going to do with the patient prior to starting in language that is appropriate for  his/her level of development/ national origin. </li> 
                                <li>Be honest. If you do not know the answer to a question, redirect the question to the office.</li>
                                <li>Remember client privacy!</li>
                                <li>Do:
                                    <ol>
                                        <li>Secure documents with client information</li>
                                        <li>Use the assigned number in place of identifying information when you can </li>
                                    </ol>
                                </li>
                                <li>Don't:
                                    <ol>Gossip about clients </ol>
                                    <ol>Hold conversations with or about clients in public </ol>
                                </li>
                                <li>Encourage independence.</li>
                            </ol>
                        </div>

                        <h4 class="title">HIPAA</h4>
                            <div class="content">
                            <p>HIPAA was designed to address public concerns about managed care, 
                            insurance availability, and insurance  affordability. 
                            For example, HIPAA prohibits insurance companies from denying coverage because of 1)  
                            preexisting conditions, 2) a family member’s health status, or 3) whether or not an 
                            individual has been covered  under a group policy and is seeking a personal health insurance policy. 
                            Further, HIPAA ensures immediate  coverage without regard to pre-existing conditions for individuals 
                            who change jobs and insurance carriers.  Further, to encourage the purchase of long-term care insurance, 
                            HIPAA allows employers to deduct premiums  and most benefits are tax-free to the beneficiary.</p> <br>
                            <p>HIPAA contains provisions for both privacy and security. Privacy rules have been promulgated and compliance  
                            was required by most health plans by April 14, 2003; plans with less than $5 million in annual receipts had until 
                            April 14, 2004 to fully comply. These rules have gone through several iterations, some as recently as March  
                            2003 and refinements continue. Security rules that detail further requirements 
                            for the health care industry and  patients were issued in October 2004.</p> <br>
                            <p>Health care professionals have long realized the need to protect 
                            patients from unauthorized use of their health  information; at the same time, 
                            they want to have access to needed information when treating a patient. 
                            The  intent of HIPAA is to protect patients from unauthorized or inappropriate 
                            use and access to their health  information. Further, the rules protect patients 
                            by giving them access to their health information so they know  what has been documented 
                            about their health status. Proposed by-products of HIPAA are to improve quality of 
                            care, restore trust in the health care system, and improve the efficiency and effectiveness 
                            of information  dissemination by building on existing legal frameworks. HIPAA also contains 
                            an administrative simplification  section designed to improve the efficiency of health information 
                            coding to facilitate digital transfer of  information between and among health care providers, payers, and health plans.</p> <br>
                            <p>Health care providers are defined as anyone who is paid for health care services or bills for services provided.  The list is all inclusive: physicians, licensed health care providers, hospitals, outpatient physical therapists,  social workers, certified nurse midwives, technicians administering X-rays done at home, home health agencies,  pharmacists, providers of home dialysis supplies and equipment, nursing homes, nurses, and nurse  administrators. This list means that any hospital or health facility worker who may see confidential patient  information is included.  
                        All facilities must limit access to information only to those who have a need to know. A nurse who seeks  information about a patient not under her care is violating the HIPAA rules. Similarly, health information can  only be used for health purposes. Employers cannot use the information to screen candidates for hire or  promotion. Financial institutions may not use it to determine lending practice. Only the patient can explicitly  authorize employers, banks, and individuals to have access to his/her medical information.  
                        </p> <br>
                    <p>HIPAA also established the “minimum necessary rule” which stipulates that only the minimum necessary  
                    information may be shared, even with the patient authorization. 
                    A classic example would involve treatment for  a case of child or domestic abuse; 
                    the provider would, rather than providing an entire medical record, furnish  
                    the pertinent data furnished in the form of an abstract outlining the information 
                    that is necessary to provide  treatment and protect the victim(s). 
                    The abstracted information could be provided to legal and law enforcement  entities. 
                    Health providers involved in the treatment of patients are not subject to the minimum necessary 
                    rule  and can have full access to all information that is needed to provide patient care. 
                    Health information that has  implications for the public health and safety can be shared 
                    without consent. There are several situations where  medical information can be shared: in Emergency 911 situations, 
                    when communicable diseases are involved,  when law enforcement agencies participate, or if 
                    national defense or security is a factor.HIPAA privacy regulations also mandate specific 
                    patient rights that include the following.</p> <br>
                       
                        <ol>
                            <li>Right to privacy notice requires disclosure and reasonable effort to assure that the patient understands  the agency’s policy concerning privacy of information. </li>
                            <li>Right to request restrictions means that patients may specify health information that cannot be released  and/or, they may restrict to whom information can be released.</li>
                            <li>Right to access of PHI means that patients must be allowed to inspect and copy information contained in the agency’s record.</li>
                            <li>Right to know what disclosures have been made means the agency must track all information released  and be able to provide documentation to the patient.</li>
                            <li>Right to amend the PHI means that while patients may request amendments to the PHI and the agency  must allow amendments, the agency may deny some requests.</li>
                        </ol>
                        <p>All covered entities are required to comply with certain procedural rules. Most have had to develop new policies  and procedures to address the many aspects covered under these rules. The following are some of the rules. </p>
                        <ol>
                            <li>Agencies must appoint a privacy officer who will monitor and audit compliance.</li>
                            <li>Agencies must develop an internal compliance process that will assure no patient rights are violated,  complaints are addressed and investigated, and that a process for remediation is in place.</li>
                            <li>Training must be provided to employees to assure that they are informed about patient rights and  disclosure of information.</li>
                            <li>HIPAA requires that agencies document any and all violations and that sanctions parallel other  disciplinary policies. </li>
                            <li>Agencies must have a process for mitigating any harmful effect of disclosure. </li>
                            <li>All forms of communication must be addressed in administrative safeguards.</li>
                            <li>Agencies must agree and have policies that specify no retaliation for an employee or consumer who files  a complaint. </li>
                        </ol>
                        </div>

                        <h4 class="title">Bill of Rights:</h4>
                            <div class="content">
                                <p>
                                <b>PATIENT RIGHTS AND RESPONSIBILITIES</b>
                                <b>STATEMENT OF PURPOSE:</b> It is anticipated that observance of these rights and responsibilities will  contribute to more effective care and greater satisfaction for the patient as well as the staff. The rights will be  respected by all personnel and integrated into all Home Care programs. A copy of these rights will be given to  patients and their families or designated representative. The client or his/her designated representative has the  right to exercise these rights. In the case of a client adjudged incompetent, the rights of the client are exercised  by the person appointed by law to act on the client's behalf. In the case of a client who has not been adjudged  incompetent. Any legal representative may exercise the client's rights to the extent permitted by law. 
                                <b>THE PATIENT HAS THE RIGHT:</b>    
                                <ol>
                                    <li>To be fully informed in writing and knowledgeable of all rights and responsibilities before providing pre planned care and to understand that these rights can be exercised at any time.</li>
                                    <li>To appropriate and professional care relating to physician orders. </li>
                                    <li>To choose a health care provider </li>
                                    <li>To request services from the Home Care Agency of their choice and to request full information from their  agency before care is given concerning services provided, alternatives available, licensure and accreditation  requirements, organization ownership and control.</li>
                                    <li>To be informed in advance about care to be furnished and of any changes in the care to be furnished before  the change is made </li>
                                    <li>To be informed of the disciplines that will furnish care and the frequency of visits proposed to be furnished  and to know that all staff are properly trained and competent to perform their duties.</li>
                                    <li>To information necessary to give informed consent prior to the start of any procedure or treatment and any  changes to be made.  </li>
                                    <li>To participate in the development and periodic revision of the plan of care/service. </li>
                                    <li>To confidentiality and privacy of all information contained in the client/patient record and of Protected  Health Information according to HIPAA, Federal, State and Accreditation regulations.</li>
                                    <li>To information necessary to refuse treatment within the confines of the law and to be informed of the  consequences.</li>
                                    <li>To treatment with utmost dignity and respect by all agency representatives, regardless of the patient's  chosen lifestyle, marital status, cultural mores, political, religious, ethical beliefs, and source of payment, or  whether or not they have executed an advance directive, without regard to race, creed, color, sex, age or  handicap.</li>
                                    <li>To have his/her property and person treated with respect, consideration and recognition of client/patient  dignity and individually. </li>
                                    <li>To receive and access services consistently and in a timely manner from the agency to his/her request for  service.</li>
                                    <li>To be admitted for service only if the agency has the ability to provide safe professional care at the level of  intensity needed and to be informed of the agency's limitations. </li>
                                    <li>To reasonable continuity of care.</li>
                                    <li>To an individualized plan of care and teaching plan developed by the entire health team including the  patient and/or family.</li>
                                    <li>To be informed of client patient rights under state and federal law to formulate advance care directives  without fear of reprisal whether or not an advance directive is prepared and to know that the agency will  honor the patient’s advance directive in providing care.</li>
                                    <li>To be informed of anticipated outcomes of service/care and of any barriers in outcome achievement.</li>
                                    <li>To be informed of client/patient rights regarding the collection and reporting of OASIS information </li>
                                    <li>To expect confidentiality of services provided and of the access to medical records and written information  from records in accordance with State Statutes</li>
                                    <li>To be informed within a reasonable time of anticipated termination of service or of plans for transfer to  another health care facility/provider and the reason for termination/transfer of services. </li>
                                    <li>To be informed verbally and in writing and before care s initiated of the organization's billing policies and  payment procedures and the extent to which:
                                        <ol>
                                            <li>Payment may be expected from Medicare, Medicaid, or any other federally funded or aided program  known to the organization</li>
                                            <li>Charges for services that will not be covered by Medicare</li>
                                            <li>Charges that the individual may have to pay</li>
                                        </ol>
                                    </li>
                                    <li>To be able to identify visiting staff members through proper identification. </li>
                                    <li>To be informed orally and in writing of any changes in payment information as soon as possible, but no later  than 30 days from the date that the organization becomes aware of the change</li>
                                    <li>To honest, accurate, forthright information, regarding the home care industry in general and his/her chosen  agency in particular, including cost per visit, employee qualifications, names and titles of personnel, etc. </li>
                                    <li>To access necessary professional services 24 hours a day, 7 days a week </li>
                                    <li>To be referred to another agency if he/she is dissatisfied with the agency or the agency cannot meet the  patient's needs </li>
                                    <li>To receive disclosure information regarding ownership and control and of any beneficial relationship the  organization has that may result in profit for the referring organization.</li>
                                    <li>To education, instruction and a list of requirements for continuity of care when the services of the agency  are terminated and information regarding community services available. </li>
                                    <li>To be free of abuse, neglect and exploitation of any kind including agency employees, volunteers or  contractors. </li>
                                    <li>To privacy to maintain his/her personal dignity and respect.</li>
                                    <li>To know that the agency has liability insurance sufficient for the needs of the agency. </li>
                                    <li>To be advised that the agency complies with Subpart 1 of 42 CFR 489 and receive a copy of the  organization's written policies and procedures regarding advance directives, including a description of an  individual's right under applicable state law and to know that the Agency will honor the patient’s advance  directives in providing care.</li>
                                    <li>To receive advance directives information prior to or at the time of the first home visit, as long as the  information is furnished before care is provided and to know that the Hotline number, 1-800-792-9770, may  be used to lodge complaints regarding the implementation of the Advance Directive requirement</li>
                                    <li>To voice grievances regarding treatment or care that is (or fails to be) furnished, or regarding the lack of  respect of property or recommend changes in policy, staff, or service/care without restraint, interference,  coercion, discrimination, or reprisal and to know that grievances will be resolved and the patient notified of  the resolution within 30 days.</li>
                                    <li>To be advised of the toll-free home health agency hot-line for the State of New Jersey and the purpose of the  hotline to receive complaints or questions about the organization. The Home Health Hotline Number is 1- 800-792-9770. The number is operated 8AM to 5PM daily to receive complaints or questions about local  Home Health Agencies. You may also register complaints in writing to:  State of New Jersey Department of Health and Senior Services   Division of Health Care Systems Analysis  
                                         P. O. Box 360  
                                         Trenton, New Jersey 08625-0360  
                                    </li>
                                    <li>To be informed of the toll-free adult abuse hot-line 1-800-792-8820, used to report abuse, neglect or  exploitation. </li>
                                    <li>To be informed of the toll-free child abuse hot-line 1-877-652-2873, used to report child abuse, neglect or  exploitation. </li>
                                </ol>
                                </p>
                        </div>

                        <h4 class="title">THE PATIENT HAS THE RESPONSIBILITY</h4>
                            <div class="content">
                            <p>
                                <ol>
                                    <li>To provide, to the best of his/her knowledge, accurate and complete information about:  
                                        <ol>
                                            <li>Past and present medical histories.</li>
                                            <li>Unexpected changes in his/her condition.</li>
                                            <li>Whether he/she understands a course of action selected. </li>
                                            
                                        </ol>
                                    </li>
                                    <li>To follow the treatment recommended by the particular handling of the case.</li>
                                    <li>For his/her actions if he/she refused treatment or does not follow the physician’s orders.</li>
                                    <li>For accruing that the financial obligations of his/her health care are fulfilled as promptly as possible.</li>
                                    <li>To respect the rights of all staff providing service.</li>
                                    <li>To notify the agency promptly in advance of an appointment or visit you must cancel. </li>
                                    <li>To become independent in care to the extent possible, utilizing self, family and other sources.</li>
                                    <li>To pay for care or services not covered by 3<sup>rd</sup> party payers.</li>
                                    <li>To comply with the rules and regulations established by the agency and any changes subsequent to the rules </li>
                                </ol>
                            </p>
                        </div>
                        <div>
                              <a href="{{ route('quizForPatientBillOfRight') }}"><button class='btn'>Take Quiz</button></a>
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