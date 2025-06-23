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
  <script type="text/javascript" src="Ajax/ajax.js"></script>
  <link href="../jquery/jquery-ui.css" rel="stylesheet">
<script src="../jquery/jquery.js"></script>
<script src="../jquery/jquery-ui.js"></script>

<script>
  $( function() {
   $( "#dob" ).datepicker({ dateFormat: 'yy-mm-dd',
        maxDate: '-20Y', });
  
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
        <a class="nav-link" href="add_police_station.php">Police Station</a>
      </li>
  

    <li class="nav-item ">
        <a class="nav-link" href="add_crime_category.php">Category</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="add_crime.php">Crime</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="user_list.php">User List</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="change_password.php">Change Password</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="report.php">Report</a>
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
   <h4 class="heading"  style="margin-bottom: 10px" align="center"><u><b><font color="red" size="5" face="lucida calligraphy">APPROVED POLICE STATION LIST</font></b></u></h4>
  
   <?php 
 //Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
$count=1;
  $cls="odd";
 $sql="select * from tbl_police_station inner join tbl_login on tbl_police_station.login_id=tbl_login.login_id inner join  tbl_place on tbl_police_station.place_id=tbl_place.place_id inner join tbl_district on tbl_place.district_id=tbl_district.district_id inner join tbl_state on tbl_state.state_id=tbl_district.state_id where tbl_login.status='Approved'";
  $res2=$db->query_execute($sql);
      $n=mysqli_num_rows($res2);
if($n>0)
{
 ?>
 <table class="table table-striped">
 
 
 <thead>
       <tr class="alert alert-success"><th>SL NO</th>
        <th>Police Station</th>
          <th>Phone Number</th>
          <th>Email</th>
           <th>Address</th>
        <th>Delete</th>
        
       
        
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
         
  <td>
   <div><?php echo $row["state_name"] ?></div>
<div><?php echo $row["district_name"] ?></div>
<div><?php echo $row["place_name"] ?></div>
  </td>
  <td><?php echo $row["phone_number"] ?></td>
    <td><?php echo $row["email"] ?></td>
       <td><?php echo $row["address"] ?></td>
<td><a class="button" href="delete_police_station.php?police_station_id=<?php echo $row["police_station_id"] ?>">Delete</a></td>


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
  <div style="width:100%;padding: 20px; margin:50px; background-color: #e1a71e; color: #fff">No List Available</div>
  <?php
}?>
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