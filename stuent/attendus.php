<?php

		session_start();
		if(! isset($_SESSION['idd']))
			header('location:login.php');

?>




<!DOCTYPE html>



<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Managment</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

 <link href="table/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
   <link href="table/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/maxresdefault.jpg');"> 
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">ISP</a></h1>
        <p>Institute of Southrun Punjab</p>
      </div>
      <div id="quickinfo" class="fl_right">
        <ul class="nospace inline">
          <li><strong>admin:</strong><br>
            +00 (123) 456 7890</li>
          <li><strong>Staff:</strong><br>
            +00 (123) 456 7890</li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </header>
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="#">Class Schedule</a>
          <ul>
		  
		  
		        <?php
	include"connection.php";
		$query1= "SELECT * FROM class ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		?>
		 <li><a href="class.php?temp=<?php echo $fetch1['class_id']; ?>"><?php echo($fetch1['class_name']);?></a></li>
			<?php 
		}
			?>
		  
		  
		
          </ul>
        </li>
		
		
		
		
		      <li><a class="drop" href="#">Attandus</a>
          <ul>
		  
		  
		        <?php
	include"connection.php";
		$query1= "SELECT * FROM subject ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		?>
		 <li><a href="attendus.php?temp=<?php echo $fetch1['subject_id']; ?>"><?php echo($fetch1['subject_name']);?></a></li>
			<?php 
		}
			?>
		  
		  
		
          </ul>
        </li>
		
		  <li><a  href="logout.php">Logout</a></li>
		
		
		
		
		
		

      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
</div>

<div>
  <section class="hoc container clear"> 
  <br><br><br>
     <center><h1><b>Class Attendus Data</b></h1></center>
    <br><br><br>
		
									<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
             
           <th style="background-color:#14C1d7; color:white;">Class</th>
                <th style="background-color:#14C1d7; color:white;">Subject</th>
                <th style="background-color:#14C1d7; color:white;">Teacher</th>
				   <th style="background-color:#14C1d7; color:white;">Schedule Date</th>
				   <th style="background-color:#14C1d7; color:white;">Schedule Time</th>
				
                <th style="background-color:#14C1d7; color:white;">student Name</th>
                <th style="background-color:#14C1d7; color:white;">Student RG No#</th>
			  <th style="background-color:#14C1d7; color:white;">Condition</th>
		      
                  
			
            </tr>
        </thead>


 <?php
include"connection.php";

     $uid=$_SESSION['idd'];
		$temp = $_GET['temp'];
		
	
			
			
		
		
		$query1= "SELECT * FROM schedule  where subject_id = '".$temp."'  ";
		$run1= mysqli_query($connect,$query1);
		  while( $fetch1 = mysqli_fetch_array($run1))
		{
		
		$schedule_id = $fetch1['schedule_id'];
		
	    $query8= "SELECT * FROM `attends` WHERE  (student_id = '".$uid."') AND (schedule_id = '".$schedule_id."') ";
		$run8= mysqli_query($connect,$query8);
        $fetch8 = mysqli_fetch_array($run8);
		
		$scheduleid = $fetch8['schedule_id'];
		
		
		
		$query9= "SELECT * FROM schedule  where schedule_id = '".$scheduleid."'  ";
		$run9= mysqli_query($connect,$query9);
		$fetch9 = mysqli_fetch_array($run9);
		
		
		$class_id = $fetch9['class_id'];
		$subject_id = $fetch9['subject_id'];
		$teacher_id = $fetch9['teacher_id'];
		
		
		
		
		$query2= "SELECT * FROM class where class_id = '".$class_id."' ";
		$run2= mysqli_query($connect,$query2);
	    $fetch2 = mysqli_fetch_array($run2);
		
		
			$query3= "SELECT * FROM subject where subject_id = '".$subject_id."' ";
		$run3= mysqli_query($connect,$query3);
	    $fetch3 = mysqli_fetch_array($run3);
		
		
			$query4= "SELECT * FROM teacher where teacher_id = '".$teacher_id."' ";
		$run4= mysqli_query($connect,$query4);
	    $fetch4 = mysqli_fetch_array($run4);
		
		
		
		$query5= "SELECT * FROM student where student_id = '".$uid."' ";
		$run5= mysqli_query($connect,$query5);
	  $fetch5 = mysqli_fetch_array($run5);
	   
		
		$studeid=$fetch5['student_id'];
		
		?>
            <tr>
                <td><?php echo($fetch2['class_name']);?></td>
                <td><?php echo($fetch3['subject_name']);?></td>
				  <td><?php echo($fetch4['teacher_name']);?></td>
				<td><?php echo($fetch9['schedule_date']);?></td>
				<td>
				
				
				<?php
					$date = new DateTime($fetch9['schedule_time']);
					if($fetch9['schedule_time']>0)
					{
                      echo   $date->format('h:i a');
					}
					else{echo "";}
						?>
				</td>
				
				
				     <td><?php



					 echo($fetch5['student_name']);?></td>
				<td><?php echo($fetch5['student_reg_no']);?></td>
				
				<?php
				$schedulid = $fetch9['schedule_id'];
				
	
		$query6= "SELECT * FROM `attends` WHERE  (student_id = '".$studeid."') AND (schedule_id = '".$schedulid."') ";
		$run6= mysqli_query($connect,$query6);
	    $fetch6 = mysqli_fetch_array($run6);
		if($fetch6>0)
		{
				
			
		?>
		
			<td>
			
			<?php echo($fetch6['condition']);?>
			</td>
			
			
		<?php
		
		}
		else
		{
			
		?>
				<td>
				
			 not update
				</td>
			
				
				<?php
		}	
		  ?>
		  
			</tr>
				<?php
	   }
	   
	   ?>
        
    </table>
  </section>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">ISP</a></p>
    <p class="fl_right">Designe by <a target="_blank" href="" title="Free Website Templates">Atta</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>


<script src="table/jquery.dataTables.min.js"></script>
<script src="table/dataTables.bootstrap.min.js"></script>	


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>	
		
<script>


$(document).ready(function() {
    $('#example').DataTable();
} );
</script>	
</body>
</html>