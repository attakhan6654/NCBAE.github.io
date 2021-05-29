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
					<h3 class="page-header"><i class="fa fa-cog"></i>Company Data</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_cogs"></i><a href="company.php">Company</a></li>
												  	
					</ol>
				</div>
			</div>
              
            <div class="col-lg-7">
                      <section class="panel">
                          <header class="panel-heading">
                              Company Data
                          </header>
                          <div class="panel-body">
                              
							  
	 <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			
                <th>Id</th>
                <th>Company Name</th>
                <th>Phone No#</th>
				<th>Button</th>
            </tr>
        </thead>
        <?php
		$host  ="localhost";
		$user  ="root";
		$pwrd  ="";
		$db    ="insafmotor";
		$connect= mysqli_connect($host,$user,$pwrd,$db);
		
		$query1= "SELECT * FROM company ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$com_id = $fetch1['com_id'];
		
		
		?>
            <tr>
                <td><?php echo($fetch1['com_id']);?></td>
                <td><?php echo($fetch1['com_name']);?></td>
				<td><?php echo($fetch1['com_num']);?></td>
				<td><?php  echo("<a href='subproduct.php?temp=".$fetch1['com_id']."'>");
                 echo '<input type="button" class="btn btn-primary" value="View"></a>';?>
				<?php  echo("<a href='deletcompany.php?temp=".$fetch1['com_id']."'>");
                 echo '<input type="button" class="btn btn-danger" value="Delete"></a>';?>
				 <?php  echo("<a href='updatecompany.php?temp=".$fetch1['com_id']."'>");
                 echo '<input type="button" class="btn btn-primary" value="Update"></a>';?></td>
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
                              Company Insert Forms
                          </header>
                          <div class="panel-body">
                              <form role="form" method="POST" action="companyinsert.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Company Name</label>
                                      <input type="text" class="form-control" name="comname"  maxlength="30" required id="exampleInputEmail1" placeholder="Company Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Company Number</label>
                                      <input type="number" class="form-control" name="comnum" min="0" maxlength="12" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">Image input</label>
                                      <input type="file" name="image" required id="exampleInputFile">
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
