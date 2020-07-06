<?php
require_once'../inc/db.php';
if(!isset($_SESSION['admin_login'])){header("Location:login_admin.php");}

$id_update=$_GET['update'];
$sql1="select * from account where account_id='".$id_update."'";
$resulte1=mysqli_query($db,$sql1);
$row=mysqli_fetch_array($resulte1);
if(isset($_POST['sub'])){
    $account_name=$_POST['account_name'];
    $account_password=$_POST['account_password'];
    $account_first_name=$_POST['account_first_name'];
    $account_last_name=$_POST['account_last_name'];
    $account_phone=$_POST['account_phone'];
    $status=$_POST['status'];
    $account_personal_code=$_POST['account_personal_code'];

    $sql2="update account set account_name='".$account_name."', account_password='".$account_password."', account_first_name='".$account_first_name."', account_last_name='".$account_last_name."',account_phone='".$account_phone."',account_status_id='".$status."',account_personal_code='".$account_personal_code."' where account_id='".$id_update."' ";
    $resulte2=mysqli_query($db,$sql2);
    if($resulte2){
        $msg='تغیرات با موفقیت ثبت شد';
        session_start();
        $_SESSION['update']=$msg;

        header("Location:show_karbar.php");

    } else{
        echo 'no ';
    }
}


?>
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
    <link href="../styles/style_forms.css" type="text/css" rel="stylesheet"/>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/persianDatepicker.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/datatables.css" />

</head>


<body class="fixed-left-void">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown top-menu-item-xs">
                            <a href="../index.php"?exhit=1><i class="ti-power-off m-r-10 text-danger"></i> خروج</a>
                            <ul class="dropdown-menu">


                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Page-Title -->





                <div class="panel">

                    <div class="panel-body">


                        <div class="forms">
                            <form action="" method="post">

                                <b>:نام</b><input type="text" class="style_text"  name="account_first_name"  value="<?php echo$row['account_first_name'] ?>" />     <br>
                                <b>:نام خانوادگی</b><input type="text" class="style_text"  name="account_last_name"  value="<?php echo $row['account_last_name']?>" /> <br>
                                <b>: نام حساب  </b><input type="text" class="style_text"  name="account_name"  value="<?php echo$row['account_name'] ?>" />     <br>
                                <b>:پسورد</b><input type="text" class="style_text"  name="account_password"  value="<?php echo $row['account_password']?>" /> <br>



                                <b>:شماره تلفن</b><input type="text" class="style_text"  name="account_phone" value="<?php echo $row['account_phone']?>" /> <br>
                                <b>:کد پرسنلی</b><input type="text" class="style_text"  name="account_personal_code"  value="<?php echo $row['account_personal_code']?>" /> <br>
                                <b style="float: right;margin-left: 7px;">وضعیت </b>
                                <br>
                                <select name="status" class="style_text"  id="" style="width: 300px;height: 40px;border-radius: 5px;margin-top:15px;margin-bottom: 15px; ">
                                    <option value="<?php if($row['account_status_id']==1){echo 1;}else{echo 2;}?>"><?php if($row['account_status_id']==1){echo 'تایید';}else{echo'درانتظار تایید...';}?></option>

                                    <option value="<?php if($row['account_status_id']==2){echo 1;}else{echo 2;}?>"><?php if($row['account_status_id']==2){echo 'تایید';}else{echo'درانتظار تایید...';}?></option>
                                </select>      <br>
                                <input type="submit" name="sub" class="sub"  value="ذخیره تغیرات" />  <br><br>

                            </form>

                        </div>
                    </div>
                </div>
            </div>





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


        <!-- Examples -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables.bootstrap.js"></script>
        <script src="assets/js/mindmup-editabletable.js"></script>
        <script src="assets/js/numeric-input-example.js"></script>


        <script src="assets/js/datatables.editable.init.js"></script>

        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();

        </script>




</body>
</html>


