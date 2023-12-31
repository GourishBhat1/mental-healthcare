<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Search Service</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />


    <style>
        .myDiv {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <!-- ======= Header ======= -->
        <?php include 'components/header.php'; ?>
        <!-- End Header -->


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->


            <!-- partial:partials/_sidebar.html -->

            <!-- ======= Sidebar ======= -->
            <?php include 'components/sidebar.php'; ?>
            <!-- End Sidebar-->


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row justify-content-center d-flex">
                                <div class="col-12 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold text-center">Search Service</h3>
                                </div>






                                <div class="card col-12">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="myselection">Service Group Name</label>
                                                <select class="form-control" id="myselection">
                                                    <option selected disabled>Select Service Group Name</option>
                                                    <option value="psycho">Psychologist</option>
                                                    <option value="psychia">Psychiatrist</option>
                                                    <option value="yoga">Yoga Therapist</option>
                                                    <option value="wellness">Wellness Coach</option>
                                                </select>
                                            </div>

                                            <br>
                                            <div id="showpsycho" class="form-group myDiv">
                                                <label for="exampleSelectGender">Service Name</label>
                                                <ul class="list-group ">
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psycho1
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psycho2
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psycho3
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psycho4
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                </ul>
                                            </div>


                                            <div id="showpsychia" class="form-group myDiv">
                                                <label for="exampleSelectGender">Service Name</label>
                                                <ul class="list-group ">
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psychia1
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psychia2
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psychia3
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Psychia4
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                </ul>




                                            </div>

                                            <div id="showyoga" class="form-group myDiv">
                                                <label for="exampleSelectGender">Service Name</label>


                                                <ul class="list-group ">
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Yoga1
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Yoga2
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Yoga3
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Yoga4
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                </ul>


                                            </div>

                                            <div id="showwellness" class="form-group myDiv">
                                                <label for="exampleSelectGender">Service Name</label>


                                                <ul class="list-group ">
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Wellness1
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Wellness2
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Wellness3
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                    <li class="border border-primary list-group-item d-flex justify-content-between align-items-center">
                                                        Wellness4
                                                        <a href="#" class="rounded badge badge-primary badge-pill py-2 px-3">Add To Cart</a>
                                                    </li>
                                                </ul>
                                            </div>


                                        </form>
                                    </div>
                                </div>





                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="buy-service.php" type="button" class="btn btn-primary">Go To Cart</a>
                                </div>










                            </div>
                        </div>
                    </div>


                    <br>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="my-page.php" type="button" class="btn btn-primary">Back to My Page</a>
                    </div>





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
    <!-- End custom js for this page-->



    <!-- jQuery for hide and show  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myselection').on('change', function() {
                var demovalue = $(this).val();
                $("div.myDiv").hide();
                $("#show" + demovalue).show();
            });
        });
    </script>
</body>

</html>