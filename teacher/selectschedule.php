<?php

		session_start();
		if(! isset($_SESSION['id']))
			header('location:login.php');

?>






<html lang="en">
  <head>
    <link rel="shortcut icon" href="img/asi1.png">

    <title>MANAGMENT</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
 
	<link href="css/jquery_data_Tables.min.css" rel="stylesheet">

	
 
 </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
     <?php
	include("header.php");
?>      
      <!--header end-->

  <?php
	include("sidebar.php");
?>      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-cog"></i>Attendus Data</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_cogs"></i><a href="student.php">Attendus</a></li>
												  	
					</ol>
				</div>
			</div>
              
            <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Attendus Data
                          </header>
                          <div class="panel-body">
                              
							  
	 <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			
                <th>Class</th>
				   <th>student Name</th>
                <th>Student RG No#</th>
                <th>Subject</th>
          
				   <th>Schedule Date</th>
				   <th>Schedule Time</th>
				
             
			
		
				<th ><CENTER>Action</CENTER></th>
				<th ></th>
            </tr>
        </thead>
        <?php

		$temp = $_GET['temp'];
		$query1= "SELECT * FROM schedule  where schedule_id = '".$temp."' ";
		$run1= mysqli_query($connect,$query1);
		$fetch1 = mysqli_fetch_array($run1);
		
		
		$class_id = $fetch1['class_id'];
		$subject_id = $fetch1['subject_id'];
		$teacher_id = $fetch1['teacher_id'];
		
		
		
		
		$query2= "SELECT * FROM class where class_id = '".$class_id."' ";
		$run2= mysqli_query($connect,$query2);
	    $fetch2 = mysqli_fetch_array($run2);
		
		
			$query3= "SELECT * FROM subject where subject_id = '".$subject_id."' ";
		$run3= mysqli_query($connect,$query3);
	    $fetch3 = mysqli_fetch_array($run3);
		
		
			$query4= "SELECT * FROM teacher where teacher_id = '".$teacher_id."' ";
		$run4= mysqli_query($connect,$query4);
	    $fetch4 = mysqli_fetch_array($run4);
		
		
		
		$query5= "SELECT * FROM student where (Semester_id = '".$temp."') AND (class_id = '".$class_id."') ";
		$run5= mysqli_query($connect,$query5);
	   while($fetch5 = mysqli_fetch_array($run5))
	   {
		
		$student_id=$fetch5['student_id'];
		
		?>
            <tr>
                <td><?php echo($fetch2['class_name']);?></td>
				 <td><?php echo($fetch5['student_name']);?></td>
				<td><?php echo($fetch5['student_reg_no']);?></td>
                <td><?php echo($fetch3['subject_name']);?></td>

				<td><?php echo($fetch1['schedule_date']);?></td>
				<td>
				
				
				<?php
					$date = new DateTime($fetch1['schedule_time']);
                      echo   $date->format('h:i a');
					 
						?>
				</td>
				
				
				    
				
				<?php
				$schedule_id = $fetch1['schedule_id'];
				
	
		$query6= "SELECT * FROM `attends` WHERE  (student_id = '".$student_id."') AND (schedule_id = '".$schedule_id."') ";
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
				
			     <form role="form" method="POST" action="upsentschedule.php" >
			      <input type="hidden" name="student_id" value="<?php echo($fetch5['student_id']);?>">
                  <input type="hidden" name="temp" value="<?php echo $temp;?>">
				  <input type="hidden" name="Upsent" value="Upsent">
				  <input type="submit" class="btn btn-danger" value="Upsent">
				 </form>
				
				  <form role="form" method="POST" action="presentschedule.php" >
			      <input type="hidden" name="student_id" value="<?php echo($fetch5['student_id']);?>">
                  <input type="hidden" name="temp" value="<?php echo $temp;?>">
				  <input type="hidden" name="Present" value="Present">
				  <input type="submit" class="btn btn-primary" value="Present">
				 	 </form>
				</td>
			
				
				<?php
		}	
		  ?>
		  
			</tr>
				<?php
	   }
	   
	   ?>
	
        </tbody>
    </table>
							  

                          </div>
                      </section>
                  </div>
				 
				 
				 
				 
              <!-- project team & activity end -->

          </section>
          
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
	
	


  <script>

	$(document).ready(function(){
    $('#myTable').DataTable();
});
  </script>
  <script src="js/jquery-1.12.4.js.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
  
  </body>
</html>
