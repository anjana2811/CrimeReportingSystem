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
  <script type="text/javascript" src="Ajax/ajax.js"></script>
  <link href="jquery/jquery-ui.css" rel="stylesheet">
<script src="jquery/jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>

<script>
  $( function() {
   $( "#dob" ).datepicker({ dateFormat: 'yy-mm-dd',
        maxDate: '-20Y', });
  
  } );
  </script>
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
       <li class="nav-item active">
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
  
    <form action="police_station_action.php" method="post" name="f1" class="contact-form" id="myForm">
       <div class="contact-grids row">
   <div class="col-lg-6">
   <h4 class="heading" ><font color="blue"><u>Add Station</u></font></h4>
                                          
             
       
                  
              <table>                              
           <tr><td> State of Police Station</td><td>
<select name="state" id="state" onchange="display_district()">
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

       <tr><td>District of Police Station</td><td>
       <select name="district" id="district" onchange="display_place()">
       <option value="">--Select--</option>
       </select></td></tr>

       <tr><td>City of Police Station</td><td>
       <select name="city" id="city">
       <option value="">--Select--</option>
       </select></td></tr>
        <tr><td>Address</td><td><textarea name="address" id="addr">
              </textarea>  </td></tr>   
           
                    
                 
<!--<tr><td>Name of the head:</td><td>
       <select name="police_id" id="police_id">
       <option value="0">--Select--</option>
       </select></td></tr>-->                                                                   
                                            
                                            </table>
    
   </div>
   <div class=" col-lg-6">
   
<table style="margin-top: 50px;">
           <tr><td>Zip Code</td><td> <input type="text" name="zipcode" id="zipcode" placeholder="Your Zipcode" ></td></tr>  
                 <tr><td>Phone Number</td><td> <input type="text" name="phno" placeholder="Your Phone Number" id="phno"  ></td></tr> 
                  <tr><td>Email Id</td><td> <input type="text" name="email" placeholder="Your Email Id" id="email" ></td></tr> 
                  <tr><td>Username</td><td> <input type="text" name="username" placeholder="Your Username" id="uname"  ></td></tr> 
                  <tr><td>Password</td><td> <input type="password" name="password" id="password" placeholder="Your Password" ></td></tr>  
    <tr><td>Confirm Password</td><td><input type="password" id="cpassword" name="cpassword" placeholder="Your Confirm Password" ></td></tr></table>
   </div>  </div>
    <div style="clear:both;"></div>
      <div align="center"  style="width: 100%">
                  <span><input class="btn btn-info" type="submit" value="Submit"> </span>
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
               state: "required",
              district: "required",
               city: "required",
                address:
                  {
                    required: true,
                    regex : /^[A-Za-z0-9- ]+$/,
                  },
                   zipcode: {
                      required: true,
                       maxlength: 6,
                       minlength: 6,
                       digits: true,
                      
                  },
                 phno: {
                      required: true,
                       minlength: 10,
                       maxlength: 10,
                        regex : /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/
                     
                  },
                    email: {
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
              state: "Choose Police Station State",
             district: "Choose Police Station District",
               city: "Choose Police Station City",
               address: "Enter Valid Address",
               zipcode: "Please Enter 6 digits Pincode",
                phno: "Please Enter Valid 10 digit Phone Number - Starting from 6 or 7 or 8 or 9",
                email:"Please Enter Valid Email Id",
                username: "Please Enter Valid User Name(5-15 digit alphanumeric username",
                    password: "Please Enter Valid User Name(5-15 digit alphanumeric password",
                      cpassword: "Please Enter Correct password same as above password "//"Please Enter Valid User Name(5-15 digit alphanumeric confirm password and same as above password",
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
    <!--
 <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
 //js -->
 <!-- start-smooth-scrolling 
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
 <script src="js/SmoothScroll.min.js"></script>
 <!-- //smooth scrolling js -->
 
   </body>
</html>