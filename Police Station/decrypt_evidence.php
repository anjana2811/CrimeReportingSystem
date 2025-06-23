<?php
$filename=$_GET["file"];
//Decryption
include("encryption.php");
   $blockSize = 128;
    $inputKey = "bcb04b7e103a0cd8";
    $fileData = file_get_contents("Evidence_encrypt_photo/" .$filename);
     $aes2 = new AES($fileData, $inputKey, $blockSize);
    $encData1 = $aes2->decrypt();
    file_put_contents("Evidence_decrypt_photo/" . $filename, $encData1);
//End Decryption
header("location:download.php?filename=$filename");
?>