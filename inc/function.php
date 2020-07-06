<?php
require_once 'db.php';
/*function show_trafic_personel($id_showtrafic){
global $db;
$sql1 = "select * from traffic right join account on traffic.traffic_account_id=account.account_id where account_personal_code= '".$id_showtrafic."'  and traffic.traffic_type_id= 1 ";
$resulte1 = mysqli_query($db, $sql1);
$sql2 = "select * from traffic right join account on traffic.traffic_account_id=account.account_id where account_personal_code= '".$id_showtrafic."'  and traffic.traffic_type_id= 2 ";
$resulte2 = mysqli_query($db, $sql2);
$rowcount=mysqli_num_rows($resulte1);
}*/

//بخش نمایش صورت حساب مشتری صفحه ی bills
function show_payment($account_id){

global $db;
$sql="select * from payment,account where payment.id_personel=account.account_id and payment.id_personel='".$account_id."' ";
$resulte=mysqli_query($db,$sql);
return $resulte;
/*$sql2="select * from account where account_id='".$account_id."'";
$resulte2=mysqli_query($db,$sql2);
$row2=mysqli_fetch_array($resulte2);
return $resulte2;*/
}
//////////////////////////////////////////////

//ورود به بخش پرسنل
function personel_login(){
global $db;
if (isset($_POST['submit'])) {
    $account_personal_code = $_POST['account_personal_code'];
    $password_personel = $_POST['pass_personel'];
    $sql1 = "select * from account where account_personal_code='" . $account_personal_code . "' and account_password='" . $password_personel . "' ";
    $result1 = mysqli_query($db, $sql1);
    if (mysqli_num_rows($result1)> 0) {
        $row=mysqli_fetch_array($result1);
        $_SESSION['account_id']=$row['account_id'];
        $_SESSION['user_login'] = $password_personel;
        $_SESSION['account_personal_code']=$account_personal_code;
        header("Location:profile.php");
    } else {
          $msg = 'ایمیل یا پسورد اشتباه است ';
        return $msg;
    }
}
}
function cheng_pictuer_user(){
    global $db,$erors_type;
if(isset($_POST['sub'])){

$name_imag=$_FILES['picuser']['name'];
$tmp_name=$_FILES['picuser']['tmp_name'];
$image_type=$_FILES['picuser']['type'];
if($name_imag==Null){}else{
/*if($image_type!="jpg" && $image_type!="png" && $image_type!="jpeg"){
    $erors_type='لطفا عکس اپلود کنید!';
    return $erors_type;
}else{*/
$accont_pesonel_code=$_SESSION['account_personal_code'];
$sql="update account set picture_user='".$name_imag."' where account_personal_code='".$accont_pesonel_code."' " ;
$resulte=mysqli_query($db,$sql);
if(move_uploaded_file($tmp_name,'images/'.$name_imag)){
return turo;
}else{
    return false;
}

}


}
}

/////////////////////////////////


?>