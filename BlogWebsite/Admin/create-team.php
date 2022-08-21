<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Sash – Bootstrap 5 Admin & Dashboard Template </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link href="./assets/css/dark-style.css" rel="stylesheet" />
    <link href="./assets/css/transparent-style.css" rel="stylesheet">
    <link href="./assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="./assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="./assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="./assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->

            <?php include('./includes/Header.php') ?>
            <!-- /app-Header -->
            <!--APP-SIDEBAR-->
            <?php include('./includes/Sidebar.php') ?>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid my-5">

                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add new Team Member</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name1" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name2" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <input type="email" class="form-control" id="inputEmail5" placeholder="Email Address" autocomplete="username">
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" class="form-control" id="address" placeholder="AddressLine1">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="country" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="region" placeholder="Country/Region">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="city" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id="postal" placeholder="Zip/Postal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mb-5 mt-3 mb-lg-0">
                                        Attach your cv.
                                                    <input type="file" class="dropify" data-bs-height="180" />
                                                </div>

                                        <div class="form-footer mt-5">
                                            <a href="javascript:void(0)" class="btn btn-primary">Confirm  Details</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </div>
        <!--app-content close-->

    </div>

    <!-- Sidebar-right -->

    <!--/Sidebar-right-->

    <!-- Country-selector modal-->

    <!-- Country-selector modal-->

    <?php include('./includes/Footer.php') ?>

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="./assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="./assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="./assets/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="./assets/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="./assets/js/circle-progress.min.js"></script>



    <!-- SIDEBAR JS -->
    <script src="./assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="./assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="./assets/plugins/p-scroll/pscroll.js"></script>
    <script src="./assets/plugins/p-scroll/pscroll-1.js"></script>


    <!-- INTERNAL SELECT2 JS -->
    <script src="./assets/plugins/select2/select2.full.min.js"></script>





    <!-- SIDE-MENU JS-->
    <script src="./assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- TypeHead js -->
    <script src="./assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="./assets/js/typehead.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="./assets/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="./assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="./assets/js/custom.js"></script>

</body>

</html>