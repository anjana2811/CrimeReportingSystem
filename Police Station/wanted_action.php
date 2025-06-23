<?php
session_start();
$logid=$_SESSION['slogid'];
$height=$_POST["height"];
$name=$_POST["name"];
$dabs=$_POST["dabs"];
$dreport=$_POST["dreport"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$complexion=$_POST["complexion"];


$bstyle=$_POST["bstyle"];
$mark=$_POST["mark"];
$address=$_POST["address"];
$bcase=$_POST["bcase"];
$photo=$_FILES["photo"]["name"];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
 
   move_uploaded_file($_FILES["photo"]["tmp_name"], "Wanted/$photo");

       
      echo  $sql2="insert into tbl_wanted(date_of_abscounting, date_of_report, age, gender, complexion, height, body_style, identification_mark, name, address, case_details, police_login_id,photo) values('$dabs','$dreport','$age','$gender','$complexion','$height','$bstyle','$mark','$name','$address','$bcase','$logid','$photo')";
        $res1=$db->query_execute($sql2);

          
            if($res1)
            {
              ?>
              <script type="">
                alert("User is added Successfully");
             window.location="public_alert.php";

              </script>
            <?php 
        }
     