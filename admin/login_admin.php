<?php
require_once '../inc/db.php';

global $msg;
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql1 = "select * from admin where email='" . $email . "' and password='" . $pass . "' ";
    $result1 = mysqli_query($db, $sql1);
    if (mysqli_num_rows($result1) > 0) {
        $_SESSION['admin_login'] = $email;

        header("Location:show_karbar.php");
    } else {
        $msg = 'ایمیل یا پسورد اشتباه است ';
    }
}



?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login Page Idea</title>


      <link rel="stylesheet" href="../styles/style.css">

</head>

<body style="background-color: #eee">



<div class="content">
    <div class="row">
        <p class="admin-text m-top-xl">بخش ورود</p>
        <div class="panel">
        <form action="" method="post">
         <?php if ($msg) { ?>
                <div style="background-color: #C20000; color:#FFFFFF;border-radius: 5px; font-size:24px; "><?php echo $msg; ?></div><br>
            <?php } ?>
            <img class="client-logo" style="border-radius: 100%;" src="http://placehold.it/300x80/ddd/666?text=ADMIN LOGIN" alt="" />

       <input type="text" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login">
            <a class="forgot-pw" href="">رمز را فراموش کردید؟</a>
            <a class="forgot-pw" href="../index.php">خروج</a>
            </form>
        </div>
    </div>
</div>





</body>

</html>
