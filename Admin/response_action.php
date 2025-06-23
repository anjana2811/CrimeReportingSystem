<?php
session_start();
$response=$_POST["response"];
$feedback_id=$_POST['feedback_id'];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

  
 $sql="update tbl_feedback set response='$response' where feedback_id=$feedback_id";
       $res2=$db->query_execute($sql); 
      
          
            if($res2)
            {
              ?>
              <script type="">
                alert("Response is added Successfully");
              window.location="feedback.php";

              </script>
            <?php 
        }
?>




