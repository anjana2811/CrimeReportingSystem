<?php
session_start();
$logid=$_SESSION['slogid'];
$desc=$_POST["desc"];
$crime_id=$_POST["crime_id"];

$photo=$_FILES["file"]["name"];
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
 
 $i = 0; 
    $dir = 'Crime_file/';
    //Code to get total number of files in Photo_uploads folder
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }

    $target_dir = "Crime_file/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $filename=$i.".".$imageFileType;

  $mime = $_FILES['file']['type'];
if(strstr($mime, "image/")){
$filetype = "image";
}
else if(strstr($mime, "video/")){
$filetype = "video";
}
else{

}
move_uploaded_file($_FILES["file"]["tmp_name"], "Crime_file/".$filename);
       
    $sql2="insert into  tbl_crime_file(description,file_name,crime_id,type) values('$desc','$filename','$crime_id','$filetype')";
        $res1=$db->query_execute($sql2);
   if($res1)
            {
              ?>
             <script type="">
                alert("Crime File is added Successfully");
             window.location="add_crime_files.php?crime_id=<?php echo $crime_id?>";

              </script>
            <?php 
        }
    ?>     
         
   