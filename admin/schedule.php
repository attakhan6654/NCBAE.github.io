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
					<h3 class="page-header"><i class="fa fa-cog"></i>schedule Data</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_cogs"></i><a href="student.php">schedule</a></li>
												  	
					</ol>
				</div>
			</div>
              
            <div class="col-lg-7">
                      <section class="panel">
                          <header class="panel-heading">
                              schedule Data
                          </header>
                          <div class="panel-body">
                              
							  
	 <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			<th>Teacher</th>
                <th>Class</th>
                <th>Subject</th>
      
				   <th>Schedule Date</th>
				   <th>Lecture Time</th>
				<th>Button</th>
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
		$Semester_id = $fetch1['Semester_id'];
		$room_id = $fetch1['room_id'];
		
		
		
		$query2= "SELECT * FROM class where class_id = '".$class_id."' ";
		$run2= mysqli_query($connect,$query2);
	    $fetch2 = mysqli_fetch_array($run2);
		
		
			$query3= "SELECT * FROM subject where subject_id = '".$subject_id."' ";
		$run3= mysqli_query($connect,$query3);
	    $fetch3 = mysqli_fetch_array($run3);
		
		
			$query4= "SELECT * FROM teacher where teacher_id = '".$teacher_id."' ";
		$run4= mysqli_query($connect,$query4);
	    $fetch4 = mysqli_fetch_array($run4);
		
		$query5= "SELECT * FROM semester where Semester_id = '".$Semester_id."' ";
		$run5= mysqli_query($connect,$query4);
	    $fetch5 = mysqli_fetch_array($run4);
		
		$query6= "SELECT * FROM room where room_id = '".$room_id."' ";
		$run6= mysqli_query($connect,$query4);
	    $fetch6 = mysqli_fetch_array($run4);
		
		
		?>
            <tr>
			 <td><?php echo($fetch4['teacher_name']);?></td>
                <td><?php echo($fetch2['class_name']);?></td>
				
                <td><?php echo($fetch3['subject_name']);?></td>
				 <td><?php echo($fetch1['schedule_date']);?></td>
				<td>
				
				
				<?php
					$date = new DateTime($fetch1['schedule_time']);
                      echo   $date->format('h:i a');
					 
						?>
				</td>
				<td>
				<?php  echo("<a href='deletschedule.php?temp=".$fetch1['schedule_id']."'>");
                 echo '<input type="button" class="btn btn-danger" value="Delete"></a>';?>
				 <?php  echo("<a href='View.php?temp=".$fetch1['schedule_id']."'>");
                 echo '<input type="button" class="btn btn-primary" value="View"></a>';?>
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
				  <div class="col-lg-5">
                      <section class="panel">
                          <header class="panel-heading">
                              student Insert Forms
                          </header>
                          <div class="panel-body">
                              <form role="form" method="POST" action="scheduleinsert.php" enctype="multipart/form-data">
							  <center>
							    <div class="form-group">
                                      <label for="exampleInputEmail1">Student Class</label>
									  <select  name="classid">
									  <option>Class</option>
							
							         <?php
	
		$query1= "SELECT * FROM class ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$class_id = $fetch1['class_id'];
		
		
		?>
		
				  
		
         <option  value=" <?php echo $class_id;?>"> <?php echo($fetch1['class_name']);?></option>
            
			
	
           
			<?php 
		}
			?>
										  </select>
      

					    
                                      <label for="exampleInputEmail1">Subject </label>
									  <select  name="subjectid">
									  <option>Subject</option>
							
							         <?php
	
		$query1= "SELECT * FROM subject ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$subject_id = $fetch1['subject_id'];
		
		
		?>
		
				  
		
         <option  value=" <?php echo $subject_id;?>"> <?php echo($fetch1['subject_name']);?></option>
            
			
	
           
			<?php 
		}
			?>
			
										  </select>
										  
										<label for="exampleInputEmail1">Select Room </label>
									  <select  name="Room">
									  <option>Room</option>
							
							         <?php
	
		$query1= "SELECT * FROM room ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$room_id = $fetch1['room_id'];
		
		
		?>
		
				  
		
         <option  value=" <?php echo $room_id;?>"> <?php echo($fetch1['roomm']);?></option>
            
			
	
           
			<?php 
		}
			?>
										  </select>  
										  
                                      <label for="exampleInputEmail1">Class Teacher </label>
									  <select  name="teacherid">
									  <option>Teacher</option>
							
							         <?php
	
		$query1= "SELECT * FROM teacher ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$teacher_id = $fetch1['teacher_id'];
		
		
		?>
		
				  
		
         <option  value=" <?php echo $teacher_id;?>"> <?php echo($fetch1['teacher_name']);?></option>
            
			
	
           
			<?php 
		}
			?>
										  </select>
										  <label for="exampleInputEmail1">Shadule Semester</label>
									  <select  name="Semester">
									  <option>Semester</option>
							
							         <?php
	
		$query1= "SELECT * FROM Semester ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$Semester_id = $fetch1['Semester_id'];
		
		
		?>
		
				  
		
         <option  value=" <?php echo $Semester_id;?>"> <?php echo($fetch1['Semester']);?></option>
            
			
	
           
			<?php 
		}
			?>
										  </select>  
         </div>			 
			</center>				  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Schedule Date</label>
                                      <input type="date" class="form-control" name="datee"  required id="exampleInputEmail1" >
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Lecture Time</label>
                                      <input type="time" class="form-control" name="timee"  required >
                                  </div>
                                
                                  <button type="submit" class="btn btn-primary" style="margin-left:40%;" >Submit</button>
                              </form>

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
