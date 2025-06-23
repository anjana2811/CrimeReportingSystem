<?php
session_start();
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$city=$_POST["city"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$pincode=$_POST["pincode"];

$phno=$_POST["phone_no"];
$emailid=$_POST["emailid"];
$address=$_POST["address"];
$pincode=$_POST["pincode"];
$adhaar_no=$_POST["adhaar_no"];

$username=$_POST["username"];
$password=md5($_POST["password"]);
//Include dboperation class file 
 include_once("dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
       $sq="select * from  tbl_user_registration where adhaar_no='$adhaar_no' ";
       $re=$db->query_execute($sq);
       $no= mysqli_num_rows($re);
       if($no>0)
       {
        ?>
        <script type="">
                alert("Aadhar is  Already Exist.. Failed try Again");
            window.location="user_registration.php";

              </script>
            <?php 
            }
            else
            { 
 $sql="select * from tbl_login where user_name='$username'";
       $res=$db->query_execute($sql); 
 $n=mysqli_num_rows($res);
 if($n==0)
 {
 $sql="insert into tbl_login(user_name,password,user_type,status) values('$username','$password','User','Approved')";
       $res2=$db->query_execute($sql); 
       $login_id = mysqli_insert_id($db->con); 
        $regdate=date('Y-m-d');   
       $otp=rand(1000,9999);
  
       $sql2="insert into tbl_user_registration(firstname, lastname, email_id, address, phone_number, pincode, login_id, reg_date, gender, date_of_birth, place_id,adhaar_no) values('$fname','$lname','$emailid','$address',$phno,$pincode,$login_id,'$regdate','$gender','$dob','$city','$adhaar_no')";

        $res1=$db->query_execute($sql2);
   $_SESSION["otp"]=$otp;
   $url="https://www.way2sms.com/api/v1/sendCampaign";
// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=DN3T586MOT7EVAAJDQMY6XM0WRHX1JQM&secret=OI1JDZF3WE1H5M87&usetype=stage&phone=".$phno."&senderid=aryaanil1902@gmail.com&message=$otp");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

header("location:check_otp.php?logid=$login_id");

      }
      else
      {
       ?>
              <script type="">
                alert("Username Already Exist.. Failed try Again");
            window.location="user_registration.php";

              </script>
            <?php  
      }
    }
?>




