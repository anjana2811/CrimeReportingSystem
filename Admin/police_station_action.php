<?php

$address=$_POST["address"];
$place=$_POST["city"];
$zipcode=$_POST["zipcode"];
$phno=$_POST["phno"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=md5($_POST["password"]);
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
 $db=new dbconnection();
 $sql="select * from tbl_police_station where place_id='$place'";
       $res2=$db->query_execute($sql); 
       $n=mysqli_num_rows($res2);
       if($n==0)
       {
  $sql="select * from tbl_login where user_name='$username'";
       $res2=$db->query_execute($sql); 
       $n=mysqli_num_rows($res2);
       if($n==0)
       {
 $sql="insert into tbl_login(user_name,password,user_type,status) values('$username','$password','Police Station','Submitted')";
       $res2=$db->query_execute($sql); 
       $login_id = mysqli_insert_id($db->con); 
       echo $regdate=date('Y-m-d');   
       
      echo $sql2="insert into tbl_police_station(address, zipcode, email, phone_number, place_id, login_id) values('$address','$zipcode','$email','$phno','$place','$login_id')";
        $res1=$db->query_execute($sql2);

          
            if($res1)
            {
             ?> 
              <script type="">
                alert("Police Station is added Successfully");
             window.location="add_police_station.php";

              </script>
          <?php 
        }
      }
      else
      {
         ?>
              <script type="">
                alert("Already Exist");
             window.location="add_police_station.php";

              </script>
            <?php 
      }
       }
      else
      {
         ?>
              <script type="">
                alert("Police Station Has been already Added");
             window.location="add_police_station.php";

              </script>
            <?php 
      }
?>




