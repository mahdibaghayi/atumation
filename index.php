<?php
require_once'inc/db.php';
if (isset($_GET['exit'])) {
    unset($_SESSION['admin_login']);
}
if(isset($_GET['exit'])){unset($_SESSION['user_login']);}
?>
dddd
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    <title></title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/css/morris.css">
    <link href="assets/css/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/popup.css">
    <link href="assets/css/persianDatepicker-default.css" type="text/css" rel="stylesheet"/>
    <link href="assets/css/table-sortable.css" type="text/css" rel="stylesheet"/>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/persianDatepicker.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.js"></script>


</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="#" class="logo">
                    <img src="images/gold-texture-golden-png (1).png" style="width: 200px;" />
                </a>

            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">

                        <span class="clearfix"></span>
                    </div>

                    <ul class="nav navbar-nav hidden-xs">
                    </ul>
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown top-menu-item-xs">
                            <a href="" class="" data-toggle="dropdown" aria-expanded="true"><img src="images/login.png" style="width: 40px;height: 40px" alt="user-img" class=""> </a>
                            <ul class="dropdown-menu">
                                <li><a href="user/login_users.php"><i class=""><img src="images/user.png" alt="" /> </i>ورود پرسنل</a></li>
                                <li><a href="admin/login_admin.php"><i class=""><span><img src="images/icons8-manager-32.png" alt="" /> </span></i>ورود به پنل مدیریت </a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>

                    <li class="text-muted menu-title">منو</li>

                    <li class="has_sub">
                    <ul class="list-unstyled">
                    </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class=""><img src="images/icons8-contact-details-24.png" style="float: right" alt="" /></i> <span>مدیریت </span> <span class="menu-arrow"></span></a>
                        <ul class="">
                            <li><a href="user/login_users.php">ورود و خروج پرسن</a></li>
                            <li><a href="admin/login_admin.php">ورود به بخش مدیریت </a></li>
                            <li><a href="user/login_users.php">پروفایل پرسنل </a></li>

                        </ul>
                    </li>




                    <li class="">
                        <a href="javascript:void(0);" class="waves-effect"><i class=""><img src="images/invoice (1).png" alt="" /> </i> <span> تیکت ها </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                        </ul>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <p class="text-muted m-b-30 font-13">

                            </p>
                            <div class="row">
                                <div class="col-md-12">

                                    <section class="progress-demo">

                                        <!--<button class="ladda-button ladda-button-demo btn btn-success"  data-style="zoom-in">Submit</button>-->
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->

        </div> <!-- content -->


        <footer class="footer text-right">

        </footer>


    </div>



    <script>
        var resizefunc = [];
    </script>



    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <script src="assets/js/jquery.peity.min.js"></script>
    <!-- jQuery  -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script src="assets/js/spin.min.js"></script>
    <script src="assets/js/ladda.min.js"></script>
    <script src="assets/js/ladda.jquery.min.js"></script>
    <script>

        $(document).ready(function () {

            // Bind normal buttons

            // Bind progress buttons and simulate loading progress
            Ladda.bind('.progress-demo .ladda-button', {
                callback: function (instance) {
                    var progress = 0;
                    var interval = setInterval(function () {
                        progress = Math.min(progress + Math.random() * 0.6, 1);
                        instance.setProgress(progress);

                        if (progress === 1) {
                            instance.stop();
                            clearInterval(interval);
                        }
                    }, 200);
                }
            });


        });

    </script>

</body>
</html>