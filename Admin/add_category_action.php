<?php
$category=$_POST["category"];

//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

  
 $sql="insert into tbl_category(category) values('$category')";
       $res2=$db->query_execute($sql); 
       
          
            if($res2)
            {
              ?>
              <script type="">
              alert("Category is added Successfully");
             window.location="add_crime_category.php";
              </script>
            <?php 
        }
?>




