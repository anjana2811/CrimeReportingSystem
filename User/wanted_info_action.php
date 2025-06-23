<?php
session_start();
$logid=$_SESSION['slogid'];
$description=$_POST["description"];
$wanted_id=$_POST["wanted_id"];

$photo=$_FILES["file"]["name"];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
 if($photo=="")
 {
    $sql2="insert into tbl_wanted_info(description, user_login_id,wanted_id) values('$description','$logid','$wanted_id')";
        $res1=$db->query_execute($sql2);
           if($res1)
            {
              ?>
              <script type="">
                alert("Information is added Successfully");
             window.location="add_alert_info.php?wanted_id=<?php echo $wanted_id?>";

              </script>
            <?php 
        }
 }
 else
 {
 $i = 0; 
    $dir = 'Wanted_info/';
    //Code to get total number of files in Photo_uploads folder
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }

    $target_dir = "Wanted_info/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $filename=$i.".".$imageFileType;
   move_uploaded_file($_FILES["file"]["tmp_name"], "Wanted_info/".$filename);

       
    echo    $sql2="insert into tbl_wanted_info(description, user_login_id, filename,wanted_id) values('$description','$logid','$filename','$wanted_id')";
        $res1=$db->query_execute($sql2);
   if($res1)
            {
              ?>
              <script type="">
                alert("Information is added Successfully");
             window.location="add_alert_info.php?wanted_id=<?php echo $wanted_id?>";

              </script>
            <?php 
        }
     }     
         
   