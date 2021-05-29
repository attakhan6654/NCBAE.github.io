<?php


session_start();
$id=$_SESSION['id'];
include"connection.php";
$Semester_id =trim($_POST['Semester']);
$room_id =trim($_POST['Room']);
$class_id =trim($_POST['classid']);
$subject_id =trim($_POST['subjectid']);
$teacher_id =trim($_POST['teacherid']);
$datee =trim($_POST['datee']);
$timee =trim($_POST['timee']);
$endtimee =trim($_POST['endtimee']);

$sql1 = "SELECT * FROM schedule where schedule_date = '".$datee."' AND teacher_id = '".$teacher_id."' AND schedule_time = '".$timee."' AND  room_id = '".$room_id."' ";
$query1 = mysqli_query($connect,$sql1);
$fetch = mysqli_fetch_array($query1);

if($fetch>0)
{
echo '<script type="text/javascript">';
echo('alert("Subject already Exist");');
echo('window.location.href = "schedule.php";');
echo('</script>');

}
else
{



$sql="INSERT INTO `schedule`(`class_id`, `subject_id`, `teacher_id`, `schedule_date`, `schedule_time`, `sh_end_time`, `admin_id`, `room_id`, `Semester_id`) 
VALUES "." ('".$class_id."' , '".$subject_id."','".$teacher_id."' , '".$datee."' , '".$timee."' , '".$endtimee."' , '".$id."' , '".$room_id."' , '".$Semester_id."' ) ";
$query = mysqli_query($connect,$sql);

 if($query > 0)
 {
	 echo('successfully schedule inserted');
	 header('location:schedule.php');
 }
 else 
 {
	 echo('schedule inserted failed');
	 }
}
	 ?>