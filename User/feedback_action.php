<?php
session_start();
$feedback=$_POST["feedback"];
$logid=$_SESSION['slogid'];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

  
 $sql="insert into tbl_feedback(feedback,login_id) values('$feedback',$logid)";
       $res2=$db->query_execute($sql); 
      
          
            if($res2)
            {
              ?>
              <script type="">
                alert("Feedback is added Successfully");
              window.location="add_feedback.php";

              </script>
            <?php 
        }
?>




