<?php

session_start();
$logid=$_SESSION["slogid"];
$username=$_POST["username"];
$password=md5($_POST["password"]);
$npassword=md5($_POST["npassword"]);

 include_once("../dbconnection.php");
       $db=new dbconnection();                              

$res= $db->query_execute("select * from tbl_login  where user_name='$username' and password='$password' and login_id=$logid");

     
       // $res=$db->check_login($username,$password,$logid);
        $c=mysqli_num_rows($res);
        if($c>0)
        {
//$res1=$db->update_password($npassword,$logid);
            $res1= $db->query_execute("update tbl_login set password='$npassword' where login_id=$logid");
if($res1)
        {
            ?>
                <script type="">
                    alert("Password Changed Successfully");
                    window.location="change_password.php";

                </script>
            <?php 
        }

        }
        else
        {
         ?>
                <script type="">
                    alert("Submitted details are wrong");
                    window.location="change_password.php";

                </script>
            <?php    
        }
 ?>