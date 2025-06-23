<?php session_start(); 

$logid=$_SESSION['slogid'];?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
     <title>Crime Reporting System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="../jquery/jquery-ui.css" rel="stylesheet">
<script src="../jquery/jquery.js"></script>
<script src="../jquery/jquery-ui.js"></script>

<script>
  $( function() {
   $( "#dob" ).datepicker({ dateFormat: 'yy-mm-dd',
        maxDate: '-10Y', });
  
  } );
  </script>
  <script type="text/javascript" src="validation.js"></script>
   </head>
   <body>
   		<?php 
if(isset($_SESSION['slogid']))
{ 
	?>
      <!--navbar-->
  <!--Header-->

	<header>
	 <div class="agile-banner_nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="index.php"><font color="black" size="6" face="times new roman">Crime Reporting System</font></h2>
			
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="complaint_list.php">Complaint List</a>
      </li>
	 <li class="nav-item ">
        <a class="nav-link" href="crime_list.php">Crime List</a>
      </li>
	   <li class="nav-item  active">
        <a class="nav-link" href="add_police.php"> Police </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="public_alert.php"> Public Alert </a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="public_alert_list.php"> Public Alert List</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="change_password.php">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
 
</div>
</header>
      <!--//navbar-->
      <!-- banner -->
      <div class="inner_page_about">
      </div>
      <!--//banner -->
      <!-- contact -->
<section class="contact py-5" id="contact">
	<div class="container py-3 py-md-3" style="min-height: 350px;">
			<div class="w3-head-all text-center mb-3" >
			<h3></h3>
		   </div>
		<div class="contact-grids row">
			<div class=" col-lg-5 contact-form">
		<?php 	include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
  $sql="select * from tbl_police_station where login_id=$logid";
        $res=$db->query_execute($sql);
        $police_station_id=0;
  while($row=mysqli_fetch_array($res))
  {
$police_station_id=$row["police_station_id"];
  }
  ?>
  	
				<form action="add_police_action.php" enctype="multipart/form-data"  method="post" style="width: 100%" name="f1" >
		
			<h4 class="heading"><font color="blue" size="6" face="times new roman"><u>Add Police</u></font></h4>
				
					<table width="100%" cellspacing="8"><tr><td>First Name</td><td><input type="text" placeholder="First Name..." name="fname" id="fname" required=" " ></td></tr>
					<tr><td>Last Name</td><td>
					<input type="text" placeholder="Last Name..." required=" " id="lname" name="lname" ></td></tr>
					<tr><td>Gender</td><td><input type="radio"  name="gender" value="Male" >&nbsp;Male&nbsp;&nbsp;<input type="radio"  name="gender"  value="Female" >&nbsp;Female</td></tr>
<tr><td>Date of Birth</td><td><input type="text" id="dob" name="dob" id="dob" readonly="readonly"></td></tr>
<tr><td>Phone Number</td><td>
							<input type="text" name="phone_no" id="phone_no"></td></tr>
							<tr><td>Address</td><td>
							<textarea id="address" name="address"></textarea> </td></tr>
							
							
							<tr><td>Email Id</td><td>
							<input type="text" id="emailid" name="emailid"></td></tr>
							<tr><td>Rank</td><td>
							<select name="rank" id="rank">
					<option value="0">--Select--</option>
					<option value="Circle Inspector">Circle Inspector</option>
					<option value="Sub Inspector">Sub Inspector</option>
					<option value="Assistant Subinspector">
Assistant Subinspector</option>
					<option value="Head Constable">Head Constable</option>
	<option value="Constable">Constable</option>
							</select>
							</td></tr>
							<tr><td>Photo</td><td>
							<input type="file" id="photo" name="photo"></td></tr>
				</table>
				<div align="center">
						   		<span><input type="submit" value="Submit" onclick=" return validate_police()"></span>
						  </div>
			</form>
			</div>
			<div class=" col-lg-7 map">
			<?php	
	//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();



 $count=1;
 $sql="select * from tbl_police where police_station_id=$police_station_id";
  $res2=$db->query_execute($sql);
      $n=mysqli_num_rows($res2);
if($n>0)
{
	?>
	<table class="table">
	
	
	<thead class="thead-light">
						 <tr><th>SL NO</th><th>Name</th><th>Phone Number</th><th>Rank</th><th>Photo</th>
<th>Delete</th>	
						</tr>		
								</thead><tbody>
	<?php

       while ($row=mysqli_fetch_array($res2)) {
if($count%2==0)
{
	$cls="even";
}
       	?>
       	<tr class="<?php echo $cls ?>">
       		<td><?php echo $count; ?></td>
       		<td><?php echo $row["firstname"]. " ".$row["lastname"]?></td>
       			<td><?php echo $row["phone_number"] ?></td>
<td><?php echo $row["rank"] ?></td>
<td><img src="police_photo/<?php echo $row["photo"] ?>" width="90" height="100"></td>


  <td><a class="button" href="delete_police.php?police_id=<?php echo $row["police_id"] ?>">Delete Police</a></td>

       	</tr>
       	<?php
       	$count++;
       }
						?></tbody>
						</table>
					<?php }
else
{
  ?>
  <div style="padding: 20px; margin:50px; background-color: #e1a71e; color: #fff">No List Available</div>
  <?php
}?>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
<!--/footer-->
	
			<!--//footer-->
		<section class="copy-rights">
			<p class="copyright">© 2022 Crime Reporting System <a href="#" target="_blank"></a></p>
			</section>
			<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Consult Pro
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body">
				<img src="images/m1.jpg" alt=" " class="img-responsive img-fluid" />
				<p>Ut enim ad minima veniam, quis nostrum 
					exercitationem ullam corporis suscipit laboriosam, 
					nisi ut aliquid ex ea commodi consequatur? Quis autem 
					vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur, vel illum qui 
					dolorem eum fugiat quo voluptas nulla pariatur.
					<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur.</i></p>
			</div>
		</div>
	</div>
</div>
<!-- //bootstrap-modal-pop-up --> 

    <!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- //js -->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->
	<?php
}
else
{
	header("location:../login.php");
}
?>
   </body>
</html>