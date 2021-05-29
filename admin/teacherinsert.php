<?php


		session_start();
		$id=$_SESSION['id'];
include"connection.php";

$Name =trim($_POST['Name']);
$Number =trim($_POST['Number']);
$address =trim($_POST['address']);
$Gmail =trim($_POST['Gmail']);
$Qualification =trim($_POST['Qualification']);
$Exprience =trim($_POST['Exprience']);
echo $image =$_FILES['image']['name'];
if($_FILES['image']['error'] > 0)
{
	$image = $fetch['com_image'];
}
else
{
	$a =$_FILES['image']['tmp_name'];
	move_uploaded_file($a,"images/".$image);
}



$sql="INSERT INTO `teacher`(`teacher_name`, `admin_id`, `teacher_address`, `teacher_phone`,  
`teacher_gmail`, `Qualification`, `Exprience`, `image`)
 VALUES "." ('".$Name."' , '".$id."',  '".$address."',  '".$Number."',  '".$Gmail."',  '".$Qualification."',  '".$Exprience."', '".$image."' ) ";
$query = mysqli_query($connect,$sql);

 if($query > 0)
 {
	 echo('successfully Teacher inserted');
	 header('location:teacher.php');
 }
 else 
 {
	 echo('teacher inserted failed');
	 }

	 ?>