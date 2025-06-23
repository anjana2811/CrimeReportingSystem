
									<option value="0">--Select--</option>
									<?php
									$district=$_GET["district"];
									
include('../dbconnection.php');
$db=new dbconnection;
$res= $db->query_execute("select * from tbl_place inner join tbl_police_station on tbl_place.place_id=tbl_police_station.place_id where tbl_place.district_id =$district");
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["place_id"]?>"><?php echo $row["place_name"]?></option>

	<?php
}


									?>