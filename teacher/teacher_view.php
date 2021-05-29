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

  <body style="background-image: url('images/atnd.png'); height:auto;   background-position: center; background-repeat: no-repeat;  background-size: cover; ">
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
					<h2 style="color:red;" class="page-header"><i style="color:red;" class="fa fa-cog"></i><strong>schedule Data</strong></h2>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_cogs"></i><a href="teacher.php">Teacher</a></li>
						<li><i class="icon_cogs"></i>Teacher View</li>						  	
					</ol>
				</div>
			</div>
              
            <div  style="border:2px solid red;"class="col-lg-12">
			<br>
			 <?php

		$temp=$_GET['temp'];
		$query1= "SELECT * FROM teacher where teacher_id='".$temp."' ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		
		
		
		?>
		
		 <div style=" color:black">
				
				<img style="width:100%; height:350px;"  src="<?php echo("images/".$fetch1['image']); ?>" >
				
				</div>
			
              
<br>
				<section style="font-size:30px;  border:2px solid red;" class="panel">
					 
                         <center> <header class="panel-heading" style="color:red;">
                              Teacher Detail
                          </header></center>
                          
                              
				  
	 <table    class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			<th style="color:green; font-size:25px; border: 1px solid black; color:">Teacher Name</th> <td style="border: 1px solid black; background-color:lightyellow; color:black"><?php echo($fetch1['teacher_name']);?></td></tr>
            <tr>   <th style="color:green; font-size:25px;border: 1px solid black; color:">Address</th> <td style="border: 1px solid black; background-color:lightyellow; color:black"><?php echo($fetch1['teacher_address']);?></td></tr>
              <tr>  <th style="color:green; font-size:25px; border: 1px solid black; color:">Cell NO</th> <td style="border: 1px solid black; background-color:lightyellow; color:black"><?php echo($fetch1['teacher_phone']);?></td></tr>
			<tr>	<th style="color:green; font-size:25px; border: 1px solid black; color:">Gmail</th>  <td style="border: 1px solid black; background-color:lightyellow; color:black"><?php echo($fetch1['teacher_gmail']);?></td></tr>
				 <tr>  <th style="color:green; font-size:25px; border: 1px solid black; color:">Qualification</th> <td style="border: 1px solid black; background-color:lightyellow; color:black"><?php echo($fetch1['Qualification']);?> </tr>
				<tr>   <th style="color:green; font-size:25px; border: 1px solid black; color:">Exprience</th><td style="border: 1px solid black; background-color:lightyellow; color:black"><?php echo($fetch1['Exprience']);?>
				
				  
			
            </tr>
        </thead>
       
		
			<?php 
		}
			?>
       
    </table>
							  

                          </div>
                      </section>
                  
				 
		
      

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
