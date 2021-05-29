
<?php

		session_start();
		if(! isset($_SESSION['idd']))
			header('location:login.php');

?>




<!DOCTYPE html>



<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Managment</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

 <link href="table/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
   <link href="table/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/maxresdefault.jpg');"> 
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
   
	        <h3 style="color:BLACK;" ><b>Welcome to NCBAE</b></h3>
      <h3 style="color:BLACK;" ><b>Class <b style="color:red;" >Sechedules</b> and Student <b style="color:red;" >Attendus </b> Recored System ....</b></h3>
     
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">NCBAE</a></h1>
        <p>NCBAE</p>
      </div>
      <div id="quickinfo" class="fl_right">
        <ul class="nospace inline">
          <li><strong>admin:</strong><br>
            +00 (333) 444 5555</li>
          <li><strong>Staff:</strong><br>
            +00 (333) 444 5555</li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </header>
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="#">Class Schedule</a>
          <ul>
		  
		  
		        <?php
	include"connection.php";
		$query1= "SELECT * FROM class ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		?>
		 <li><a href="class.php?temp=<?php echo $fetch1['class_id']; ?>"><?php echo($fetch1['class_name']);?></a></li>
			<?php 
		}
			?>
		  
		  
		
          </ul>
        </li>
		
		
		
		
		      <li><a class="drop" href="#">Attandus</a>
          <ul>
		  
		  
		        <?php
	include"connection.php";
		$query1= "SELECT * FROM subject ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		?>
		 <li><a href="attendus.php?temp=<?php echo $fetch1['subject_id']; ?>"><?php echo($fetch1['subject_name']);?></a></li>
			<?php 
		}
			?>
		  
		  
		
          </ul>
        </li>
		  <li><a  href="logout.php">Logout</a></li>
		
		
		
		
		
		
		

      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
</div>

<div>
  <section class="hoc container clear"> 
  <br><br><br>
     <center><h1><b>Teacher INFO</b></h1></center>
    <br><br><br>
		
									<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
             
        
                <th style="background-color:#14C1d7; color:white;">Id</th>
                <th style="background-color:#14C1d7; color:white;">Teacher Name</th>
                <th style="background-color:#14C1d7; color:white;">Phone No#</th>
				   <th style="background-color:#14C1d7; color:white;">Teacher Address</th>
                  
			
            </tr>
        </thead>
		<?php
include"connection.php";
							


	    $query1= "SELECT * FROM teacher ";
		$run1= mysqli_query($connect,$query1);
		while($fetch1 = mysqli_fetch_array($run1))
		{
		
		$teacher_id = $fetch1['teacher_id'];
		

?>
  <tr>
		 
			   	
			    <td><?php echo($fetch1['teacher_id']);?></td>
                <td><?php echo($fetch1['teacher_name']);?></td>
				<td><?php echo($fetch1['teacher_phone']);?></td>
				<td><?php echo($fetch1['teacher_address']);?></td>
					</tr>
	     
		
    <?php
}
	 
	 ?>	
        
    </table>
  </section>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">NCBAE</a></p>
    <p class="fl_right">Designe by <a target="_blank" href="" title="Free Website Templates">sufyan</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>


<script src="table/jquery.dataTables.min.js"></script>
<script src="table/dataTables.bootstrap.min.js"></script>	


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>	
		
<script>


$(document).ready(function() {
    $('#example').DataTable();
} );
</script>	
</body>
</html>