<?php
session_start();
$logid=$_SESSION['slogid'];
$evidence_desc=$_POST["evidence_desc"];
$crime_id=$_POST["crime_id"];

$photo=$_FILES["file"]["name"];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
 if($photo=="")
 {
    $sql2="insert into tbl_evidence(  evidence_description,file_name,crime_id ) values('$evidence_desc','$photo','$crime_id')";
        $res1=$db->query_execute($sql2);
           if($res1)
            {
              ?>
              <script type="">
                alert("Evidence is added Successfully");
             window.location="evidence.php?crime_id=<?php echo $crime_id?>";

              </script>
            <?php 
        }
 }
 else
 {
 $i = 0; 
    $dir = 'Evidence_encrypt_photo/';
    //Code to get total number of files in Photo_uploads folder
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }

    $target_dir = "Evidence_encrypt_photo/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $filename=$i.".".$imageFileType;

/*Encryption*/
include("encryption.php");
   $blockSize = 128;
    $inputKey = "bcb04b7e103a0cd8";
    $fileData = file_get_contents($_FILES["file"]["tmp_name"]);
    $aes = new AES($fileData, $inputKey, $blockSize);
    $encData = $aes->encrypt();
    file_put_contents("Evidence_encrypt_photo/" .$filename, $encData);

/*End Code Encryption*/



  // move_uploaded_file($_FILES["file"]["tmp_name"], "Evidence_photo/".$filename);

       
    $sql2="insert into tbl_evidence(  evidence_description,file_name,crime_id ) values('$evidence_desc','$filename','$crime_id')";
        $res1=$db->query_execute($sql2);
   if($res1)
            {
              ?>
             <script type="">
                alert("Evidence is added Successfully");
             window.location="evidence.php?crime_id=<?php echo $crime_id?>";

              </script>
            <?php 
        }
     }     
         
   