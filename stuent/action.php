<?php
	session_start();
include"connection.php";


	$a = $_POST['aname'];
	$b = $_POST['apass'];
$q = "select * from student where student_reg_no = '".$a."' AND student_password = '".$b."' ";
$q1 = mysqli_query($connect,$q);
$f = mysqli_fetch_array($q1);

if ($f > 0)
{
	$_SESSION['idd'] = $f['student_id'];
	header('location:index.php');
}
else
echo '<script type="text/javascript">';
echo('alert("UserName/Password not Match");');
echo('window.location.href = "login.php";');
echo('</script>');

mysqli_close($connect);
?>