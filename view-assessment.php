<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Assessment</title>
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
                  <h4 class="text-center">View Assessment</h4>
                  <!-- <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6> -->
                  <form class="pt-3">

                    <div class="form-group">
                        <div class="text-center">
                            <label class="form-check-label text-muted mx-auto" for="current_date">
                                What is today’s date?
                            </label>
                            <input type="date" class="form-control form-control-lg" value="2023-11-23" id="current_date" placeholder="Provide details here">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <label class="form-check-label text-muted mx-auto" for="weekday">
                                Which day of the week is today?
                            </label>
                            <select class="weekday form-control form-control-lg" id="weekday">
                              <option value="Sunday">Sunday</option>
                              <option value="Monday">Monday</option>
                              <option value="Tuesday" >Tuesday</option>
                              <option value="Wednesday">Wednesday</option>
                              <option value="Thursday" selected>Thursday</option>
                              <option value="Friday">Friday</option>
                              <option value="Saturday">Saturday</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <label class="form-check-label text-muted mx-auto" for="month">
                                What is the current month?
                            </label>
                            <select class="month form-control form-control-lg" id="month">
                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
                              <option value="April">April</option>
                              <option value="May">May</option>
                              <option value="June">June</option>
                              <option value="July">July</option>
                              <option value="August">August</option>
                              <option value="September">September</option>
                              <option value="October">October</option>
                              <option value="November" selected>November</option>
                              <option value="December">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <label class="form-check-label text-muted mx-auto" for="year">
                                What is the current year?
                            </label>
                            <select class="year form-control form-control-lg" id="year">
                              <option value="2013">2013</option>
                              <option value="2014">2014</option>
                              <option value="2015">2015</option>
                              <option value="2016">2016</option>
                              <option value="2017">2017</option>
                              <option value="2018">2018</option>
                              <option value="2019">2019</option>
                              <option value="2020">2020</option>
                              <option value="2021">2021</option>
                              <option value="2022">2022</option>
                              <option value="2023" selected>2023</option>
                              <option value="2024">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>
                              <option value="2029">2029</option>
                              <option value="2030">2030</option>
                              <option value="2031">2031</option>
                              <option value="2032">2032</option>
                              <option value="2033">2033</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <label class="form-check-label text-muted mx-auto" for="current_time">
                                What is the current time?
                            </label>
                            <input type="time" value="02:00 PM" class="form-control form-control-lg" id="current_time" placeholder="Provide details here">
                        </div>
                    </div>

                      <div class="form-group">
                          <div class="text-center">
                              <label class="form-check-label text-muted mx-auto" for="town">
                                  Which town do you stay in?
                              </label>
                              <input type="text" class="form-control form-control-lg" value="Hassan" id="town" placeholder="Your town">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="text-center">
                              <label class="form-check-label text-muted mx-auto" for="state">
                                  In which state your town falls?
                              </label>
                              <input type="text" class="form-control form-control-lg" id="state" value="Karnataka" placeholder="Your state">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="text-center">
                              <label class="form-check-label text-muted mx-auto" for="country">
                                  What is your country’s name?
                              </label>
                              <input type="text" class="form-control form-control-lg" id="country" value="India" placeholder="Your country">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="text-center">
                              <label class="form-check-label text-muted mx-auto" for="floor">
                                  Your building has how many floors?
                              </label>
                              <input type="text" class="form-control form-control-lg" id="floor" value="3" placeholder="Floor in your building">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="text-center">
                              <label class="form-check-label text-muted mx-auto" for="current_floor">
                                  On which floor are you now?
                              </label>
                              <input type="text" class="form-control form-control-lg" id="current_floor" value="2" placeholder="Current floor">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="text-center">
                              <label class="form-check-label text-muted mx-auto" for="current_floor">
                                Where were you born? Tell us something about the town of your birth - what you liked, what you didn't?
                              </label>
                              <audio controls>
                               <source src="test.mp3" type="audio/mpeg">
                              Your browser does not support the audio element.
                              </audio>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="text-center">
                              <label class="form-check-label text-muted mx-auto" for="current_floor">
                                  How was your childhood? Tell us something about your childhood.
                              </label>
                              <audio controls>
                               <source src="test.mp3" type="audio/mpeg">
                              Your browser does not support the audio element.
                              </audio>
                          </div>
                      </div>


                      <div class="text-center">
                          <a class="btn btn-primary btn-lg font-weight-medium auth-form-btn" href="assessment-history.php">Back to Assessments</a>
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
    <!-- <script src="vendors/select2/select2.min.js"></script> -->

    <!-- End custom js for this page-->
</body>

</html>
