
<?php 
session_start();
$_SESSION[check] = '0';  

include('index.php'); ?>
<?php mysqli_close($con); ?>
