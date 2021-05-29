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
					<h3 class="page-header"><i class="fa fa-cog"></i>student Data</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_cogs"></i><a href="student.php">student</a></li>
												  	
					</ol>
				</div>
			</div>
              
            <div class="col-lg-7">
                      <section class="panel">
                          <header class="panel-heading">
                              student Data
                          </header>
                          <div class="panel-body">
                              
							  
	 <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			<th>Student RG No#</th>
                <th>Class</th>
                <th>student Name</th>
                
				   <th>Student Password</th>
				<th>Button</th>
            </tr>
        </thead>
        <?php

		
		$query1= "SELECT * FROM student ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$class_id = $fetch1['class_id'];
		$query2= "SELECT * FROM class where class_id = '".$class_id."' ";
		$run2= mysqli_query($connect,$query2);
	    $fetch2 = mysqli_fetch_array($run2);
		
		?>
            <tr>
			<td><?php echo($fetch1['student_reg_no']);?></td>
                <td><?php echo($fetch2['class_name']);?></td>
                <td><?php echo($fetch1['student_name']);?></td>
				
				<td><img style="width:80px; height:50px;"  src="<?php echo("images/".$fetch1['image']); ?>" ></td>
				<td>
				<?php  echo("<a href='deletstudent.php?temp=".$fetch1['student_id']."'>");
                 echo '<input type="button" class="btn btn-danger" value="Delete"></a>';?>
				 <?php  echo("<a href='stdview.php?temp=".$fetch1['student_id']."'>");
                 echo '<input type="button" class="btn btn-success" value="View"></a>';?>
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
                              <form role="form" method="POST" action="studentinsert.php" enctype="multipart/form-data">
							  
							    <div class="form-group">
                                      <label for="exampleInputEmail1">Student Class</label>
									  <select  name="classid">
									  <option>class</option>
							
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
         </div>				  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Student Name</label>
                                      <input type="text" class="form-control" name="sname"  maxlength="30" required id="exampleInputEmail1" placeholder="student Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Student RG No#</label>
                                      <input type="text" class="form-control" name="rno"  required placeholder="student RG Number">
                                  </div>
								  <div class="form-group">
                                      <label for="exampleInputPassword1">Student CNIC No</label>
                                      <input type="text" class="form-control" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1}" name="CNIC"  required placeholder="*****-*******-*">
                                  </div>
								  <div class="form-group">
                                      <label for="exampleInputPassword1">Student Cell NO</label>
                                      <input type="text" class="form-control" pattern="[0-9]{4}[-][0-9]{7}" name="sellno"  required placeholder="0311-*******">
                                  </div>
								  <div class="form-group">
                                      <label for="exampleInputPassword1">Student Address</label>
                                      <input type="text" class="form-control" name="Address"  required placeholder="student Address">
                                  </div>
								  
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Student Password</label>
                                      <input type="password" class="form-control" name="ps" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="30" required id="exampleInputEmail1" placeholder="student Password">
                                  </div>
								  <div class="form-group">
                                      <label for="exampleInputPassword1">Student Image</label>
                                      <input type="file" class="form-control" name="image"  required placeholder="student Image">
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
