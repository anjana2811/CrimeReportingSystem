
									<option value="0">--Select--</option>
									<?php
									$state=$_GET["state"];
									
include('dbconnection.php');
$db=new dbconnection;
$res= $db->query_execute("select * from tbl_district where state_id=$state");
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["district_id"]?>"><?php echo $row["district_name"]?></option>

	<?php
}


									?>