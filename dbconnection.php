<?php
class dbconnection
{
	var $con;
function __construct()
	{
		$this->con=mysqli_connect("localhost","root","","crime");
	
	}
	function query_execute($sql)
	{
	$res=mysqli_query($this->con, $sql);
	return $res;	
	}
}
?>