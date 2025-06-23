<?php
session_start();
$logid=$_SESSION['slogid'];
$fname=$_POST["fname"];
$lname=$_POST["lname"];

$gender=$_POST["gender"];
$dob=$_POST["dob"];


$phno=$_POST["phone_no"];
$emailid=$_POST["emailid"];
$address=$_POST["address"];
$rank=$_POST["rank"];

       

 //File Upload

    $i = 0; 
    $dir = 'police_photo/';
    //Code to get total number of files in Photo_uploads folder
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
$target_dir = "police_photo/";
 $target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 //$target_file1 = $target_dir .$i. basename($_FILES["file"]["name"]);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists

// Check file size
if ($_FILES["photo"]["size"] >100000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif")
 {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $filename=$i.".".$imageFileType;
move_uploaded_file($_FILES["photo"]["tmp_name"], "police_photo/".$filename);
}      
  


//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
       
  $sql="select * from tbl_police_station where login_id=$logid";
        $res=$db->query_execute($sql);
        $police_station_id=0;
  while($row=mysqli_fetch_array($res))
  {
$police_station_id=$row["police_station_id"];
  }
 


       
       $sql2="insert into tbl_police(firstname, lastname, email_id, address, phone_number, gender, date_of_birth, police_station_id,rank,photo) values('$fname','$lname','$emailid','$address',$phno,'$gender','$dob',$police_station_id,'$rank','$filename')";
        $res1=$db->query_execute($sql2);

          
            if($res1)
            {
              ?>
              <script type="">
                alert("Police is added Successfully");
             window.location="add_police.php";

              </script>
            <?php 
        }
?>




