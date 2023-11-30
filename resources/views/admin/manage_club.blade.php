<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Club Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../admin/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../admin/assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../admin/assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../admin/assets/images/favicon.png" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>
<script src="../admin/assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
       
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
            <h1 class="name">Admin</h1> 
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('manage_club')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Manage Club
              </a>
            </div>
            
          </nav>
        </div>
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="user-name">{{$data->name}}</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal"><a href="logout">Logout</a></h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
          <a href="add_club">
                <button class="mdc-button mdc-button--raised mdc-button--dense">
                    Create Club</button></a>
                    <a href="add_club_advisors">
                      <button class="mdc-button mdc-button--raised mdc-button--dense">
                    Add Advisors</button></a>
                      <button class="mdc-button mdc-button--raised mdc-button--dense" data-toggle="modal" data-target="#addClubModal">
                          Add Club and Advisors
                      </button>       
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card bg-success text-white">
                <h5 class="card-title card-padding">Clubs and Advisors</h5>
                    <div class="mdc-card p-0">
                        <div class="table-responsive">
                            <table class="table table-hoverable">
                            <thead>
                                <tr>
                                <th class="text-left">Name of the Club</th>
                                <th>Club Advisor</th>
                                <th>Club Secretary</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clubData as $club)
                                <tr>
                                    <td class="text-left">{{ $club->c_name }}</td>
                                    <td>{{ $club->ad_name }}</td>
                                    <td>{{ $club->s_name }}</td>
                                    <td>
                                        <a href="{{ route('delete_club', ['id' => $club->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this club?')">
                                        <button class="mdc-button text-button--secondary"> Delete</button>
                                        </a>
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
          <div class="modal fade" id="addClubModal" tabindex="-1" role="dialog" aria-labelledby="addClubModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addClubModalLabel">Add Club and Advisors</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form method="POST" action="{{url('assign_club')}}">
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
                              <label for="clubName">Club Name</label>
                              <select class="form-control" name="c_name">
                              <option value="">Select Club</option>
                                  @foreach($clubAD as $club)
                                      <option value="{{ $club->club_name }}">{{ $club->club_name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="clubAdvisor">Club Advisor</label>
                              <select class="form-control" name="ad_name">
                              <option value="">Assign Club Advisor</option>
                                  @foreach($userData as $advisor)
                                      <option value="{{ $advisor->name }}">{{ $advisor->name }}</option>
                                  @endforeach
                              </select>
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

        </main>
        <!-- partial:partials/_footer.html -->
            <!-- Modal -->


        <footer>
          
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="../admin/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../admin/assets/vendors/chartjs/Chart.min.js"></script>
  <script src="../admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../admin/assets/js/material.js"></script>
  <script src="../admin/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../admin/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 