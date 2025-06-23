<?php 

$filename=$_GET["filename"];
   // Get parameters
    // Decode URL-encoded string
    $filepath = "Evidence_decrypt_photo/" . $filename;
unlink($filepath) or die("Couldn't delete file");
?>