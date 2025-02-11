@php
    $userCategory = auth()->user()->role; // Get logged-in user category
    
@endphp
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Training - Shadai Home Health</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/owl.carousel.min.css' )}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/themify-icons.css' )}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/flaticon.css' )}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/magnific-popup.css' )}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/slick.css' )}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/style.css' )}}">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

    <style>
        .filter-button {
  margin-right: 10px; /* Adjust as needed */
}
  .flexed {
        display: flex;
      }
    
      .flexed3 {
        justify-content: space-between;
      }
    </style>
<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset( 'img/logo.png' )}}" style="width: 100px; height: 100px;" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.shadaihomehealth.com/about-shadai">About</a>
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
<section class="special_cource padding_top" id="courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        
                        <h2>All Courses</h2>
                    </div>
                </div>
            </div>
           
            <div class="filter-buttons d-flex justify-content-center mr-3">
                <button class="filter-button btn btn-outline-primary" data-filter="{{ $userCategory }}">My Courses</button>
                <button class="filter-button btn btn-outline-secondary" data-filter="annual">Annual Trainings</button>
                <button id="downloadAnnualCertificate" class="filter-button btn btn-outline-success" data-filter="annual">Download Annual Training Cert.</button>
            </div>
            <br> <br>

            <div class="modal fade" id="annualCertificateModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Incomplete Training</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please complete all the courses available under the annual training section and come back to download your certificate.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled" data-filter-category="non-skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Oxygen Therapy';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('course-details');
                        @endphp
                        <div class="flexed flexed3">
                        <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                        <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a>
                        </div>
                            <a href="{{ route( 'course-details' )}}"><h3>Oxygen Therapy</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>
                <br><br>

                <!-- <div class="col-sm-6 col-lg-4 course-box OT">
                    <div class="single_special_cource" data-filter-category="pt">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'PT Onboarding';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('rangeOfMotion');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a>
                        </div>
                            <a href="{{ $href }}"> <h3>PT Onboarding</h3></a>
                          
                            <div class="author_info">
                                <div class="author_img">
                                   <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>
                <br> <br> -->

                <!-- <div class="col-sm-6 col-lg-4 course-box RN">
                    <div class="single_special_cource" data-filter-category="rn">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'RN Onboarding';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('index');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a>
                        </div>    
                            <a href="{{ $href }}">  <h3>RN Onboarding </h3> </a> 
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div> <br> <br> -->


                <div class="col-sm-6 col-lg-4  course-box skilled non-skilled">
                    <div class="single_special_cource" data-filter-category="skilled" data-filter-category="non-skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'ACHC Training Module for Direct Care Employees';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('ACHCcourseDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">3 C.E.U</a>
                        </div>   
                        <a href="{{ $href }}"> <h3>ACHC Training Module for Direct Care Employees</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div><br> <br>

                <div class="col-sm-6 col-lg-4  course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Department-Issued Policies And Procedures';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('departmentPolicies');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">3 C.E.U</a>
                        </div>   
                        <a href="{{ $href }}"> <h3>Department Issued Policies and Procedures</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div><br> <br>

                <div class="col-sm-6 col-lg-4 course-box skilled non-skilled">
                    <div class="single_special_cource" data-filter-category="skilled" data-filter-category="non-skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Education on Tuberculosis';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('tb-Training');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a>
                        </div>
                        <a href="{{ $href }}"> <h3>Education on Tuberculosis</h3></a>
                    
                            <div class="author_info">
                                <div class="author_img">
                                   <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div> <br> <br>

                <div class="col-sm-6 col-lg-4 course-box skilled non-skilled">
                    <div class="single_special_cource" data-filter-category="skilled" data-filter-category="non-skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Patient Bill Of Rights';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('patientBillOfRightDetails');
                        @endphp

                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px; color:white" class="btn_4">1 C.E.U</a>
                        </div>   
                        <a href="{{ $href }}"> <h3>Patient Bill of Rights</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div> <br> <br>

                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Education on Individual Service Plan';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('individualServicePlan');
                        @endphp

                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px; color:white" class="btn_4">1 C.E.U</a>
                        </div>   
                        <a href="{{ $href }}"> <h3>Education on Individual Service Plan</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div> <br> <br>

                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled" data-filter-category="non-skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Respiratory Disorders';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('respiratoryDisorderDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Respiratory Disorders</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Critical Incident Reporting';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('reportingIncidentDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Critical Incident Reporting</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Complaint Resolution';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('complaintResolution');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Complaint Resolution</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Fraud & financial abuse prevention';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('financialAbuse');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Fraud and Financial Abuse Prevention</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Mental Retardation';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('mentalRetardationDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Mental Retardation, Mental Illness and Dementia</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Infection Control: Proper Handwashing Technique';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('infectionControlDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Infection Control: Proper Handwashing Technique</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Quality Management Plan';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('qualityManagement');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Quality Management Plan</h3></a>
                           
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Shadai Admin</a></h5>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Bag Technique Procedure';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('bagTechniqueProcedure');
                        @endphp

                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Bag Technique Procedure</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Prevention of Abuse and Exploitation';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('preventionOfAbuseDetails');
                        @endphp

                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Prevention of Abuse and Exploitation</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Care of the Skin';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('careSkinDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px; margin-left: 70px; color:white" class="btn_4">1 C.E.U</a>
                        </div>
                        <a href="{{ $href }}"> <h3>Care of the Skin</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>
<!-- 
                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Infection Control';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('infectionControlDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Infection Control</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div> -->

                <div class="col-sm-6 col-lg-4 course-box skilled non-skilled">
                    <div class="single_special_cource" data-filter-category="skilled" data-filter-category="non-skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Occupational Safety and Health Administration';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('oshaCourse');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Occupational Safety and Health Act (OSH Act) </h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Caring for patients with dementia';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('dementiaDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Caring for patients with dementia</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box annual">
                    <div class="single_special_cource" data-filter-category="annual">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Mental Retardation';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('mentalRetardationDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a> 
                        </div>
                        <a href="{{ $href }}"> <h3>Mental Retardation</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box skilled non-skilled">
                    <div class="single_special_cource" data-filter-category="skilled" data-filter-category="non-skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Emergency Management Plan';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('emergencyManagement');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px; color:white" class="btn_4">1 C.E.U</a>
                        </div>
                        <a href="{{ $href }}"> <h3>Emergency Management Plan</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                   <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>


               
                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Range of Motion and Positioning';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('rangeOfMotion');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px;  color:white" class="btn_4">1 C.E.U</a>
                        </div>
                        <a href="{{ $href }}"> <h3>Range of Motion and Positioning</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                   <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Seizures and strokes';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('strokeAndSeizure');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px; color:white" class="btn_4">1 C.E.U</a>  
                        </div>
                        <a href="{{ $href }}"> <h3>Seizures and Strokes</h3></a>
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 course-box skilled">
                    <div class="single_special_cource" data-filter-category="skilled">
                        <img src="{{ asset( 'img/health.jpg' )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        @php
                            $courseName = 'Understanding Pain';
                            $buttonText = in_array($courseName, $completedCourseNames) ? 'Completed' : 'Enroll';
                            $href = $buttonText === 'Completed' ? '#' : route('understandingPainDetails');
                        @endphp
                        <div class="flexed flexed3">
                            <a href="{{ $href }}" style="background-color: {{ $buttonText === 'Completed' ? 'orange' : '' }}" class="btn_4 {{ $buttonText === 'Completed' ? 'completed' : '' }}">{{ $buttonText }}</a>
                            <a style="height: 33px; color:white" class="btn_4">1 C.E.U</a>
                        </div>
                        <a href="{{ $href }}">  <h3>Understanding Pain</h3> </a> 
                            
                            <div class="author_info">
                                <div class="author_img">
                                    <img style="width:50px; height:50px" src="{{ asset( 'img/logo.png' )}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="">Shadai Admin</a></h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    let userCategory = "{{ $userCategory }}".trim(); // Get user's category

    function showCourses(category) {
        document.querySelectorAll('.course-box').forEach(course => {
            course.style.display = "none"; // Hide all courses
        });

        if (category) {
            document.querySelectorAll(`.course-box.${CSS.escape(category)}`).forEach(course => {
                course.style.display = "block"; // Show only relevant courses
            });
        }
    }

    // Show only the user's category courses on page load
    showCourses(userCategory);

    // Add event listeners for filter buttons
    document.querySelectorAll('.filter-button').forEach(button => {
        button.addEventListener('click', function() {
            let filter = this.getAttribute('data-filter');

            if (filter === "{{ $userCategory }}") {
                showCourses(userCategory); // Show courses for the logged-in user
            } else {
                showCourses(filter); // Show annual training courses
            }
        });
    });
});

console.log({{ $completedAnnualCourses }});


</script>

<script>
    document.getElementById('downloadAnnualCertificate').addEventListener('click', function () {
        let completedAnnualCourses = {{ $completedAnnualCourses }}; // Passed from Laravel
        
        if (completedAnnualCourses == 10) {
            console.log("Downloading...");
            window.location.href = "{{ route('showCertForAnnual') }}";
            // Call function to generate and download certificate
        } else {
            // Show the Bootstrap modal
            var annualModal = new bootstrap.Modal(document.getElementById('annualCertificateModal'));
            annualModal.show();
        }
    });
</script>
</body>
</html>