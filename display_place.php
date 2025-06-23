
									<option value="0">--Select--</option>
									<?php
									$district=$_GET["district"];
									
include('dbconnection.php');
$db=new dbconnection;
$res= $db->query_execute("select * from tbl_place where district_id=$district");
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["place_id"]?>"><?php echo $row["place_name"]?></option>

	<?php
}


									?>