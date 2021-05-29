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

  <body style= "background-color:#BAB520;">
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
                      <section style="border:1px solid red; " class="panel">
                          <header style="color:red; font-size:25px; font-family:courier;" class="panel-heading">
                              Attendus Data
                          </header>
                          <div class="panel-body">
                              
							  
	 <table style="background-image: url('images/atnd.jpg'); height:auto;   background-position: center; background-repeat: no-repeat;  background-size: cover; border:1px solid red; " id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			
                <th style="color:black; border:1px solid red;">Class</th>
                <th style="color:black; border:1px solid red;">Subject</th>
                <th style="color:black; border:1px solid red;">Teacher</th>
				   <th style="color:black; border:1px solid red;">Schedule Date</th>
				   <th style="color:black; border:1px solid red;">Schedule Time</th>
				   <!-- Attendus of semester-->
				    <th style="color:black; border:1px solid red;">Semester ID</th>
				    <th style="color:black; border:1px solid red;">Semester Name</th>
				<th style="color:black; border:1px solid red;">Button</th>
            </tr>
        </thead>
        <?php

		
		$query1= "SELECT * FROM schedule ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$class_id = $fetch1['class_id'];
		$subject_id = $fetch1['subject_id'];
		$teacher_id = $fetch1['teacher_id'];
		$schedule_date = $fetch1['schedule_date'];
		$schedule_time = $fetch1['schedule_time'];
		$Semester_id = $fetch1['Semester_id'];
		$Semester=$fetch1['Semester_id'];
		
		
		$query2= "SELECT * FROM class where class_id = '".$class_id."' ";
		$run2= mysqli_query($connect,$query2);
	    $fetch2 = mysqli_fetch_array($run2);
		
		
			$query3= "SELECT * FROM subject where subject_id = '".$subject_id."' ";
		$run3= mysqli_query($connect,$query3);
	    $fetch3 = mysqli_fetch_array($run3);
		
		
			$query4= "SELECT * FROM teacher where teacher_id = '".$teacher_id."' ";
		$run4= mysqli_query($connect,$query4);
	    $fetch4 = mysqli_fetch_array($run4);
		
			$query5= "SELECT * FROM semester where Semester_id = '".$Semester_id."' AND Semester = '".$Semester."' ";
		$run5= mysqli_query($connect,$query5);
	    $fetch5 = mysqli_fetch_array($run5);
		?>
            <tr>
                <td><?php echo($fetch2['class_name']);?></td>
                <td><?php echo($fetch3['subject_name']);?></td>
				  <td><?php echo($fetch4['teacher_name']);?></td>
				<td><?php echo($fetch1['schedule_date']);?></td>
				
				<td>
				
				
				<?php
					$date = new DateTime($fetch1['schedule_time']);
                      echo   $date->format('h:i a');
					 
						?>
				</td>
				<td><?php echo($fetch5['Semester_id']);?></td>
				
				<td>
				<?php  echo("<a href='selectschedule.php?temp=".$fetch1['schedule_id']."'>");
                 echo '<input type="button" class="btn btn-primary" value="SELECT"></a>';?>
				</td>
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
