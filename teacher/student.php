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

  <body style="background-color:#BAB520">
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
					<h3 class="page-header" style="color:red; font-size:40px; font-family:courier;"><i class="fa fa-cog"></i>student Data</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_cogs"></i><a href="student.php">student</a></li>
												  	
					</ol>
				</div>
			</div>
              
            <div class="col-lg-7">
                      <section class="panel">
                          <header class="panel-heading" style="color:black; border:1px solid red; ">
                              student Data
                          </header>
                          <div class="panel-body">
                              
							  
	 <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			<th style="background-color:lightyellow; border:1px solid red; color:black">Student RG No#</th>
                <th style="color:black; border:1px solid red; ">Class</th>
                <th style="color:black; border:1px solid red; ">student Name</th>
                
				   <th style="color:black; border:1px solid red; ">Student Password</th>
				<th style="color:black; border:1px solid red;">Button</th>
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
