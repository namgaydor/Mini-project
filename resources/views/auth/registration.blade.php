<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">

                    <div class="bg-light rounded p-5" >
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Register</h3>
                        </div>
                        <form action="{{route('register-user')}}" method="post">
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
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name" name="name" value="{{old('name')}}" style="height: 55px;">
                                    <span class="text-danger">@error('name'){{$message}} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Student Number" name="std_no" value="{{old('std_no')}}" style="height: 55px;">
                                    <span class="text-danger">@error('std_no'){{$message}} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email" name="email" value="{{old('email')}}" style="height: 55px;">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Contact Number" name="phone" value="{{old('phone')}}" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-control bg-white border-0" name="department" style="height: 55px;">
                                        <option value="">Select Department</option>
                                        <option value="DEPARTMENT OF CIVIL ENGINEERING & SURVEYING" class="dropdown-item">DEPARTMENT OF CIVIL ENGINEERING & SURVEYING</option>
                                        <option value="DEPARTMENT OF ELECTRICAL ENGINEERING" class="dropdown-item">DEPARTMENT OF ELECTRICAL ENGINEERING</option>
                                        <option value="DEPARTMENT OF MECHANICAL ENGINEERING"class="dropdown-item">DEPARTMENT OF MECHANICAL ENGINEERING</option>
                                        <option value="DEPARTMENT OF ELECTRONIC AND COMMUNICATION ENGINEERING" class="dropdown-item">DEPARTMENT OF ELECTRONIC AND COMMUNICATION ENGINEERING</option>
                                        <option value="DEPARTMENT OF INFORMATION TECHNOLOGY" class="dropdown-item">DEPARTMENT OF INFORMATION TECHNOLOGY</option>
                                        <option value="DEPARTMENT OF HUMANITIES & MANAGEMENT"class="dropdown-item">DEPARTMENT OF HUMANITIES & MANAGEMENT</option>
                                        <!-- Add more department options as needed -->
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="password" class="form-control bg-white border-0" placeholder="Enter Your Password" name="password" style="height: 55px;">
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    <button class="btn btn-primary w-50 py-3" type="submit">Register</button>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <a href="login">Already Registered !! Login Here</a>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->

                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Vendor Start -->

    <!-- Vendor End -->
    

    <!-- Footer Start -->

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>