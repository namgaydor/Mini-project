<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="subadmin/vendors/feather/feather.css">
  <link rel="stylesheet" href="subadmin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="subadmin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="subadmin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="subadmin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="subadmin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="subadmin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="subadmin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="subadmin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="subadmin/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
        <h4 class="welcome-sub-text">ManageYour<span class="text-black fw-bold">Club</span></h4>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{$data->name}} </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item" href="logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">          
          <li class="nav-item">
            <a class="nav-link"  href="club_details" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Club Detail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="slot_details" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Slot Details</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">  
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title">Club Member Information</h4>
                                <p class="card-description">
                                  <form action="{{ url('club_details') }}" method="GET">
                                      @csrf
                                      <div class="col-12">
                                          <select name="selectedClub" class="form-control bg-light border-0">
                                              <option value="">Select the club to filter</option>
                                              @foreach($clubs as $club)
                                                  <option value="{{ $club->id }}">{{ $club->c_name }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                      <div class="col-12">
                                          <button class="btn btn-dark w-100 py-3" type="submit">Filter</button>
                                      </div>
                                  </form>
                                </p>
                                <div class="table-responsive">
                                  <table class="table table-hover">
                                      <thead>
                                          <tr>
                                              <th>Name</th>
                                              <th>Student Number</th>
                                              <th>Department</th>
                                              <th>Email</th>
                                              <th>Phone</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @isset($clubMembers)
                                              @foreach($clubMembers as $member)
                                                  <tr>
                                                      <td>{{ $member->name }}</td>
                                                      <td>{{ $member->std_no }}</td>
                                                      <td>{{ $member->department }}</td>
                                                      <td>{{ $member->email }}</td>
                                                      <td>{{ $member->phone }}</td>
                                                  </tr>
                                              @endforeach
                                          @else
                                              <tr>
                                                  <td colspan="5">No club members selected</td>
                                              </tr>
                                          @endisset
                                      </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="subadmin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="subadmin/vendors/chart.js/Chart.min.js"></script>
  <script src="subadmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="subadmin/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="subadmin/js/off-canvas.js"></script>
  <script src="subadmin/js/hoverable-collapse.js"></script>
  <script src="subadmin/js/template.js"></script>
  <script src="subadmin/js/settings.js"></script>
  <script src="subadmin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="subadmin/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="subadmin/js/dashboard.js"></script>
  <script src="subadmin/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

