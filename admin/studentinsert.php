<?php


session_start();
$id=$_SESSION['id'];
include"connection.php";

$class_id =trim($_POST['classid']);
$sname =trim($_POST['sname']);
$rno =trim($_POST['rno']);
$ps =trim($_POST['ps']);
$CNIC =trim($_POST['CNIC']);

$sellno =trim($_POST['sellno']);
$Address =trim($_POST['Address']);
$image =$_FILES['image']['name'];
if($_FILES['image']['error'] > 0)
{
	$image = $fetch['com_image'];
}
else
{
	$a =$_FILES['image']['tmp_name'];
	move_uploaded_file($a,"images/".$image);
}
$sql1 = "SELECT * FROM student where student_reg_no = '".$rno."'  ";
$query1 = mysqli_query($connect,$sql1);
$fetch = mysqli_fetch_array($query1);

if($fetch>0)
{
echo '<script type="text/javascript">';
echo('alert("Registration No already Exist");');
echo('window.location.href = "student.php";');
echo('</script>');

}
else
{

$sql="INSERT INTO `student`(`student_reg_no`, `student_name`, `student_password`, `class_id`,
 `admin_id`, `CNIC`, `address`, `image`, `no`)
 
 VALUES "." ('".$rno."' , '".$sname."','".$ps."' , '".$class_id."' , '".$id."', '".$CNIC."' , '".$Address."' , '".$image."' , '".$sellno."' ) ";
$query = mysqli_query($connect,$sql);

$sql="INSERT INTO `student`(`student_reg_no`, `sname`, `student_password`, `class_id`,  
`admin_id`, `CNIC`, `address`, `image`, `no`)
 VALUES "." ('".$rno."' , '".$id."',  '".$ps."',  '".$class_id."',  '".$id."',  '".$CNIC."',  '".$Address."', '".$image."' , '".$sellno."' ) ";
 if($query > 0)
 {
	 echo('successfully student inserted');
	 header('location:student.php');
 }
 else 
 {
	 echo('student inserted failed');
	 }
}
$sname =trim($_POST['sname']);
$rno =trim($_POST['rno']);
$ps =trim($_POST['ps']);
$CNIC =trim($_POST['CNIC']);
$Qualification =trim($_POST['sellno']);
$Address =trim($_POST['Address']);
echo $image =$_FILES['image']['name'];
if($_FILES['image']['error'] > 0)
{
	$image = $fetch['com_image'];
}

	 ?>