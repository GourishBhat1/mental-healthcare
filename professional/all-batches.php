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
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link href="vendors/select2/select2.min.css" rel="stylesheet" />
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">

  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" /> -->

  <!-- Datatables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <!-- Link to Datatable Card View styles -->
  <link rel="stylesheet" href="cardview.css">

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
          <h4 class="text-center">Bulk Assessment - Previous Batches</h4>

          <table id="myTable" class="display">
            <thead>
              <tr>
                <th>Batch ID</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1233214561</td>
                <td><a class="btn btn-primary" href="professional/bulk-list.php">View Batch</a></td>

              </tr>
              <tr>
                <td>1233214562</td>
                <td><a class="btn btn-primary" href="professional/bulk-list.php">View Batch</a></td>
              </tr>
              <tr>
                <td>1233214563</td>
                <td><a class="btn btn-primary" href="professional/bulk-list.php">View Batch</a></td>

              </tr>
            </tbody>
          </table>


          <div class="pt-5">
            <div class="text-center">
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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

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

  <!-- JS for datatables -->
  <script>
    $(document).ready(function() {
      var table = $('#myTable').DataTable({
        'dom': "<'row'<'col-md-2 col-lg-2'l><'col-md-5 col-lg-5'B><'col-md-5 col-lg-5 float-lg-right'f>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        'buttons': ['csv', 'excel', 'pdf', 'print'],
        // 'select': 'single',  
        ' columns': [{
            'data': 'Batch ID',
          },
          {
            'data': 'Username'
          },
          {
            'data': 'Mobile'
          },
          {
            'data': 'Details',
            'class': 'text-right'
          }
        ],
        'drawCallback': function(settings) {
          var api = this.api();
          // console.log(api);
          var $table = $(api.table().node());

          if ($table.hasClass('cards')) {

            // Create an array of labels containing all table headers
            var labels = [];
            $('thead th', $table).each(function() {
              labels.push($(this).text());
            });

            // Add data-label attribute to each cell
            $('tbody tr', $table).each(function() {
              $(this).find('td').each(function(column) {
                $(this).attr('data-label', labels[column]);
              });
            });

            var max = 0;
            $('tbody tr', $table).each(function() {
              max = Math.max($(this).height(), max);
            }).height(max);

          } else {
            // Remove data-label attribute from each cell
            $('tbody td', $table).each(function() {
              $(this).removeAttr('data-label');
            });

            $('tbody tr', $table).each(function() {
              $(this).height('auto');
            });
          }
        }

      });

      // Function to check media query on window resize
      function checkMediaQuery() {
        if (window.matchMedia('(max-width: 414px)').matches) {
          $(table.table().node()).toggleClass('cards');
          table.draw('page');
          console.log('Mobile View');

        }
      }

      // Check media query on initial page load
      checkMediaQuery();


    });
  </script>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script> -->

  <!-- End custom js for this page-->
</body>

</html>