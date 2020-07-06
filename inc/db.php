<?php
require_once "function.php";
DEFINE('host','localhost');
DEFINE('user','root');
DEFINE('pass','');
DEFINE('db','tempasa_automation');

$db=mysqli_connect(host,user,pass,db)or die(400);
mysqli_set_charset($db,'utf8');
session_start();
//error_reporting('E_ALL');
//ini_set('display_errors',1);
global $error,$msg;


?>