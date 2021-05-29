<?php

		session_start();
		if(! isset($_SESSION['id']))
			header('location:login.php');

?>




<html lang="en">
  <head>
    <link rel="shortcut icon" href="img/asi1.png">

    <title>ISP</title>

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
					<h3 style="color:black"; class="page-header"><i style="color:black"; class="fa fa-compass"></i>Teacher Update</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-cog"></i><a href="teacher.php">teacher</a></li>
						<li style="color:black";><i style="color:black"; class="fa fa-refresh"></i>Update Teacher</a></li>
												  	
					</ol>
				</div>
			</div>
            

					<?php
					$temp= $_GET['temp'];
					$sql1 = "SELECT * FROM teacher where teacher_id = '".$temp."' " ;
					$query1 = mysqli_query($connect,$sql1);
					$fetch1 = mysqli_fetch_array($query1);					
					?>			
            
            
		<div class="col-lg-12 col-md-10" >
                      <section class="panel">
                          <header style="color:black"; class="panel-heading">
                              Teacher Update Forms
                          </header>
                          <div class="panel-body ">
                              <form role="form" method="POST" action="editteacher.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label style="color:black"; for="exampleInputEmail1">Teacher Name</label>
                                      <input type="text" style="color:black"; class="form-control" name="Name" value="<?php echo($fetch1['teacher_name']); ?>" >
									  <input type="hidden" name="temp" value="<?php echo($fetch1['teacher_id']); ?>" >  
                                  </div>
							
                                  <div class="form-group">
                                      <label style="color:black"; for="exampleInputPassword1">Teacher Number</label>
                                      <input type="text" style="color:black"; class="form-control" name="Number" min="0" maxlength="12"  value="<?php echo($fetch1['teacher_phone']); ?>">
                                  </div>
                                     <div class="form-group">
                                      <label style="color:black"; for="exampleInputPassword1">Teacher Gmail</label>
                                      <input type="text" style="color:black"; class="form-control" name="Gmail"   value="<?php echo($fetch1['teacher_gmail']); ?>">
                                  </div>
								  <div class="form-group">
                                      <label style="color:black"; for="exampleInputPassword1">Teacher Qualification</label>
                                      <input type="text" style="color:black"; class="form-control" name="Qualification"   value="<?php echo($fetch1['Qualification']); ?>">
                                  </div>
								  <div class="form-group">
                                      <label style="color:black"; for="exampleInputPassword1">Teacher Exprience</label>
                                      <input type="text" style="color:black"; class="form-control" name="Exprience"   value="<?php echo($fetch1['Exprience']); ?>">
                                  </div>
								  <div class="form-group">
                                      <label style="color:black"; for="exampleInputPassword1">Teacher Address</label>
                                      <input type="text" style="color:black"; class="form-control" name="address"   value="<?php echo($fetch1['teacher_address']); ?>">
                                  </div>
								  <div class="form-group">
                                      <label style="color:black"; for="exampleInputPassword1">Teacher Image</label>
                                      <input type="file" style="color:black"; class="form-control" name="image"   value="<?php echo($fetch1['teacher_address']); ?>">
                                  </div>
                                  <button type="submit" class="btn btn-success" style="margin-left:45%;">Update</button>
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
   
    
   
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/jquery.slimscroll.min.js"></script>
  

  </body>
</html>
