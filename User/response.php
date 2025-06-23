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
	<script type="text/javascript" src="Ajax/ajax.js"></script>
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
   <a class="navbar-brand" href="index.php"><font color="black" size="6" face="times new roman">Crime Reporting System</a></font></h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="complaint.php">Complaint</a>
      </li>
	 

	   <li class="nav-item">
        <a class="nav-link" href="crime_status.php">Status</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="add_feedback.php">Feedback</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="wanted_person.php">Alert</a>
      </li>
	    <li class="nav-item">
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
			<div class="contact-form" style="width: 100%; margin: auto;">
			<h4 class="heading">Complaint</h4>
				 <form action="add_complaint_action.php" method="post" name="f1"><table >
                                            
                                               <tr><td>Complaint Subject</td><td><textarea name="complaint_subject" id="complaint_sub"></textarea></td></tr>
                                               <tr><td>Complaint Description</td><td><textarea cols="30" rows="10" id="complaint_desc" name="complaint_desc"></textarea></td></tr>
                                               <tr><td> State of Police Station :</td><td>
<select name="state" id="state" onchange="display_district()">
  <option value="0">--Select--</option>
       <?php
         
include('../dbconnection.php');
$db=new dbconnection;
$res= $db->query_execute("select * from tbl_state");
while($row=mysqli_fetch_array($res))
{
 ?>
 <option value="<?php echo $row["state_id"]?>"><?php echo $row["state_name"]?></option>

 <?php
}


         ?>
       </select></td></tr>

       <tr><td>District of Police Station :</td><td>
       <select name="district" id="district" onchange="display_place()">
       <option value="0">--Select--</option>
       </select></td></tr>

       <tr><td>City of Police Station :</td><td>
       <select name="city" id="city">
       <option value="0">--Select--</option>
       </select></td></tr> 
                                                <tr><td>Category</td><td>
                                                <select name="category" id="category"><option value="0">Select</option>
 <?php

$qry2="select * from tbl_category";
              $res2=$db->query_execute($qry2);   
                    while ($row=mysqli_fetch_array($res2)) {
                     ?>
                            <option value="<?php echo $row["category_id"]?>"><?php echo $row["category"]?></option>
                            
                           <?php                     
                        }                  
             ?>

</select>
                                                </td></tr>  
                                                   
                                               <tr><td>Time of Crime</td><td><input type="text" value="" id="datetimepicker" name='complaint_date' readonly="readonly"/>


        <script src="jquery.js"></script>
        <script src="build/jquery.datetimepicker.full.js"></script>
        <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>
<script>
    
$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
step:5,
 format:'Y-m-d H:i:s',
 maxDate:'0'
});
</script>

                                                   </td></tr></table>
                                               
                        



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

	newTextBoxDiv.after().html('<label>VictimName'+ counter + ' : </label>' +
	      '<input type="text" name="VictimName[]" id="VictimName" value="" > <label>VictimAge'+ counter + ' : </label>' +
	      '<input type="text" name="VictimAge[]" id="VictimAge" value="" ><label>VictimGender'+ counter + ' : </label>' +
	      '<input type="radio" value="Male" name="VictimGender' + counter +
	      '" id="VictimGender"  >Male<input type="radio" name="VictimGender' + counter +
	      '" id="VictimGender" value="Female" >Female');

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
<input type='button' value='Add Victim ' id='addButton'>
<input type='button' value='Remove Button' id='removeButton'>
<!--<input type='button' value='Get TextBox Value' id='getButtonValue'>-->
        
<table>                                                                                               <tr><td><input type="submit" onclick="return validate_complaint()" value="Submit">  </td></tr>                     
                                            
                                            </table>
					</form>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
<!--/footer-->
	
			<!--//footer-->
		<section class="copy-rights">
			<p class="copyright">© 2019 Crime Reporting System <a href="#" target="_blank"></a></p>
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