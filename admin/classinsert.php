<?php


		session_start();
		$id=$_SESSION['id'];
include"connection.php";

$comname =trim($_POST['comname']);



$sql1 = "SELECT * FROM class where class_name = '".$comname."'  ";
$query1 = mysqli_query($connect,$sql1);
$fetch = mysqli_fetch_array($query1);

if($fetch>0)
{
echo '<script type="text/javascript">';
echo('alert("Class already Exist");');
echo('window.location.href = "class.php";');
echo('</script>');

}
else
{
$sql="INSERT INTO class(class_name , admin_id ) VALUES "." ('".$comname."' , '".$id."'  ) ";
$query = mysqli_query($connect,$sql);

 if($query > 0)
 {
	 echo('successfully class inserted');
	 header('location:class.php');
 }
 else 
 {
	 echo('class inserted failed');
	 }
}
	 ?>