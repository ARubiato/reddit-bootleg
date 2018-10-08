<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbase = 'reddit-bootleg';

$conn = mysqli_connect($server,$username,$password,$dbase) or die ("Error in connecting to database" . mysqli_error());

?>