<?php
session_start();

$_SESSION['id']="";
$_SESSION['id']=NULL;
unset($_SESSION['id']);
header('location:login.php');





?>