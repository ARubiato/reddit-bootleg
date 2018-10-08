<?php

require 'config-db.php';



if(isset($_POST['register-user']) {

$UP_FNAME = isset($_POST['UP_FNAME']) ? $_POST['UP_FNAME']:"";
$UP_LNAME = isset($_POST['UP_LNAME']) ? $_POST['UP_LNAME']:"";
$UP_GDR = isset($_POST['UP_GDR']) ? $_POST['UP_GDR']:"";
$UP_EMAIL = isset($_POST['UP_EMAIL']) ? $_POST['UP_EMAIL']:"";
$UP_BDATE = isset($_POST['UP_BDATE']) ? $_POST['UP_BDATE']:"";
$UP_ADD = isset($_POST['UP_FNAME']) ? $_POST['UP_FNAME']:"";
$UP_CN = isset($_POST['UP_CN']) ? $_POST['UP_CN']:"";
$UNAME = isset($_POST['UNAME']) ? $_POST['UNAME']:"";
$PWD = isset($_POST['PWD']) ? $_POST['PWD']:"";

$HASHED_PWD = password_hash($PWD,PASSWORD_DEFAULT);


$sql = "INSERT INTO user_profile (U_ID,UP_FNAME,UP_LNAME,UP_GDR,UP_EMAIL,UP_BDATE,UP_ADD,UP_CN) "



}

?>