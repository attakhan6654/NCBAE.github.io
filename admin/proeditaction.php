<?php
		include"connection.php";
		
		
$admin_name =trim($_POST['admin_name']);
$admin_id =trim($_POST['admin_id']);
$admin_password =trim($_POST['admin_password']);
$admin_address =trim($_POST['admin_address']);
$admin_phone =trim($_POST['admin_phone']);
 $admin_image=$_FILES['admin_image']['name'];

 
 
         $aim=$_POST['img'];
        
        
        
         if($_FILES['admin_image']['error']>0)
        {
			
            $admin_image=$aim;
        }
 else {
     $temp=$_FILES['admin_image']['tmp_name'];
     move_uploaded_file($temp,"images/".$admin_image);
 }
  
  
  
$sql="update admin set admin_name='".$admin_name."' , admin_password='".$admin_password."' , admin_phone='".$admin_phone."' , admin_address='".$admin_address."', admin_image='".$admin_image."' where admin_id=".$admin_id ;

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