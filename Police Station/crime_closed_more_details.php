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
   <a class="navbar-brand" href="index.php"><font color="black" size="6" face="times new roman">Crime Reporting System</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item ">
        <a class="nav-link" href="complaint_list.php">Complaint List</a>
      </li>
	 <li class="nav-item active">
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
			<h2>CRIME DETAILS</h2>
		   </div>
		<div class="contact-grids row">
			
			<?php
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
			 $login_id=$_SESSION['slogid'];
			 $crime_id=$_GET["crime_id"];
                    
                  $qry1="select * from tbl_crime inner join tbl_user_registration on tbl_crime.login_id= tbl_user_registration.login_id inner join tbl_place on tbl_crime.crime_place=tbl_place.place_id inner join tbl_district on tbl_place.district_id=tbl_district.district_id inner join tbl_state on tbl_district.state_id=tbl_state.state_id where tbl_crime.crime_id='$crime_id'";
               ?>
           <table class="table" style="">
                                        
                                       <?php

//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
$res22=$db->query_execute($qry1);
  $count=1;
           while($row=mysqli_fetch_array($res22)) 
           {
           ?>
        <tr class="thead-light"><th style="color:#fff; font-size: 20px; text-align: center" colspan="2" >Complainant Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 14px;">Complaint Registered date:&nbsp; &nbsp;<?php echo $row["entry_date"]?></span></th></tr>
                        <tr><th>Name </th><td><?php echo $row["firstname"]." ".$row["lastname"]?></td></tr>
                        <tr><th>Address </th><td><?php echo $row["address"]?></td></tr>
                        <tr><th>Gender </th><td><?php echo $row["gender"]?></td></tr>
                         <tr><th>Date of Birth </th><td><?php echo $row["date_of_birth"]?></td></tr>
                         <tr><th>Phone Number </th><td><?php echo $row["phone_number"]?></td></tr>
                         
                          <tr  class="thead-light"><th style="color:#fff; font-size: 20px; text-align: center" colspan="2" >Crime Details </th></tr>
                         <tr><th>Subject </th><td> <?php echo $row["crime_subject"]?></td></tr>
                        <tr><th>Description </th><td><?php echo $row["crime_description"]?></td></tr>
                        <tr><th>Date and Time </th><td>
<?php echo $row["crime_date_time"]?>
</td></tr>
                         <tr><th>Place of Incident </th><td><div>
                         	<?php echo $row["place_name"]?></div><div>
                         		<?php echo $row["district_name"]?>
                         		</div><div>
<?php echo $row["state_name"]?>
                         			</div></td></tr>
                          <tr><th>Status </th><td>
                          	<?php echo $row["status"]?></td></tr>
                           <tr class="thead-light"><th style="color:#fff; font-size: 20px; text-align: center" colspan="2" >Victims Details </th></tr>
                                  <?php
      $qry2="select * from tbl_crime_victim where crime_id='$crime_id'";
             $res2=$db->query_execute($qry2);
$c=1;
           while($row=mysqli_fetch_array($res2)) 
           {
     ?>
        <tr  class="thead-light" style="background-color: #fff;"><th style="color:#000; font-size: 17px; text-align: center" colspan="2" >Victims <?php echo $c; ?> Details </th></tr>
        <th>Name</th> <td><?php echo $row["victim_name"];?></td></tr> <tr>
                                          <th>Age</th> <td>
<?php echo $row["victim_age"];?>
</td></tr> <tr>
               <th>Gender</th> <td>
               	<?php echo $row["victim_gender"];?></td></tr>
                                    
                                 <?php
                                          $c++;
                                          }
                                          ?>
<tr  class="thead-light"><th style="color:#fff; font-size: 20px; text-align: center" colspan="2" >Investigation Report </th></tr>
                                  <?php
      $qry2="select * from tbl_investigation where crime_id='$crime_id'";
             $res2=$db->query_execute($qry2);
$c=1;
           while($row=mysqli_fetch_array($res2)) 
           {
     ?>
        
        <th>Report on <?php echo $row["entry_date"];?></th> <td><?php echo $row["investigation_report"];?></td></tr> <tr>
                                         
                                    
                                 <?php
                                          $c++;
                                          }?>
                                            <tr class="thead-light"><th style="color:#fff; font-size: 20px; text-align: center" colspan="2" >Culprit Details </th></tr>
                                  <?php
      $qry2="select * from tbl_culprit where crime_id='$crime_id'";
             $res2=$db->query_execute($qry2);
$c=1;
           while($row=mysqli_fetch_array($res2)) 
           {
     ?>
        <tr  class="thead-light" style="background-color: #fff;"><th style="color:#000; font-size: 17px; text-align: center" colspan="2" >Culprit <?php echo $c; ?> Details </th></tr>
        <th>Name</th> <td><?php echo $row["culprit_name"];?></td></tr> <tr>
                                          <th>Age</th> <td>
<?php echo $row["culprit_age"];?>
</td></tr> <tr>
               <th>Gender</th> <td>
               	<?php echo $row["culprit_gender"];?></td></tr>
                                    
                                 <?php
                                          $c++;
                                          }
                                      

}?> 

</table>
		
		</div>
	</div>
</section>
<!-- //contact -->
<!--/footer-->
	
			<!--//footer-->
		<section class="copy-rights">
			<p class="copyright">© 2018 Crime Report and Record Management | Design by <a href="#" target="_blank"></a></p>
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