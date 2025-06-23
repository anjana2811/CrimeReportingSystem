<?php
$police_station_id=$_GET["police_station_id"];

//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
  $sql22="update tbl_login set status='rejected' where login_id=(select login_id from tbl_police_station where police_station_id=$police_station_id)";
       $res22=$db->query_execute($sql22); 
  
 $sql="delete from tbl_police_station where police_station_id=$police_station_id";
       $res2=$db->query_execute($sql); 
      
       
          
            if($res2)
            {
              ?>
              <script type="">
             alert("Police station Details is deleted Successfully");
             window.location="add_police_station.php";
              </script>
            <?php 
        }
?>




