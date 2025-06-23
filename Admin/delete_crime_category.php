<?php
$category_id=$_GET["category_id"];

//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

  
 $sql="delete from tbl_category where category_id=$category_id";
       $res2=$db->query_execute($sql); 
       
          
            if($res2)
            {
              ?>
              <script type="">
              alert("Category is deleted Successfully");
             window.location="add_crime_category.php";
              </script>
            <?php 
        }
?>




