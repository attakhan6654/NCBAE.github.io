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

              




  <div class="col-md-12" style= "background-image: url('images/logo.jpg'); height:90%;   background-position: center; background-repeat: no-repeat;  background-size: cover;">

  <br>

   <div class="clearfix"></div>
  
  
     </div>        
		
              <!-- project team & activity end -->

          </section>
          
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

  
  
  
  
  
  
  

   
   
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
