<?php
$culprit_id=$_GET["culprit_id"];
$crime_id=$_GET["crime_id"];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

  
 $sql="delete from tbl_culprit where culprit_id=$culprit_id";
       $res2=$db->query_execute($sql); 
       
          
            if($res2)
            {
              ?>
              <script type="">
              alert("Culprit is deleted Successfully");
             window.location="add_culprit.php?crime_id=<?php echo $crime_id?>";
              </script>
            <?php 
        }
?>




