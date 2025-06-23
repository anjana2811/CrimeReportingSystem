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
	 

	   <li class="nav-item">
        <a class="nav-link" href="user_registration.php">User Registration</a>
      </li>
       <li class="nav-item ">
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
		<div class="contact-grids row">
			<div class=" col-lg-5 contact-form">
			<h4 class="heading"><u><font color="blue" face="times new roman" size="6">Login</h4></font></u>
				<form action="login_action.php" method="post" name="f1" id="myForm">
						<div>
						    	<span><label>Username</label></span>
						    	<span><input type="text" name="username" id="username" value=""></span>
						    	<div id="error_username" class="alert alert-warning" style="display:none"></div>
						    </div>
						    <div>
						    	<span><label>Password</label></span>
						    	<span><input type="password" name="password" id="password" value=""></span>
						    	<div id="error_username" class="alert alert-warning" style="display:none"></div>
						    </div>
						   
						   <div>
						   		<span><input type="submit" value="Submit" ></span>
						  </div>
					    </form>
	
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
    <script src="jquery/jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>
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
          //form validation rules
          $("#myForm").validate({
              rules: {
              username: "required",
              password: "required",
              },
              messages: {
              username: "Please Enter User Name",
             password: "Please Enter Password",
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



			</div>
			<div class=" col-lg-7 map">
			
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
<!--/footer-->
	
			<!--//footer-->
		<!--<section class="copy-rights">
			<p class="copyright">© 2018 Crime Report and Record Management | Design by <a href="#" target="_blank"></a></p>
			</section>-->
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
	<script type="text/javascript" src="js/jquery_min.js"></script>
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
   </body>
</html>