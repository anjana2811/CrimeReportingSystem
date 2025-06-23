<?php
$investigation=$_POST["investigation"];
$crime_id=$_POST["crime_id"];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

       
 $sql="insert into tbl_investigation(investigation_report,crime_id) values('$investigation','$crime_id')";
       $res2=$db->query_execute($sql); 
       
          
            if($res2)
            {
              ?>
              <script type="">
              alert("Investigation is added Successfully");
             window.location="complaint_list.php";
              </script>
            <?php 
        }
?>




