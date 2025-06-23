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
   <a class="navbar-brand" href="index.php"><font color="black" size="6" face="times new roman">Crime Reporting System</a></font>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link " href="complaint_list.php">Complaint List</a>
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
	<div class="container py-3 py-md-3">
			<div class="w3-head-all text-center mb-3">
			<h3></h3>
		   </div>
		<div class="contact-grids row">
			<div class=" col-lg-5 contact-form">
			<div class="contact-form"  style="width: 100%">
				<script type="text/javascript" src="../jquery/jquery.js"></script>
				<?php 
$crime_id=$_GET["crime_id"];
				?>
			<h4 class="heading"><font color="blue" size="6" face="times new roman"><u>Add Culprit</u></font></h4>
			<?php
			if(isset($_GET["flag"]))
			{
				?>
				<div style="padding:10px; color: white; background-color: red">
					No Culprit is added
				</div>
				<?php

			}
			?>
	<form name="f1" action="add_culprit_action.php" method="post">
				
<script type="text/javascript">

$(document).ready(function(){

    var counter = 1;

    $("#addButton").click(function () {

	if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
	}

	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<label>Culprit Name'+ counter + ' : </label>' +
	      '<input type="text" name="culpritName[]" id="culpritName" value="" > <label>Culprit Age'+ counter + ' : </label>' +
	      '<input type="text" name="culpritAge[]" id="culpritAge" value="" ><label>Culprit Gender'+ counter + ' : </label>' +
	      
	      '<input type="radio" value="Male" name="culpritGender' + counter +
	      '" id="culpritGender"  >Male<input type="radio" name="culpritGender' + counter +
	      '" id="culpritGender" value="Female" >Female');

	newTextBoxDiv.appendTo("#TextBoxesGroup");


	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }

	counter--;

        $("#TextBoxDiv" + counter).remove();

     });

     $("#getButtonValue").click(function () {

	var msg = '';
	for(i=1; i<counter; i++){
   	  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
	}
    	  alert(msg);
     });
  });
</script>

<div id='TextBoxesGroup'>
	<div id="TextBoxDiv1">
		
	</div>
</div>
<input type='button' class="button" value='Add Culprit ' id='addButton'>
<input type='button' class="button" value='Remove Button' id='removeButton'>
<!--<input type='button' value='Get TextBox Value' id='getButtonValue'>-->
        
<table>                                                   
	<tr><td><input type="hidden" name="crime_id" value="<?php echo $crime_id?>"><input type="submit" onclick="return validate_culprit()" value="Submit">  </td></tr>                     
                                            
                                            </table>
					</form>
			</div>
		</div>
		
			<div class=" col-lg-7 map">
			<?php	
	//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
       $login_id=$_SESSION['slogid'];
$crime_id=$_GET["crime_id"];

 $count=1;
 $sql="select * from tbl_culprit where crime_id=$crime_id";
  $res2=$db->query_execute($sql);
      $n=mysqli_num_rows($res2);
if($n>0)
{
	?>
	<table class="table">
	
	
	<thead class="thead-light">
						 <tr><th>SL NO</th><th>Cuprit Name</th><th>Cuprit Age</th><th>Cuprit Gender</th>
						 	<th>Photo</th>

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
       		<td><?php echo $row["culprit_name"] ?></td>
       			<td><?php echo $row["culprit_age"] ?></td>
<td><?php echo $row["culprit_gender"] ?></td>
<td>
<?php
if($row["photo"]=='Nil')
{
	?>
	<a class="button" href="add_photo_culprit.php?culprit_id=<?php echo $row["culprit_id"] ?>&crime_id=<?php echo $row["crime_id"] ?>">Add Photo</a>
	<?php
}
else
{
?><img src="culprit_photo/<?php echo $row["photo"] ?>" width="90" height="100">
	<a class="button" href="add_photo_culprit.php?culprit_id=<?php echo $row["culprit_id"] ?>&crime_id=<?php echo $row["crime_id"] ?>">Change Photo</a>
	<?php	
}
	?></td>
  <td><a class="button" href="delete_culprit.php?culprit_id=<?php echo $row["culprit_id"] ?>&crime_id=<?php echo $row["crime_id"] ?>">Delete Culprit</a></td>

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
			<p class="copyright">© 2019 Crime Reporting System<a href="#" target="_blank"></a></p>
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