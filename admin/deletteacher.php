<?php
include"connection.php";
$temp=$_GET['temp'];


$sql5 = "DELETE FROM teacher where teacher_id=".$temp;
$query5 =mysqli_query($connect,$sql5);

 if($query5>0)
 {
    
	echo "deleted data";
	header('location:teacher.php');
 }
else {
    echo "delete fail";    
	 }   
?>