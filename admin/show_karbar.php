<!DOCTYPE html>
<?php
require_once '../inc/db.php';
if (!isset($_SESSION['admin_login'])) {
    header("Location:login_admin.php");
}
global $error, $msg;
$sql1 = "select * from account";
$resulte1 = mysqli_query($db, $sql1);

/////
if(isset($_GET['idpersonel'])){

    $status=$_GET['idpersonel'];
    $id_personel=$_GET['idpersonel'];
    $sql2="update account set account_status_id='".$status."' where account_id='".$id_personel."' ";
    $resulte2=mysqli_query($db,$sql2);
    if($resulte2){
        $msg='تغیرات با موفقیت ثبت شد';
        session_start();
        $_SESSION['update']=$msg;
        echo 'EEEEEEEEEEEEEEEEE';

    } else{
        echo'no ';
    }
    }
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    <title></title>

     <!-- links input checked  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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


                    <ul class="nav navbar-nav hidden-xs">
                    </ul>



                    <ul class="nav navbar-nav navbar-right pull-right">


                        <li class="dropdown top-menu-item-xs">
                            <a href="../index.php?exhit=1"><i class="ti-power-off m-r-10 text-danger"></i> خروج</a>
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


                        <div class="">

                            <table border="0px" style="text-align: right;" class="table table-striped" id="datatable-editable">
                                <thead>
                                <tr class="gradeX">
                                    <th>نام</th>
                                    <th>نام خانوادگی</th>
                                    <th>شماره تلفن</th>
                                    <th>نام حساب</th>
                                    <th>پسورد</th>
                                    <th>کدپرسنلی</th>
                                    <th>حذف</th>
                                    <th>ویرایش</th>
                                    <th>وضعیت پرسنل</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($resulte1)) {
                                    ?>
                                    <tr class="gradeX">
                                        <td><a href="show_traffic.php?id=<?php echo $row['account_id'] ?>"><?php echo $row['account_first_name'] ?></a></td>
                                        <td><a href="show_traffic.php?id=<?php echo $row['account_id'] ?>" ><?php echo $row['account_last_name'] ?></a></td>
                                        <td><a href="show_traffic.php?id=<?php echo $row['account_id'] ?>"><?php echo $row['account_phone'] ?></a></td>
                                        <td><a href="show_traffic.php?id=<?php echo $row['account_id'] ?>"><?php echo $row['account_name'] ?></a></td>
                                        <td><a href="show_traffic.php?id=<?php echo $row['account_id'] ?>"><?php echo $row['account_password'] ?></a></td>
                                        <td><a href="show_traffic.php?id=<?php echo $row['account_id'] ?>"><?php echo $row['account_personal_code'] ?></a></td>
                                        <td><a href="?delete=<?php echo $row['account_id']; ?>" onclick="return confirm('آیا میخواهید پرسنل حذف شود؟')"><span><img src="../images/trash.png" alt="" /> </span></a></td>
                                        <td><a href="update.php?update=<?php echo $row['account_id']; ?>"><span><img src="../images/pencil.png" alt="" /> </span> </a></td>
                                        <?php if ($row['account_status_id'] == 1) { ?>
                                            <td   style="text-align: center" >
                                               <input type="checkbox" class='toggle' name="status" value="2" checked data-toggle="toggle">
                                               <input type="hidden" name="id_personel" value="<?php echo $row['account_id'] ?>" />
                                            <div class='status'>فعال</div>
                                            </td>
                                        <?php } else { ?>
                                            <td style="text-align: center">
                                            <form action="" method="GET">
                                            <a href="?idpersonel=<?php echo $row['account_id'];?>">
                                            <input type="checkbox" class='toggle' value="" data-toggle="toggle">ef</a>
                                            <input type="hidden" name="?status" value="1" />

                                            </form>
                                            <div class='status'>درانتظار تاید</div>
                                            </td>


                                        <?php } ?>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end: page -->

                </div> <!-- end Panel -->
            </div>




        </div>

    </div>
</div>

<!-- scripts check box  -->
<script>
  $(document).ready(function() {
   $('.toggle').click(function() {
      var current_status = $('.status').text();
      if (current_status === 'Untoggled'){
         $('.status').html('Toggled');
      }
      else{
        $('.status').html('Untoggled');
      }

    });
   });
 </script>

<!-- Personnel status panel -->

<script>
    function clickmi(){
// Get the modal
        var modal = document.getElementById('id01');

       document.getElementById('id01').style.display='block';
// When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }
</script>
<!--   Personnel status panel end -->


<script>

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





</body>
</html>


