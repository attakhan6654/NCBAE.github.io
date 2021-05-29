<?php


	
include"connection.php";

 $student_id =trim($_POST['student_id']);
 $temp =trim($_POST['temp']);
 $Upsent =trim($_POST['Upsent']);


$sql="INSERT INTO `attends`( `student_id`, `schedule_id`, `condition`) VALUES ('".$student_id."','".$temp."','".$Upsent."')";

$query = mysqli_query($connect,$sql);

 if($query > 0)
 {
	 echo('successfully attendus inserted');
	 header('location:attendus.php');
 }
 else 
 {
	 echo('attends inserted failed');
	 }

	 ?>