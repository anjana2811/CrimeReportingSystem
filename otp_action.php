<?php
session_start();
$otp=$_POST["otp"];
$loginid=$_POST["loginid"];
//Include dboperation class file 
$send_otp= $_SESSION["otp"];
 include_once("dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

if($otp==$send_otp)
{

  
 $sql="update tbl_user_registration set status_phone_number='Valid' where login_id=$loginid";
       $res2=$db->query_execute($sql); 
       
          
            if($res2)
            {
              ?>
              <script type="">
              alert("Registered and Validated your phone number Successfully");
             window.location="login.php";
              </script>
            <?php 
        }
        unset($_SESSION["otp"]);
      }
      else
      {
        if(!isset($_SESSION["check_number"]))
        {
 $_SESSION["check_number"]=0;
        }
        else
        {
           $_SESSION["check_number"]= $_SESSION["check_number"]+1;
        }
         echo $_SESSION["check_number"];
       if( $_SESSION["check_number"]>=3)
       {
        $sql2="delete from tbl_user_registration where login_id=$loginid";
       $res12=$db->query_execute($sql2);
        $sql3="delete from tbl_login where login_id=$loginid";
       $res13=$db->query_execute($sql3);
        unset($_SESSION["check_number"]);
        ?>
              <script type="">
              alert("Invalid OTP .. You have tried 3 times ... Sorry Registration has been canceled");
             window.location="user_registration.php";
              </script>
            <?php 
       }
       else
       {
     
        ?>
              <script type="">
              alert("Invalid OTP Try again ");
             window.location="check_otp.php?logid=<?php echo $loginid?>";
              </script>
        
      <?php 
    }
        
        
      }
?>




