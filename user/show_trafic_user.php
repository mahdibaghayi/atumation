﻿<?php
require_once'../inc/db.php';
include_once'date_shamsi/jdf.php';
if(!isset($_SESSION['user_login'])){header("Location:login_users.php");}
$account_personal_code=$_SESSION['account_personal_code'];
//show_trafic_personel($id_showtrafic);
global $db;
$sql1 = "select * from traffic right join account on traffic.traffic_account_id=account.account_id where account_personal_code= '".$account_personal_code."'  and traffic.traffic_type_id= 1";
$resulte1 = mysqli_query($db, $sql1);
$sql2 = "select * from traffic right join account on traffic.traffic_account_id=account.account_id where account_personal_code= '".$account_personal_code."'  and traffic.traffic_type_id= 2 ";
$resulte2 = mysqli_query($db, $sql2);
$rowcount=mysqli_num_rows($resulte1);
$sql3="select * from account where account_personal_code='".$account_personal_code."' ";
$resulte3=mysqli_query($db,$sql3);
$row3=mysqli_fetch_array($resulte3);
//////////////////////////
?>
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
        <link rel="stylesheet" href="css/style_profile.css" />
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
                    <img src="../images/gold-texture-golden-png.png" style="width:200px;" />
                </a>

            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="md md-menu"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>

                    <ul class="nav navbar-nav hidden-xs">
                    </ul>



                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="hidden-xs">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                        </li>
                        <li class="hidden-xs">

                        </li>
                        <li class="dropdown top-menu-item-xs">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="../images/login.png" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=profile"><i class="ti-user m-r-10 text-custom"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> تنظیمات</a></li>
                                <li class="divider"></li>
                                <li><a href="../index.php?exit=1"><i class="ti-power-off m-r-10 text-danger"></i> خروج</a></li>
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
                        <a href="profile.php"  class="waves-effect "><i ><?php if(!$row3['picture_user']==''){?><img src="images/<?php echo $row3['picture_user'];?>" class="image_user_right" alt="" /><?php }else{ ?><img src="../images/userprofile.png" alt="" /><?php }?></i> <span>پروفایل</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="show_trafic_user.php" class="waves-effect"><i class=""><img src="../images/process.png" alt="" /></i> <span>مدیرت ورود وخروج</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">


                        </ul>
                    </li>



                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class=""><img src="../images/technical-support.png" alt="" /></i> <span> پشتیبانی </span> <span class="menu-arrow"> </span></a>
                        <ul class="list-unstyled">

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class=""><img src="../images/cost.png" alt="" /></i> <span> صورت حساب ها</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="Bills.php" class="">صورت حساب ها</a></li>
                            <li><a href="?page=transaction" class="">تراکنش ها</a></li>
                            <li><a href="?page=getpayments" class="">دریافت وجه</a></li>
                            <li><a href="?page=Settingspay" class="">تنظیمات پرداخت</a></li>

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a  href="?page=Activation" class=" waves-effect"><i class=""><img src="../images/activation.png" alt="" /></i> <span> فعال سازی </span></a>

                    </li>



                    <li class="text-muted menu-title">ادامه</li>




                    <li><a href="../index.php" >خروج</a></li>






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
                                <?php //$row3=mysqli_fetch_array($resulte2)?>
                        			<h4 class="m-t-0 header-title"><b>نمایش ساعت وتاریخ ورود وخروج  <?php// echo $row3['account_first_name'];echo" "; echo $row3['account_last_name'];?></b></h4>

                                <div class="panel-body">


                        <div class="">

                            <table class="table table-striped" id="datatable-editable">
                            <span id="show_time_1" onload="" style="font-size:18px;font-family:tahoma,arial;">ساعت: </span>
                                <thead>
                                <tr class="gradeX">
                                    <th>ورود</th>
                                    <th>خروج</th>
                                    <th>ورود</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for($i=0;$i<=$rowcount;$i++){
                                    $row1=mysqli_fetch_array($resulte1);
                                    $row2=mysqli_fetch_array($resulte2);
                                    $vorood=$row1['traffic_input_time'];
                                    $khoroog=$row2['traffic_input_time'];
                                    $sql_times="SELECT TIMEDIFF('$vorood',' $khoroog')";

                                    echo $sql_times;
                                    ?>
                                   <!--
                                    <tr class="gradeX">
                                        <?php //if(!$row1['traffic_date']!=$row2['traffic_date']){?>
                                        <td><a href=""><?php echo $row1['traffic_input_time'];?></a></td>
                                        <td><a href="" ><?php echo $row2['traffic_input_time'];?></a></td>
                                          <td><a href=""><?php echo $timesql3 ;?></a></td>

                                        <?php //}?>
                                    </tr>-->

                                     <?php } ?>




                                </tbody>
                            </table>
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

            function show_time_1(){
 d=new Date();
 H=d.getHours();H=(H<10)?"0"+H:H;
 i=d.getMinutes();i=(i<10)?"0"+i:i;
 s=d.getSeconds();s=(s<10)?"0"+s:s;
 document.getElementById('show_time_1').innerHTML=H+":"+i+":"+s;
 setTimeout("show_time_1()",1000);/* 1 sec */
} show_time_1();
        </script>

</body>
</html>