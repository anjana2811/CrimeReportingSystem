<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
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
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script type="text/javascript" src="validation.js"></script>
   </head>
   <body>
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
        <a class="nav-link" href="login.php">Login</a>
      </li>
	 

	   <li class="nav-item">
        <a class="nav-link" href="user_registration.php">User Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="police_station_registration.php">Police Station Registration</a>
      </li>
	    <li class="nav-item active">
        <a class="nav-link" href="Alert.php">Alert</a>
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
	<div class="container py-3 py-md-3">
			<div class="w3-head-all text-center mb-3">
			<h3></h3>
		   </div>
		<div class="contact-grids row contact-form">
			
			<h4 class="heading"><font color="blue" size="6" face="times new roman"><u>Wanted Persons</u></font></h4>
				
			<?php	
			 include_once("dbconnection.php");
       $db=new dbconnection();
$count=1;
  $cls="odd";
 $sql="select * from tbl_wanted   order by entry_date desc";
  $res2=$db->query_execute($sql);
      $n=mysqli_num_rows($res2);
if($n>0)
{
	?>
	<table class="table">
	
	
	<tbody>
	<?php

       while ($row=mysqli_fetch_array($res2)) {
if($count%2==0)
{
	$cls="even";
}
       	?>
       	<tr class="<?php echo $cls ?>">
       		
       		<td>
       			<div style="width:20%; float: left">
       				<img width="200" height="150" src="Police Station/Wanted/<?php echo $row["photo"] ?>">
       			</div>
       			<div style="width:75%; float: right">
<div><b>Look Out Notice -  <?php echo $row["name"] ?></b><?php echo $row["address"] ?></div>
       				<div>Date of abscounding: <?php echo $row["date_of_abscounting"] ?></div>
       			<div>Date of Report: <?php echo $row["date_of_report"] ?></div>
       			<div>Age: <?php echo $row["age"] ?></div>
       				<div>Gender: <?php echo $row["gender"] ?></div>
       				
       				<div>Complexion: <?php echo $row["complexion"] ?></div>
       				<div>Height: <?php echo $row["height"] ?></div>
       				<div>Body Style: <?php echo $row["body_style"] ?></div>
       				<div>Identification Mark: <?php echo $row["identification_mark"] ?></div>
       			<div>Case Details:<?php echo $row["case_details"] ?></div>

       			</div>
       		</td>

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
    <!--
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	js 
	start-smooth-scrolling 
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
	 //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up 
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
	//smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js 
	<script src="js/SmoothScroll.min.js"></script>
	//smooth scrolling js -->
   </body>
</html>