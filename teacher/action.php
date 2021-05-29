<?php
	session_start();
include"connection.php";



	$a = $_POST['tphone'];
	$b = $_POST['tgmail'];
$q = "select * from admin where teacher LIKE '".$a."' AND teacher_gmail = '".$b."' ";
	$a = $_POST['tphone'];
	$b = $_POST['tgmail'];
$q = "select * from teacher where teacher_phone LIKE '".$a."' AND 	teacher_gmail = '".$b."' ";

$q1 = mysqli_query($connect,$q);
$f = mysqli_fetch_array($q1);

if ($f > 0)
{
	$_SESSION['id'] = $f['teacher_id'];
	header('location:index.php');
}
else
echo '<script type="text/javascript">';
echo('alert("UserName/Password not Match");');
echo('window.location.href = "login.php";');
echo('</script>');

mysqli_close($connect);
?>