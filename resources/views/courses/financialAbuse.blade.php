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
                            <h2>Fraud & financial abuse prevention</h2>
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
                        <h4 class="title_top"><b>PURPOSE</b></h4>
                        <div class="content">
                        <ol>
                            <li>To define the legal activities employees must not become involved in when providing client care.</li>
                            <li>To ensure clients' finances and property are properly safeguarded, documented and accounted for.</li>
                            <li>To prohibit Agency or registry from allowing a consumer to client to endorse a check to the home care agency or registry.</li>
                            <li>To protect clients and employees; and,</li>
                            <li>In the case of misuse, to provide direction in the investigation and reporting of alleged misuse.</li>
                        </ol>
                        </div>

                        <h4 class="title">Policy</h4>
                        <div class="content">
                        <p>Shadai Home Health Services, LLC. has strict criteria, policies and procedures involving a client's finances/property legalities and recording clients' financial transactions for managing client's property: i.e., Employees shall not partake in the following, which include, but are not limited to:</p>
                        <ol>
                            <li>Accepting Power of Attorney for a client, client's representative, family, or other responsible person associated with the client.</li>
                            <li>Becoming an appointee or have any legal involvement with the client, client's representative, family, or other responsible person.</li>
                            <li>Assisting a client in making out his/her will.</li>
                            <li>Becoming beneficiaries of a client's will. If an employee suspects he/she is a beneficiary of a client's will, that suspicion shall be reported to the Supervisor; and,</li>
                            <li>Becoming an Executor of a client's will.
                                <ul>
                                    <li> - Another form of abuse is "financial abuse." This involves taking property or money from a resident or encouraging a resident to hand over his/her assets. Residents have the right to protection of their money and property.</li>
                                </ul>
                            </li>
                        </ol>

                        <h4 class="title">PROCEDURES</h4>
                        <div class="content">
                        <ol>
                            <li>Financial transactions, conducted on behalf of clients, may include:
                                <ol type="a">
                                    <li>Assisting with household budgeting.</li>
                                    <li>Payment of bills.</li>
                                    <li>Collection of pensions or other cash benefits; and,</li>
                                    <li>Purchasing household goods.</li>
                                    <li>Agency or registry is prohibited from allowing consumer to endorse a check over to the home care agency or registry.</li>
                                </ol>
                            </li>
                            <li>Employees shall not have access to clients' bank accounts, credit cards or other financial information.</li>
                            <li>Wherever possible, clients shall be allowed/encouraged to handle their own finances/property.</li>
                            <li>When clients are not able to handle their own finances/property, a relative, friend or responsible person should be appointed to do so, preferably by the client.</li>
                            <li>Only when there are no other alternatives, and all other options have been reviewed, shall the Agency be involved in handling finances/property.</li>
                            <li>Employees shall handle clients' finances/property only when these activities have been specified in their Service Plan.</li>
                            <li>Employees shall never be permitted to know clients' account numbers or pin numbers.</li>
                            <li>If employees become aware that a client is keeping a large amount of cash at home, they shall report the details to the Supervisor.</li>
                            <li>Employees may pick up a mentally capable client's monies, including pension checks and personal checks etc. from external mail sources such as off-site postal boxes or post offices only when the activity is specified in the Service Plan. In these situations, Supervisor shall give authorization and document this approval in the client's file.</li>
                            <li>When shopping for clients, employees shall:
                                <ol type="a">
                                    <li>Obtain client's input regarding which store(s) to shop at.</li>
                                    <li>Consult with the client regarding items to purchase, sizes, brand names, amounts, etc.</li>
                                    <li>Consider the client's dietary needs, religious restrictions, cultural preferences and item cost (to ensure value for money).</li>
                                    <li>Request receipts for all transactions, which shall be given to the client.</li>
                                    <li>Confirm that monies and receipts are correct before leaving the cashier.</li>
                                    <li>Keep client's money separate from their own.</li>
                                    <li>Not shop simultaneously for other clients or for themselves, when shopping for one client. However, employees may complete the shopping for one client and then shop for another client before delivering purchases to clients. Each client's money shall be kept separate from the others.</li>
                                    <li>Not use their own bonus card to collect points on items the client has paid for, even if the client does not have or does not use a bonus card.</li>
                                </ol>
                            </li>
                            <li>Employees shall utilize the Agency's Financial Transactions Record for recording financial details and obtaining the client/client's representative's signature once the transaction has been documented and the unspent monies have been given to him/her.</li>
                            <li>In respect to computers, employees shall not:
                                <ol type="a">
                                    <li>Use the client's computer for personal reasons.</li>
                                    <li>Attempt to solve problems with the client's computer; and/or,</li>
                                    <li>Give directions to the client on how to solve computer problems.</li>
                                </ol>
                            </li>
                            <li>Employees shall never incur a liability on behalf of a client (e.g., borrow money to give to a client or charge an item for the client to the employee's credit card/ debit card, etc.).</li>
                            <li>Employees shall never involve clients in gambling activities such as giving opinions on, or purchasing tickets for, lotteries, betting pools, etc.</li>
                            <li>Employees shall never arrange for members of their own families to do paid work for a client.</li>
                            <li>Employees shall be diligent when handling clients' finances/property. Failure to do so may result in disciplinary action and/or notification of law authorities.</li>
                            <li>Receipts or documentation of all transactions and purchases paid with the clients' funds must be recorded on the Agency's Financial Transactions Record, which shall include:
                                <ol type="a">
                                    <li>Client's name.</li>
                                    <li>Employee's name.</li>
                                    <li>Date.</li>
                                    <li>Amount of money employee received from the client. The amount should be counted out and confirmed with the client. Where practical, the client should confirm his/her agreement with a signature.</li>
                                    <li>List of items purchased, or money collected.</li>
                                    <li>Total amount spent or total amount collected.</li>
                                    <li>Change given back to the client. Employee shall count out the amount being returned and confirm it with the client. Where practical, the client should confirm his/her agreement with a signature. Financial Transaction Records shall be kept in the client's home and taken to the Agency, when completed, where they will be retained for the mandatory period of time:</li>
                                </ol>
                            </li>
                            <li>Employees may obtain cash amounts for clients up to and including $25.00. Any requests for amounts in excess of $25.00 shall be authorized by the Supervisor.</li>
                            <li>Employees shall not simultaneously obtain cash for themselves when obtaining cash for clients.</li>
                            <li>Employees shall not use a client's telephone for personal reasons except for emergency purposes or for calling the Supervisor.</li>
                            <li>Employees shall not assume responsibility for looking after clients' valuable items. Employees shall not eat the client's food and/or drink their beverages.</li>
                        </ol>

                        </div>
                        
                    </div>
            
                            <br><br>

                        <div>
                              <a href="{{ route('quizForFinancialAbuse') }}"><button class='btn'>Take Quiz</button></a>
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