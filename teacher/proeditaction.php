<?php
		include"connection.php";
		
		
$teacher_name =trim($_POST['teacher_name']);
$teacher_id =trim($_POST['teacher_id']);
$teacher_gmail =trim($_POST['teacher_gmail']);
$teacher_address =trim($_POST['teacher_address']);
$teacher_phone =trim($_POST['teacher_phone']);
$Qualification =trim($_POST['Qualification']);
$Exprience =trim($_POST['Exprience']);
 $teacher_image=$_FILES['teacher_image']['name'];

 
 
         $tim=$_POST['img'];
        
        
        
         if($_FILES['teacher_image']['error']>0)
        {
			
            $teacher_image=$tim;
        }
 else {
     $temp=$_FILES['teacher_image']['tmp_name'];
     move_uploaded_file($temp,"images/".$teacher_image);
 }
  
  
$sql="update teacher set teacher_name='".$teacher_name."' , teacher_address='".$teacher_address."', teacher_phone='".$teacher_phone."' , teacher_gmail='".$teacher_gmail."', Qualification='".$Qualification."' , Exprience='".$Exprience."' , image='".$teacher_image."' where teacher_id=".$teacher_id;  

$querry =mysqli_query($connect,$sql);


if($querry)
	{
	header('location:profile.php');
	
	}
	else
	{
		echo("failled");
	}
	
	
	
?>