<?php
require_once '../inc/db.php';
if (!isset($_SESSION['admin_login'])) {
    header("Location:login_admin.php");
}
$id = $_GET['id'];
$sql1 = "select * from traffic right join account on traffic.traffic_account_id=account.account_id where account_id='" . $id . "' and traffic.traffic_type_id= 1 ";
$resulte1 = mysqli_query($db, $sql1);

$sql2 = "select * from traffic right join account on traffic.traffic_account_id=account.account_id where account_id='" . $id . "' and traffic.traffic_type_id= 2 ";
$resulte2 = mysqli_query($db, $sql2);
$rowcount=mysqli_num_rows($resulte1);
?>


<html>

<head>
    <title>ترافیک کاربر</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        .menu {
            float: left;
            width: 20%;
            text-align: center;
        }

        .menu a {
            background-color: #e5e5e5;
            padding: 8px;
            margin-top: 7px;
            display: block;
            width: 100%;
            color: black;
        }

        .main {
            float: left;
            width: 60%;
            padding: 0 20px;
        }

        .right {
            background-color: #e5e5e5;
            float: left;
            width: 20%;
            padding: 15px;
            margin-top: 7px;
            text-align: center;
        }

        @media only screen and (max-width:620px) {

            /* For mobile phones: */
            .menu,
            .main,
            .right {
                width: 100%;
            }
        }





        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            color: #616161;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #D9D9D9;
        }

        a {
            text-decoration: none;

        }

        a:hover {
            font-size: 20px;
            background-color: #999999;
            border-radius: 8px;

        }


        * {
            font-family: 'Far.Roya';
            src: url('http://www.fontfarsi.ir/Content/Fonts/EOT/Far_Roya.eot');
            src: local('☺'),
            url('http://www.fontfarsi.ir/Content/Fonts/WOFF/Far_Roya.woff') format('woff'),
            url('http://www.fontfarsi.ir/Content/Fonts/TTF/Far_Roya.ttf') format('truetype'),
            url('http://www.fontfarsi.ir/Content/Fonts/SVG/Far_Roya.svg') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        * {
            font-family: 'Far.Roya', Tahoma, Sans-Serif;
            font-size: 18px;
        }
    </style>
</head>

<body style="font-family:Verdana;color:#aaaaaa;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
    <img src="../imags/3.jpg" style="width: 100%; height: 400px;" alt="" />
</div>
<div style="overflow:auto">
    <div class="menu">
        <a href="show_karbar.php"><b>بازگشت </b></a>
        <a href="login_admin.php?exit=1"><b>خروج</b></a>
    </div>

    <div class="main">

        <div style="background-color:#f1f1f1;padding:15px; ">
            <h1 style="padding-left: 30%;"><?php //$row2 = mysqli_fetch_array($resulte1);
                //echo $row2['account_first_name'];
                //echo "  ";
                //echo $row2['account_last_name']; ?></h1>
            <h3 style="padding-left: 30%"></h3>
        </div>

        <div style="width: 100%;height: 5px; background-color: #85231A;border-radius: 10px;margin-top: 3px;"></div>
        <?php if ($error) { ?>
            <div style="background-color: #D60000; color:#FFFFFF;border-radius: 5px; font-size:24px;width: 100%;text-align: center"><?php echo $error; ?></div>
        <?php } ?>
        <?php if ($msg) { ?>
            <div style="background-color: #069308; color:#FFFFFF;border-radius: 5px; font-size:24px;width: 100%;text-align: center ">
                <?php echo $msg; ?>
                <!--<script type="text/javascript">alert('از انتخاب شما متشکریم')</script> -->
            </div>
        <?php } ?>
        <div dir="rtl" style="overflow-x:auto;">
            <table id="customers">


                <th>ورود</th>
                <th>خروج </th>
                <?php  for($i=0;$i<=$rowcount;$i++){
                    $row1=mysqli_fetch_array($resulte1);
                    $row2=mysqli_fetch_array($resulte2);
                    ?>
                     <?php// if($row2['traffic_date']!=$row1['traffic_date']){?>
                    <tr>
                        <td><?php echo $row1['traffic_input_time']; ?></td>
                        <td><?php echo $row2['traffic_input_time']; ?></td>
                    </tr>
                    <?php// }?>
                <?php }  ?>
            </table>
        </div>


    </div>



    <div class="right">
        <img src="" alt="" /> <br>
        <p></p>
    </div>

</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;"></div>

</body>

</html>