
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
	<link href="css/mystyle.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script type="text/javascript" src="Ajax/ajax.js"></script>
<link href="jquery/jquery-ui.css" rel="stylesheet">
<script src="jquery/jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>


<script>
  $( function() {
   $( "#dob" ).datepicker({ dateFormat: 'yy-mm-dd',
        maxDate: '-10Y', });
  
  } );
  </script>
  <script type="text/javascript" src="validation.js"></script>
 
	
   </head>
   <body>
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
      <li class="nav-item ">
        <a class="nav-link" href="login.php">Login</a>
      </li>
	 

	   <li class="nav-item active">
        <a class="nav-link" href="user_registration.php">User Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="police_station_registration.php">Police Station Registration</a>
      </li>
	    <li class="nav-item">
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

			<form action="user_registration_action.php" method="post" style="width: 100%" name="f1" id="myForm">
			<div class="leftside ">
			<h4 class="heading"><font color="blue" size="6" face="times new roman"><u>User Registration</h4></font></u>
				<div class="error alert alert-danger" style="display:none;">
								<img src="Jquery_Validation/images/warning.gif" alt="Warning!" width="24" height="24" style="float:left; margin: -5px 10px 0px 0px;">
								<span></span>.
								<br clear="all">
							</div>
							<style type="text/css">
    #myForm label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 0px 0 0px 0px;
    padding: 0;
    text-align: left;
    }
</style>
						

    <!-- jQuery Form Validation library -->
    <script src="js/jquery_validate.js">
              </script>
	<script type="text/javascript">
  (function ($, W, D)
  {
  var JQUERY4U = {};
  JQUERY4U.UTIL =
      {
          setupFormValidation: function ()
          {
          	$.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        var check = false;
        return this.optional(element) || regexp.test(value);
    },
    "Not a valid Input."
);
   
          //form validation rules
          $("#myForm").validate({
              rules: {
              fname: {
              	required:true,
              	regex :/^[a-zA-Z]+$/
              },
              lname: {
              	required:true,
              	regex :/^[a-zA-Z]+$/
              },
              state: "required",
              district: "required",
               city: "required",
                 dob: "required",
               pincode: {
                      required: true,
                       maxlength: 6,
                       minlength: 6,
                       digits: true,
                      
                  },
               phone_no: {
                      required: true,
                       minlength: 10,
                       maxlength: 10,
                        regex : /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/
                     
                  },
                   adhaar_no: {
                      required: true,
                       minlength: 12,
                       maxlength: 12,
                        digits: true, 
                  },
                  address:
                  {
                  	required: true,
                  	regex : /^[A-Za-z0-9]+$/,
                  },
                   emailid: {
                      required: true,
                     regex :  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                     
                  },
                   username: {
                      required: true,
                     regex : /^[A-Za-z0-9]+$/,
                       minlength: 5,
                       maxlength: 15,
                     
                  },
 password: {
                      required: true,
                     regex : /^[A-Za-z0-9]+$/,
                       minlength: 5,
                       maxlength: 15,
                     
                  },
              cpassword: {
                      required: true,
                     regex : /^[A-Za-z0-9]+$/,
                       minlength: 5,
                       maxlength: 15,
                     equalTo: "#password"
                  },

              },
              messages: {
              fname: "Please Enter First Name",
             lname: "Please Enter Last Name",
              state: "Please choose state",
               district: "Please choose District",
                city: "Please choose city",

                pincode: "Please Enter 6 digits Pincode",
                 phone_no: "Please Enter Valid 10 digit Phone Number - Starting from 6 or 7 or 8 or 9",
                  adhaar_no: "Please Enter Valid 12 digit adhaar Number",
                   emailid: "Please Enter Valid Email Id",
                   username: "Please Enter Valid User Name(5-15 digit alphanumeric username",
                    password: "Please Enter Valid User Name(5-15 digit alphanumeric password",
                       cpassword:"Please Enter Correct password same as above password", //"Please Enter Valid User Name(5-15 digit alphanumeric confirm password and same as above password",
              },
              submitHandler: function (form) {
              form.submit();
              }
          });
        }
      }
  //when the dom has loaded setup form validation rules
  $(D).ready(function ($) {
      JQUERY4U.UTIL.setupFormValidation();
  });
  })(jQuery, window, document);
</script>
			
					<table width="100%" cellspacing="8"><tr><td>First Name</td><td class="field"><input type="text" placeholder="First Name..." name="fname" id="fname"  ></td></tr>
					<tr><td>Last Name</td><td class="field">
					<input type="text" placeholder="Last Name..." tabindex="2" required="" id="lname" name="lname" ></td></tr>
	<tr><td>State</td><td class="field">
<select name="state" id="state" class="required" name="state" style="margin-left: 4px;" tabindex="3" onchange="display_district()">
		<option value="">--Select--</option>
							<?php
									
include('dbconnection.php');
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

							<tr><td>District</td><td class="field">
							<select name="district" id="district" class="required" tabindex="4" onchange="display_place()">
							<option value="">--Select--</option>
							</select></td></tr>

							<tr><td>City</td><td class="field">
							<select name="city" id="city" class="required" tabindex="5" >
							<option value="">--Select--</option>
							</select></td></tr>
<tr><td>Gender</td><td><input type="radio"  name="gender" value="Male" checked="">&nbsp;Male&nbsp;&nbsp;<input type="radio"  name="gender"  value="Female" >&nbsp;Female</td></tr>
<tr><td>Date of Birth</td><td class="field"><input  type="text" id="dob" name="dob" ></td></tr>
<tr><td>Pincode</td><td class="field">
<input type="text" name="pincode" id="pincode" class="required zipcode" tabindex="7"></td></tr>
				<tr><td>Phone Number</td><td class="field">
							<input  type="text" name="phone_no" id="phone_no"></td></tr>
							
				</table>
				
					   
			</div>
			<div class="rightside ">
			<table style="margin-top: 40px;" width="100%" cellspacing="8">
				<tr><td>Adhaar Number</td><td>
							<input type="text" name="adhaar_no" id="adhaar_no"></td></tr> </td></tr>
				<tr><td>Address</td><td>
							<textarea id="address" name="address"></textarea> </td></tr>
							
							
							<tr><td>Email Id</td><td>
							<input type="text" id="emailid" name="emailid"></td></tr>
				<tr><td colspan="2"><h5><font color="blue" face="times new roman"><u>Login Information</u></font></u></h5></td></tr>
					<tr><td>Username</td><td>

					<input type="text" placeholder="Username "  id="username" name="username" ></td></tr>
					<tr><td>Password</td><td>
					<input type="password" placeholder="Password" id="password" name="password" ></td></tr>
					<tr><td>Confirm Password</td><td>
					<input type="password" placeholder="Password Confirmation" required=" " name="cpassword" id="cpassword"></td></tr>
					
				
				</table>
			</div>
			<div style="clear:both;"></div>
			<div align="center">
						   		<span><input type="submit" value="Submit"></span>
						  </div>
			 </form>
		</div>
	</div>
</section>
<!-- //contact -->
<!--/footer-->
	
			<!--//footer-->
	<section class="copy-rights ">
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
<!-- //bootstrap-modal-pop-up  

    js -->
	<!--
	<script type="text/javascript" src="js/bootstrap.js"></script>
	//js 
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
	
	<!-- smooth scrolling js -->
	<!--<script src="js/SmoothScroll.min.js"></script>
	//smooth scrolling js -->
   </body>
</html>