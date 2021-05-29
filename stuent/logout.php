<?php
session_start();

$_SESSION['idd']="";
$_SESSION['idd']=NULL;
unset($_SESSION['idd']);
header('location:login.php');





?>