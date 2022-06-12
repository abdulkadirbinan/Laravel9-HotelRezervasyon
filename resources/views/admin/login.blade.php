<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets')}}/admin/images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->

</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        @include('home.messages')
                        <form action="{{route('loginadmincheck')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Username or email *</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button <a href="/admin" type="submit" class="btn btn-primary btn-block enter-btn">Login </a></button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-facebook me-2 col">
                                    <i class="mdi mdi-facebook"></i> Facebook </button>
                                <button class="btn btn-google col">
                                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                            </div>
                            <p class="sign-up">Don't have an Account?<a href="/registeruser"> Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('assets')}}/admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets')}}/admin/js/off-canvas.js"></script>
<script src="{{ asset('assets')}}/admin/js/hoverable-collapse.js"></script>
<script src="{{ asset('assets')}}/admin/js/misc.js"></script>
<script src="{{ asset('assets')}}/admin/js/settings.js"></script>
<script src="{{ asset('assets')}}/admin/js/todolist.js"></script>
<!-- endinject -->
<script src="{{ asset ('assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ asset ('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset ('assets')}}/js/popper.min.js"></script>
<script src="{{ asset ('assets')}}/js/bootstrap.min.js"></script>
<script src="{{ asset ('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset ('assets')}}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset ('assets')}}/js/ajax-form.js"></script>
<script src="{{ asset ('assets')}}/js/waypoints.min.js"></script>
<script src="{{ asset ('assets')}}/js/jquery.counterup.min.js"></script>
<script src="{{ asset ('assets')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset ('assets')}}/js/scrollIt.js"></script>
<script src="{{ asset ('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{ asset ('assets')}}/js/wow.min.js"></script>
<script src="{{ asset ('assets')}}/js/nice-select.min.js"></script>
<script src="{{ asset ('assets')}}/js/jquery.slicknav.min.js"></script>
<script src="{{ asset ('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset ('assets')}}/js/plugins.js"></script>
<script src="{{ asset ('assets')}}/js/gijgo.min.js"></script>

<!--contact js-->
<script src="{{ asset ('assets')}}/js/contact.js"></script>
<script src="{{ asset ('assets')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset ('assets')}}/js/jquery.form.js"></script>
<script src="{{ asset ('assets')}}/js/jquery.validate.min.js"></script>
<script src="{{ asset ('assets')}}/js/mail-script.js"></script>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('assets')}}/admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets')}}/admin/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('assets')}}/admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/admin/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets')}}/admin/js/off-canvas.js"></script>
<script src="{{ asset('assets')}}/admin/js/hoverable-collapse.js"></script>
<script src="{{ asset('assets')}}/admin/js/misc.js"></script>
<script src="{{ asset('assets')}}/admin/js/settings.js"></script>
<script src="{{ asset('assets')}}/admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('assets')}}/admin/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
