<?php 

$crime_id=$_GET["crime_id"];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

          $qry="update tbl_crime set status='investigating' where crime_id='$crime_id'";
                     $res7=$db->query_execute($qry);    

                        if($res7)
            {
              ?>
              <script type="">
              alert("Case is Reopened Successfully");
             window.location="add_crime.php";
              </script>
            <?php 
        }
?>

