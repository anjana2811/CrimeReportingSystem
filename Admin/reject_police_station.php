<?php
$login_id=$_GET["login_id"];
//Include dboperation class file 
include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
     
     $sql="update tbl_login set status='Rejected' where login_id=$login_id";
        $res=$db->query_execute($sql);
        if($res)
            {
            	?>
            	<script type="">
            		alert("Rejected Successfully");
            		window.location="add_police_station.php";

            	</script>
            <?php 
        }

?>