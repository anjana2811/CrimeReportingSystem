<?php
$police_id=$_GET["police_id"];

//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

  
 $sql="delete from tbl_police where police_id=$police_id";
       $res2=$db->query_execute($sql); 
       
          
            if($res2)
            {
              ?>
              <script type="">
              alert("Police is deleted Successfully");
             window.location="add_police.php";
              </script>
            <?php 
        }
?>




