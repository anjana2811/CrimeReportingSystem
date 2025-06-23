<?php session_start(); ?>
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
   </head>
   <script type="text/javascript" src="Ajax/ajax.js"></script>
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
   <a class="navbar-brand" href="index.php"><font color="black" size="5" face="times new roman">Crime Reporting System</a></font>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="complaint_list.php">Complaint List</a>
      </li>
	 <li class="nav-item ">
        <a class="nav-link" href="crime_list.php">Crime List</a>
      </li>
	 <li class="nav-item ">
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
			<h2><font color="blue" size="5" face="times new roman"><u>Complaint List</u></font></h2>
		   </div>
		<div class="contact-grids row">
	
<table class="table contact-form" ><tr><td>Category</td> <td>
<select name="category" id="category" onchange="display_crime_category()">
  <option value="0">--Select--</option>
       <?php
         
include('../dbconnection.php');
$db=new dbconnection;
$res= $db->query_execute("select * from tbl_category");
while($row=mysqli_fetch_array($res))
{
 ?>
 <option value="<?php echo $row["category_id"]?>"><?php echo $row["category"]?></option>

 <?php
}


         ?></select></td><td>Crime ID</td><td><input type="text" name="crime_id" id="crime_id" onkeyup="display_crime_by_crime_id()"></td></tr>

   </table>

       <div id="result">
				<?php	
			
	//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
       $login_id=$_SESSION['slogid'];
$count=1;
  $cls="odd";
  $sql2="update tbl_crime set complaint_view_status='FIR is registered.. Investigating' where and tbl_crime.crime_place=(select place_id from tbl_police_station where login_id='$login_id')";
  $res22=$db->query_execute($sql2);
 $sql="select * from tbl_crime inner join tbl_place on tbl_crime.crime_place=tbl_place.place_id inner join tbl_district on tbl_place.district_id=tbl_district.district_id inner join tbl_state on tbl_district.state_id=tbl_state.state_id where tbl_crime.status='investigating' and tbl_crime.crime_place=(select place_id from tbl_police_station where login_id='$login_id')";
  $res2=$db->query_execute($sql);
      $n=mysqli_num_rows($res2);
if($n>0)
{
	?>
	<table class="table">
	
	
	<thead class="thead-light">
						 <tr><th>SL NO</th><th>Crime Subject</th><th>Crime Date & Time</th><th>Crime Place</th><th>Complaint Registered Date</th><th>File</th>
						<th>Culprit</th>
<th>Add Details</th>
<th>Evidence</th>
<th>Close</th>						
						
<th>More Details</th>						</tr>		
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
       		<td><?php echo $row["crime_subject"] ?></td>
       			<td><?php echo $row["crime_date_time"] ?></td>
<td><?php echo $row["place_name"] ?></td>
<td><div><?php echo $row["entry_date"] ?></div>
</td>
<td><a class="btn btn-info" href="crime_file.php?crime_id=<?php echo $row["crime_id"] ?>">File </a></td>
  <td><a class="btn btn-success" href="add_culprit.php?crime_id=<?php echo $row["crime_id"] ?>">Culprit</a></td>
  <td><a class="btn btn-primary" href="add_investigation_details.php?crime_id=<?php echo $row["crime_id"] ?>"> Investigation </a></td>  
  <td><a class="btn btn-info" href="evidence.php?crime_id=<?php echo $row["crime_id"] ?>">Evidence</a></td> 		
<td><a class="btn btn-danger" href="close_complaint.php?crime_id=<?php echo $row["crime_id"] ?>">Close</a></td>
<td><a class="btn btn-warning" href="crime_more_details.php?crime_id=<?php echo $row["crime_id"] ?>">More Details</a></td>
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
			<p class="copyright">© 2022 Crime Reporting System<a href="#" target="_blank"></a></p>
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