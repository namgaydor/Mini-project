<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
            <a class="nav-link"  href="club_details" aria-expanded="false">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Club Detail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="slot_details" aria-expanded="false">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">View Slot Detail</span>
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
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Club Details</h4>
                                   <p class="card-subtitle card-subtitle-dash">Club Advisors, Club Secretary and Club member counts are available below.</p>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0"  data-toggle="modal" data-target="#addClubModal"><i class="mdi mdi-account-plus"></i>Update Your Club Slot</button>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>Name of the Club</th>
                                        <th>Advisor</th>
                                        <th>Club Secretary</th>
                                        <th>Available Slots</th>
                                        <th>Total Member</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($clubs as $club)
                                      <tr>
                                        <td>
                                          <div class="d-flex ">
                                            <div>
                                              <h6>{{$club->c_name}}</h6>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>{{ $club->ad_name }}</h6>
                                        </td>
                                        <td>
                                          <h6>{{ $club->s_name }}</h6>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p>{{ $club->av_slots }}/{{ $club->total_mem }}</p>
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">{{ $club->total_mem }}</div></td>
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
         
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    <div class="modal fade" id="addClubModal" tabindex="-1" role="dialog" aria-labelledby="addClubModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
           <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addClubModalLabel">Update on Your Club</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="{{url('update_club_info')}}">
                    @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{Session::get('success')}}
                      </div>
                      @endif
                      @if(Session::has('fail'))
                      <div class="alert alert-danger">
                          {{Session::get('fail')}}
                      </div>
                      @endif
                        @csrf
                      <div class="form-group">
                          <label for="clubName">Select your Club</label>
                          <select class="form-control" name="c_name" id="clubName">
                              @foreach($clubs as $club)
                                  <option value="{{ $club->id }}">{{ $club->c_name }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="clubAdvisor">Club Advisor</label>
                          <input type="text" class="form-control" name="ad_name" id="clubAdvisor">
                      </div>
                      <div class="form-group">
                        <label for="clubSecretary">Club Secretary</label>
                        <input type="text" class="form-control" name="s_name" id="clubSecretary">
                      </div>
                      <div class="form-group">
                        <label for="availableSlots">Available Slots</label>
                        <input type="number" class="form-control" name="av_slots" id="availableSlots">
                      </div>
                      <div class="form-group">
                        <label for="totalMembers">Total Members</label>
                        <input type="number" class="form-control" name="total_mem" id="totalMembers">
                      </div>
                      <!-- Add other form fields as needed -->
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Add a button to submit the form if needed -->
              </div>
            </div>
          </div>
      </div>
    </div>
  <!-- container-scroller -->
  <script>
    // Fetch club details dynamically based on the selected club
    document.getElementById('clubName').addEventListener('change', function () {
        var clubId = this.value;
        fetch('/get-clubs/' + clubId)
            .then(response => response.json())
            .then(data => {
                // Update the form fields with the retrieved club details
                document.getElementById('clubAdvisor').value = data.ad_name;
                document.getElementById('clubSecretary').value = data.s_name;
                document.getElementById('availableSlots').value = data.av_slots;
                document.getElementById('totalMembers').value = data.total_mem;
            })
            
    });
  </script>

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

