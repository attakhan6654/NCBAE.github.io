<?php

		session_start();
		$c=$_SESSION['id'];
include"connection.php";

$Name =trim($_POST['Name']);
$Number =trim($_POST['Number']);
$Gmail =trim($_POST['Gmail']);
$address =trim($_POST['address']);
$Qualification =trim($_POST['Qualification']);
$Exprience =trim($_POST['Exprience']);
$temp = $_POST['temp'];
$image =$_FILES['image']['name'];
if($_FILES['image']['error'] > 0)
{
	$image = $fetch['com_image'];
}
else
{
	$a =$_FILES['image']['tmp_name'];
	move_uploaded_file($a,"img/".$image);
}



		$sql= "update teacher set teacher_name='".$Name."',teacher_phone='".$Number."',teacher_address='".$address."',admin_id='".$c."',
teacher_gmail='".$Gmail."',Qualification='".$Qualification."',Exprience='".$Exprience."',image='".$image."' where teacher_id ='".$temp."' " ;
		$query= mysqli_query($connect,$sql);
		
if($query)
	{
	header('location:teacher.php');
	}
	else
	{
		echo("failled");
	}
?>