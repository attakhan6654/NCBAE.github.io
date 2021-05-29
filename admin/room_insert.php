<?php


		session_start();
		$id=$_SESSION['id'];
include"connection.php";

$comname =trim($_POST['room']);



$sql1 = "SELECT * FROM room where roomm = '".$comname."'  ";
$query1 = mysqli_query($connect,$sql1);
$fetch = mysqli_fetch_array($query1);

if($fetch>0)
{
echo '<script type="text/javascript">';
echo('alert("room already Exist");');
echo('window.location.href = "room.php";');
echo('</script>');

}
else
{
$sql="INSERT INTO room(roomm , admin_id ) VALUES "." ('".$comname."' , '".$id."'  ) ";
$query = mysqli_query($connect,$sql);

 if($query > 0)
 {
	 echo('successfully room inserted');
	 header('location:room.php');
 }
 else 
 {
	 echo('room inserted failed');
	 }
}
	 ?>