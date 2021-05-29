<?php
//Session start is necessarry for login when som one visit the page it prevents two user sementiously for working or use a browser at a time
session_start();
session_cache_expire();
//BackGround null at logout
$_SESSION['id']="";
$_SESSION['id']=NULL;
unset($_SESSION['id']);
header('location:login.php');



?>