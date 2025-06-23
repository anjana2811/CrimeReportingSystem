<?php 
//Code to start session
session_start();

$username=$_POST["username"];
//code to encrypt password 
$password=md5($_POST["password"]);
//Include dboperation class file 
 include_once("dbconnection.php");
  // code to create object of class dboperations
       $db=new dbconnection();
    $sql="select count(*) as c, login_id,user_name,user_type,status from tbl_login where user_name='$username' and password='$password'";

        $res=$db->query_execute($sql);
        $c=0;
        $logid=0;
        $uname="";
        $utype="";
        $name="";
//Code to fetch database value
        while($row=mysqli_fetch_array($res))
        {
        	$c=$row["c"];
         	$logid=$row["login_id"];
        	$uname=$row["user_name"];
        	$utype=$row["user_type"];
            $status=$row["status"];
               
        }

    //----Set session-----------//

       

$_SESSION["slogid"]=$logid;
$_SESSION["suname"]=$uname;




        //-------------------------------------------------------------------------------------------//

        if($c>0)
        {
           
if($status=="Approved")
{
if($utype=="Admin")
{
   
header("location:Admin/index.php");
}
else if($utype=="Police Station")
{
     

header("location:Police Station/index.php");
}
else if($utype=="User")
{
     

header("location:User/index.php");
}

else
{
?>
            	<script type="">
            		alert("Invalid User");
            		window.location="login.php";

            	</script>
            <?php 	
}
}
else if($status=="Rejected")
{
    ?>
                <script type="">
                    alert("Rejected");
                    window.location="login.php";

                </script>
            <?php  
}
else
{
  ?>
                <script type="">
                    alert("Waiting For Approval");
                    window.location="login.php";

                </script>
            <?php   
}
        }
        else
        {
        	?>
            	<script type="">
            		alert("Invalid User");
            		window.location="login.php";

            	</script>
            <?php 
        }
?>