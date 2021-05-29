<!DOCTYPE html>


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
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	
	
	


  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
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
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Teacher Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">               
                              <div class="follow-ava">
                                  <img alt="" style="border-top-left-radius:100%; border-top-right-radius:100%; border-bottom-left-radius:100%; border-bottom-right-radius:100%; width:80px; height:80px; 
								border:black " src="images/<?php echo $fetch['teacher_image'];   ?>">
                              </div>
                              <h6 style="padding-left:5%; font-size:20px"><?php echo($fetch['teacher_name']); ?></h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info" style="color:white"  >
                                <p><?php echo($fetch['teacher_name']); ?></p>
                                <p><?php echo($fetch['teacher_phone']); ?></p>
						
                                <h6>
                                  
                                    <span><i class="icon_pin_alt"></i><?php echo($fetch['teacher_address']); ?></span>
                                </h6>
                            </div>
							
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  
                                  <li class="active">
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Teacher Profile
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  
                                  <!-- profile -->
								  
								  
								  
								  
                                  <div id="profile" class="tab-pane active">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                     </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Personal Data</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>First Name </span>: <?php echo($fetch['teacher_name']); ?> </p>
                                              </div>
                                               
                                              <div class="bio-row">
                                                  <p><span>Address </span>: <?php echo($fetch['teacher_address']); ?></p>
                                              </div>
                                              
                                             
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: <?php echo($fetch['teacher_phone']); ?></p>
                                              </div>
                                             <div class="bio-row">
                                                  <p><span>Gmail</span>: <?php echo($fetch['teacher_gmail']); ?></p>
                                              </div>
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
								  
								  <?php
								    
									$fetch = "SELECT * FROM teacher where teacher_id = '".$a."' ";
									$query = mysqli_query($connect,$fetch);
									$row = mysqli_fetch_array($query);
								  
								  ?>
								  
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Edit</h1>
                                              <form class="form-horizontal" method="POST" action="proeditaction.php" enctype="multipart/form-data" role="form">                                                  
                                                  
												  
												  <div class="form-group">
												  
                                                      <label class="col-lg-2 control-label">Teacher ID</label>
                                                      <div class="col-lg-6">
                                                      <input type="text" name="teacher_id" value="<?php echo($row['teacher_id']); ?>" class="form-control" id="name"  placeholder=" " readonly="">
                                                      </div>
                                                  </div>	
												  
												  <div class="form-group">
												  
                                                      <label class="col-lg-2 control-label">First Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="teacher_name" value="<?php echo($row['teacher_name']); ?>" class="form-control" id="f-name" maxlength="30" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">adress</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="teacher_address" value="<?php echo($row['teacher_address']); ?>"  class="form-control" id="email" maxlength="30" placeholder=" ">
                                                      </div>
                                                  </div>
												  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Mobile</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="teacher_phone"  value="<?php echo($row['teacher_phone']); ?>" class="form-control" id="mobile" placeholder="03**-******* ">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Gmail</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="teacher_gmail"  value="<?php echo($row['teacher_gmail']); ?>" class="form-control" id="mobile" placeholder="*@g*.com">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quallification</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="Qualification"  value="<?php echo($row['Qualification']); ?>" class="form-control" id="qulification" placeholder="Qual********* ">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Experience</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="Exprience"  value="<?php echo($row['Exprience']); ?>" class="form-control" id="experience" placeholder="Exp*******">
                                                      </div>
                                                  </div>
												  
                                                    <div class="form-group">
                                                      <label class="col-lg-2 control-label">image</label>
                                                      <div class="col-lg-6">
                                                          <input type="hidden" name="img"  value="<?php echo($row['teacher_image']); ?>" >
														       <input type="file" name="teacher_image"  value="<?php echo($row['teacher_image']); ?>" >
                                                      
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
																<input type="submit" value="EDIT" class="btn btn-primary">
														   
														 
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
