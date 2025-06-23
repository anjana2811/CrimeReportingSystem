<?php
//Start session
session_start();
if(isset($_SESSION['slogid']))
{
	// Code to destroy session
session_destroy();


header("Location: index.php");
exit;
}
?>