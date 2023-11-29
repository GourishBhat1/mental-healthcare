<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bulk Assessment - Import List</title>
  <base href="../">
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
    <?php include '../components/header.php'; ?>
    <!-- End Header -->


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


      <!-- partial:partials/_sidebar.html -->

      <!-- ======= Sidebar ======= -->
      <?php include '../components/sidebar.php'; ?>
      <!-- End Sidebar-->


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <h4 class="text-center">Bulk Assessment</h4>
          <!-- <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6> -->
          <form class="pt-3" method="post" action="professinal/bulk-list.php">


            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="bulk_import" required>
                <label class="custom-file-label" for="bulk_import">Choose bulk import CSV file...</label>
              </div>
            </div>


            <div class="text-center pt-3">
              <a class="btn btn-primary font-weight-medium auth-form-btn" href="professional/bulk-list.php">Submit</a>
            </div>

          </form>


          <div class="pt-5">
            <div class="text-center">
              <a class="btn btn-outline-primary" href="professional/all-batches.php">View Previous Batches</a>
              <a class="btn btn-outline-primary" href="professional/home.php">Back to Appointments</a>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->


        <!-- partial:partials/_footer.html -->


        <!-- ======= Footer ======= -->
        <?php include '../components/footer.php'; ?>
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

  <!-- End custom js for this page-->
</body>

</html>