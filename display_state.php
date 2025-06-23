
									<option value="0">--Select--</option>
									<?php
									$country=$_GET["country"];
									
include('connect.php');

$res= mysqli_query($con,"select * from tbl_state where country_id=$country");
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["state_id"]?>"><?php echo $row["state"]?></option>

	<?php
}


									?>