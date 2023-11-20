<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Voice Sampling - 2</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <link href="vendors/select2/select2.min.css" rel="stylesheet" />
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <!-- ======= Header ======= -->
        <?php include 'components/header.php'; ?>
        <!-- End Header -->


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <!-- partial:partials/_sidebar.html -->

            <!-- ======= Sidebar ======= -->
            <?php include 'components/sidebar.php'; ?>
            <!-- End Sidebar-->


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h4 class="text-center">Voice Sampling - 2</h4>
                    <!-- <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6> -->
                    <form class="pt-3">

                        <div class="col-sm-12 col-xs-12 form-group">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <label class="d-flex justify-content-center align-items-center">Language: &nbsp;</label>
                                </div>

                                <div class="">
                                    <select class="rounded-pill">
                                        <option>&nbsp;&nbsp;English&nbsp;&nbsp;</option>
                                        <option>&nbsp;&nbsp;Hindi&nbsp;&nbsp;</option>
                                        <!-- <option>Category3</option>
                                    <option>Category4</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <p class="form-check-label text-muted mx-auto" for="childhood">
                                    How was your childhood? Tell us something about your childhood.
                                </p>
                                <a class="btn btn-outline-danger btn-lg" id="childhood" onclick="alert('Voice recording uploaded.');"><i class="fa fa-microphone" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="text-center">
                            <a class="btn btn-primary btn-lg font-weight-medium auth-form-btn" onclick="alert('Self Assessment completed.');window.location.href='my-page.php';">Submit</a>
                        </div>

                    </form>
                </div>
                <!-- content-wrapper ends -->


                <!-- partial:partials/_footer.html -->


                <!-- ======= Footer ======= -->
                <?php include 'components/footer.php'; ?>
                <!-- End Footer -->


                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <script src="vendors/select2/select2.min.js"></script>

    <!-- End custom js for this page-->
</body>

</html>