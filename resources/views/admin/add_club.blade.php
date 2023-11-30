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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
              <a class="mdc-drawer-link" href="manage_club">
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
      <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header bg-success text-white">
                Club Information
            </div>
            <div class="card-body">
                <form action="{{url('upload_club')}}" method="POST">
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
                    <input type="text" class="form-control" id="clubName" name="club_name" required>
                </div>
                
                <button type="submit" class="btn btn-success">Add</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
        <!-- partial:partials/_footer.html -->
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