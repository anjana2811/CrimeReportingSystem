<?php 
session_start();
//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
       $crime_id=$_GET["crime_id"];
$count=1;
  $cls="odd";
 
 $login_id=$_SESSION['slogid'];
 $sql="select * from tbl_crime inner join tbl_place on tbl_crime.crime_place=tbl_place.place_id inner join tbl_district on tbl_place.district_id=tbl_district.district_id inner join tbl_state on tbl_district.state_id=tbl_state.state_id where tbl_crime.status='investigating' and tbl_crime.crime_place=(select place_id from tbl_police_station where login_id='$login_id') and tbl_crime.crime_id=$crime_id";
  $res2=$db->query_execute($sql);
      $n=mysqli_num_rows($res2);
if($n>0)
{
  ?>
  <table class="table">
  
  
  <thead class="thead-light">
             <tr><th>SL NO</th><th>Crime Subject</th><th>Crime Date & Time</th><th>Crime Place</th><th>Complaint Registered Date</th>
            <th>Add Culprit</th>
<th>Add Details</th>
<th>Close</th>            

            </tr>   
                </thead><tbody>
  <?php

       while ($row=mysqli_fetch_array($res2)) {
if($count%2==0)
{
  $cls="even";
}
        ?>
        <tr class="<?php echo $cls ?>">
          <td><?php echo $count; ?></td>
          <td><?php echo $row["crime_subject"] ?></td>
            <td><?php echo $row["crime_date_time"] ?></td>
<td><?php echo $row["place_name"] ?></td>
<td><div><?php echo $row["place_name"] ?></div>
<div><?php echo $row["district_name"] ?></div>
<div><?php echo $row["state_name"] ?></div>
</td>
  
<td><a class="btn btn-info" href="crime_file.php?crime_id=<?php echo $row["crime_id"] ?>">File </a></td>      
<td><a  class="btn btn-info"  href="crime_closed_more_details.php?crime_id=<?php echo $row["crime_id"] ?>">More Details</a></td>
        </tr>
        <?php
        $count++;
       }
            ?></tbody>
            </table>
          <?php }
else
{
  ?>
  <div style="padding: 20px; margin:50px; background-color: #e1a71e; color: #fff">No List Available</div>
  <?php
}?>
