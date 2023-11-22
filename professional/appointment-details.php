<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Current Episode</title>
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
          <h4 class="text-center">Current Episode</h4>
          <!-- <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6> -->
          <form class="pt-3" method="post">

            <div class="col-sm-12 col-xs-12 form-group">
              <div class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                  <p class="d-flex justify-content-center align-items-center">John Doe 03-11-2023 14:45</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="text-center">
                <label class="form-check-label text-muted mx-auto" for="meeting_link">
                  Enter Meeting Link
                </label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter Meeting Link">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-center">
              <a class="btn btn-primary font-weight-medium auth-form-btn" href="professional/home.php">Join Meeting</a>
            </div>

          </form>

          <form class="pt-3" method="post">
            <div class="form-group text-center">
              <label class="form-check-label text-muted mx-auto" for="current_episode">
                Current Episode Details
              </label>
              <textarea id='current_episode'></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="episode_save">Save</button>
            </div>
          </form>

          <!-- <div class="pt-3">
            <p>Episodes list comes here</p>
          </div> -->
          <br>
          <br>
          <div class="col-12 mb-4 mb-xl-0">
            <h5 class="font-weight-bold text-center">Past Episodes</h5>

          </div>

          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-12 col-lg-8 grid-margin transparent">

              <ul class="list-group">
                <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                  Episode 3-11-2023
                  <a href="professional/episode-details.php" class="rounded badge badge-primary badge-pill py-2 px-3"><i class="icon-plus menu-icon"></i></a>
                </li>
                <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                  Episode 4-11-2023
                  <a href="professional/episode-details.php" class="rounded badge badge-primary badge-pill py-2 px-3"><i class="icon-plus menu-icon"></i></a>
                </li>
                <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                  Episode 5-11-2023
                  <a href="professional/episode-details.php" class="rounded badge badge-primary badge-pill py-2 px-3"><i class="icon-plus menu-icon"></i></a>
                </li>
                <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                  Episode 6-11-2023
                  <a href="professional/episode-details.php" class="rounded badge badge-primary badge-pill py-2 px-3"><i class="icon-plus menu-icon"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2"></div>
          </div>

          <div class="pt-3">
            <div class="text-center">
              <a class="btn btn-primary" href="professional/home.php">Go To Home Page</a>
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
  <script src="vendors/select2/select2.min.js"></script>
  <script src="vendors/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: '#current_episode',
      height: 500,
      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help'
    });
  </script>

  <!-- End custom js for this page-->
</body>

</html>