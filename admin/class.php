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
 
	<link href="css/jquery_data_Tables.min.css" rel="stylesheet">

	
 
 </head>
<style>
.hide-md-lg {
    display: block;
    text-align: center;
  }
</style>
  <body style= "background-color:#BAB520;">  <!-- container section start -->
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
					<h3 class="page-header" style="color:red; font-size:40px; font-family:courier;"><i style="color:red; font-size:60px;" class="fa fa-cog"></i><b>Class Data</b></h3>
					<ol style="border:1px solid red;" class="breadcrumb">
						<li style="color:red;" ><i class="fa fa-home"></i><a style="color:red; href="index.php">Home</a></li>
						<li style="color:red;" ><i class="icon_cogs"></i><a style="color:red;  href="class.php">Class</a></li>
												  	
					</ol>
				</div>
			</div>
              
            <div class="col-lg-7">
                      <section style="border:1px solid red; " class="panel">
                          <header style="color:red; font-size:25px; font-family:courier;" class="panel-heading">
                              Class Data
                          </header>
                          <div class="panel-body">
                              
							  
	 <table style="background-image: url('images/atnd.png'); height:auto;   background-position: center; background-repeat: no-repeat;  background-size: cover; border:1px solid red; " id="myTable" class="display" cellspacing="0" width="100%">
       <thead>
            <tr>
			
                <th style="color:black; border:1px solid red;" >Id</th>
                <th style="color:black; border:1px solid red;" >Class Name</th>
     
				<th style="color:black; border:1px solid red;" >Button</th>
            </tr>
        </thead>
        <?php
	
		$query1= "SELECT * FROM class ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$class_id = $fetch1['class_id'];
		
		
		?>
            <tr>
                <td style="background-color:lightyellow; border:1px solid red; color:black" ><?php echo($fetch1['class_id']);?></td>
                <td style="background-color:lightyellow; border:1px solid red; color:black" ><?php echo($fetch1['class_name']);?></td>
		
				<td style="background-color:lightyellow; border:1px solid red; color:black">
				<?php  echo("<a href='deleteclass.php?temp=".$fetch1['class_id']."'>");
                 echo '<input type="button" class="btn btn-danger" value="Delete"></a>';?>
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
                       <section style="border:1px solid red;" class="panel">
                          <header style="color:red; font-size:25px; font-family:courier;" class="panel-heading">
                              Class Insert Forms
                          </header>
                          <div class="panel-body">
                              <form style=" background-image: url('images/atnd.png'); height:auto;   background-position: center; background-repeat: no-repeat;  background-size: cover; " id="myTable" class="display" cellspacing="0" width="100%" role="form" method="POST" action="classinsert.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label style="color:black; font-size:16px;" for="exampleInputEmail1">Class Name</label>
                                      <input type="text" style="background-color:lightyellow" class="form-control" name="comname"  maxlength="30" required id="exampleInputEmail1" placeholder="class Name">
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
