<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Page</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- plugins:css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset ('template/assets/vendors/mdi/css/materialdesignicons.min.css' )}}">
    <link rel="stylesheet" href="{{ asset ('template/assets/vendors/css/vendor.bundle.base.css' )}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset ('template/assets/vendors/jvectormap/jquery-jvectormap.css' )}}">
    <link rel="stylesheet" href="{{ asset ('template/assets/vendors/flag-icon-css/css/flag-icon.min.css' )}}">
    <link rel="stylesheet" href="{{ asset ('template/assets/vendors/owl-carousel-2/owl.carousel.min.css' )}}">
    <link rel="stylesheet" href="{{ asset ('template/assets/vendors/owl-carousel-2/owl.theme.default.min.css' )}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset ('template/assets/css/style.css' )}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset ('template/assets/images/favicon.ico' )}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/"><img src="{{ asset ('img/logo.png' )}}" style="width: 50px; height: 50px;" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/"><img src="{{ asset ('img/logo.png' )}}" style="width: 30px; height: 30px;" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ asset ('template/assets/images/faces/user.png' )}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admininstrator</h5>
                 
                </div>
              </div>
              <!-- <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div> -->
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>
       
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset ('template/assets/images/logo-mini.svg' )}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <!-- <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Course</a> -->
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              
             
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{ asset ('template/assets/images/faces/user.png' )}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admininstrator</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="{{ route('logout') }}">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                         <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                 
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
             
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <a href="{{ route ('smt')}}" style="text-decoration:none; color:white">
                    <div class="card">
                     <div class="card-body">
                        <h5>Total Users</h5>
                        <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{ $totalUsers }}</h2>
                          
                        </div>
                       
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-clipboard-account text-primary ms-auto"></i>
                      </div>
                    </div></a>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-4 grid-margin">
                <a href="#" style="text-decoration:none; color:white">
                  <div class="card">
                    <div class="card-body">
                    <h5>Total Courses Completed</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"> {{ $totalCompletedCourses }}</h2>
                         
                        </div>
                       
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-trophy text-success ms-auto"></i>
                      </div>
                    </div>
                  </div></a>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Information</h4>
                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
              
                            <th> Course Name </th>
                            <th> Completed By</th>
                            <th> Completed On</th>
                            <th> Position</th>
                            <th> Joined Date </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($completedCourses as $course)
                          <tr>
                          
                            <td>
                              <img src="{{ asset ('template/assets/images/faces/user.png' )}}" alt="image" />
                              <span class="ps-2">{{  $course->course_name }}</span>
                            </td>
                            <td> {{ $course->name }}</td>
                            <td> {{ $course->completion_date }} </td>
                            <td>{{ $course->qualification }}</td>
                            <td> {{ $course->created_at }} </td>
                            <td>
                              <div class="badge badge-outline-success">Completed</div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
       Copyright © Shadai Home <span id="currentYear"></span>
      </span>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script>
    document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script>
    <script src="{{ asset ('template/assets/vendors/js/vendor.bundle.base.js' )}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset ('template/assets/vendors/chart.js/Chart.min.js' )}}"></script>
    <script src="{{ asset ('template/assets/vendors/progressbar.js/progressbar.min.js' )}}"></script>
    <script src="{{ asset ('template/assets/vendors/jvectormap/jquery-jvectormap.min.js' )}}"></script>
    <script src="{{ asset ('template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js' )}}"></script>
    <script src="{{ asset ('template/assets/vendors/owl-carousel-2/owl.carousel.min.js' )}}"></script>
    <script src="{{ asset ('template/assets/js/jquery.cookie.js' )}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset ('template/assets/js/off-canvas.js' )}}"></script>
    <script src="{{ asset ('template/assets/js/hoverable-collapse.js' )}}"></script>
    <script src="{{ asset ('template/assets/js/misc.js' )}}"></script>
    <script src="{{ asset ('template/assets/js/settings.js' )}}"></script>
    <script src="{{ asset ('template/assets/js/todolist.js' )}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset ('template/assets/js/dashboard.js' )}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>