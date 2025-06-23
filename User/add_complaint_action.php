<?php
session_start();
$complaint_subject=$_POST["complaint_subject"];
$complaint_desc=$_POST["complaint_desc"];
$place=$_POST["city"];
$complaint_date=$_POST["complaint_date"];
$category=$_POST["category"];
 $VictimName=$_POST["VictimName"];
$VictimAge=$_POST["VictimAge"];
 

//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();
$logid=$_SESSION['slogid'];
  
 $sql="insert into tbl_crime(crime_subject,crime_description,crime_date_time,crime_place,login_id,category_id)values('$complaint_subject','$complaint_desc','$complaint_date','$place','$logid','$category')";
       $res2=$db->query_execute($sql); 
      $crime_id="";
            $qry22="select max(crime_id) as c from tbl_crime";
           $res22=$db->query_execute($qry22);
           while($row=mysqli_fetch_array($res22)) 
           {
            $crime_id=$row["c"];
           }



                      $s=0;
                     for($j=0; $j<count($VictimName);$j++)
                     {
    $s=$j+1;
    $gender=$_POST["VictimGender$s"];
    echo $qry33="insert into tbl_crime_victim(victim_name,victim_age,victim_gender,crime_id)values('$VictimName[$j]','$VictimAge[$j]','$gender','$crime_id')";
                      
       $res6=$db->query_execute($qry33);    
                     }


            if($res6)
            {
              ?>
              <script type="">
              alert("Complaint is added Successfully");
             window.location="complaint.php";
              </script>
            <?php 
        }
?>




