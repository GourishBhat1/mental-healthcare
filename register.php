<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>'Person' Registration</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="images/logo.svg" alt="logo">
                            </div>
                            <h4 class="text-center">'Person' Registration</h4>

                            <form class="pt-3">
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            I am above 18 years
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted" id="termsLabel">
                                            <input type="checkbox" class="form-check-input">
                                            I accept the terms & conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Aadhar Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label text-muted">
                                        Date Of Birth
                                    </label>
                                    <input type="date" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Date Of Birth">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                                        <option selected disabled>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Mobile Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Pincode">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="District">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="State">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Country">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Create Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Check this if you are a Service Provider
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="additional-profile-info.php">SIGN UP</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="index.php" class="text-primary">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->


    <!-- Additional JS -->

    <script>
        document.getElementById('termsLabel').addEventListener('click', function(event) {
            // Check if the clicked element is the label text
            if (event.target.tagName.toLowerCase() !== 'input') {
                // Redirect to the new page
                // window.location.href = 'https://google.com';

                // Open the URL in a new tab
                window.open('https://google.com', '_blank');
            }
        });
    </script>
</body>

</html>