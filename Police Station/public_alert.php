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
	<link href="../css/mystyle.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script type="text/javascript" src="validation.js"></script>
	<script type="text/javascript" src="Ajax/ajax.js"></script>
<link href="../jquery/jquery-ui.css" rel="stylesheet">
<script src="../jquery/jquery.js"></script>
<script src="../jquery/jquery-ui.js"></script>

<script>
  $( function() {
   $( "#dabs" ).datepicker({ dateFormat: 'yy-mm-dd',
        maxDate: '0', });
   $( "#dreport" ).datepicker({ dateFormat: 'yy-mm-dd',
        maxDate: '0', });
  
  } );
  </script>
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
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="complaint_list.php">Complaint List</a>
      </li>
	 <li class="nav-item ">
        <a class="nav-link" href="crime_list.php">Crime List</a>
      </li>
	   <li class="nav-item ">
        <a class="nav-link" href="add_police.php"> Police </a>
      </li>
       <li class="nav-item  active">
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
		<div class="contact-grids row contact-form">
			
			
			<form action="wanted_action.php" method="post" style="width: 100%" name="f1" enctype="multipart/form-data">
			<div class="leftside ">
			<h4 class="heading"><font color="blue" size="6" face="times new roman"><u>Wanted Persons</h4></u></font>
				
					<table width="100%" cellspacing="8">
<tr><td>Name</td><td>
<input type="text" name="name" id="name"></td></tr>
						<tr><td>Date of Abscounding</td><td><input type="text" placeholder="Date of abscounding..." name="dabs" id="dabs" ></td></tr>
					<tr><td>Date of Report</td><td>
					<input type="text" placeholder="Date of report..."  id="dreport" name="dreport" ></td></tr>
<tr><td>Age</td><td>
					<input type="text" placeholder="Age..." id="age" name="age" ></td></tr>
<tr><td>Gender</td><td><input type="radio"  name="gender" value="Male" >&nbsp;Male&nbsp;&nbsp;<input type="radio"  name="gender"  value="Female" >&nbsp;Female</td></tr>
<tr><td>Complexion</td><td><input type="radio"  name="complexion" value="Fair" >&nbsp;Fair&nbsp;&nbsp;<input type="radio"  name="complexion"  value="Medium" >&nbsp;Medium&nbsp;&nbsp;<input type="radio"  name="complexion"  value="dark" >&nbsp;Dark</td></tr>
<tr><td>Height in CM :</td><td>
<input type="text" name="height" id="height"></td></tr>
<tr><td>Photo</td><td>
<input type="file" name="photo" id="photo"></td></tr>					
				</table>
				
			</div>
			<div class="rightside">
			<table style="margin-top: 40px;" width="100%" cellspacing="8">
				<tr><td>Body Style</td><td>
							<input type="radio"  name="bstyle" value="Lean" >&nbsp;Lean&nbsp;&nbsp;<input type="radio"  name="bstyle"  value="Fat" >&nbsp;Fat&nbsp;&nbsp;<input type="radio"  name="bstyle"  value="Plum" >&nbsp;Plum</td></tr>
	<tr><td>Identification Mark</td><td>
<input type="text" name="mark" id="mark"></td></tr>
<tr><td>Address</td><td>
<textarea name="address" id="address"></textarea> </td></tr>
<tr><td>Brief of the Case</td><td>
<textarea name="bcase" id="bcase"></textarea> </td></tr>					
			</table>
		</div>
	<div style="clear:both;"></div>
			<div align="center">
						   		<span><input type="submit" value="Submit" onclick="return validate_wanted()"></span>
						  </div></form>
			<div class=" col-lg-7 map">
			
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