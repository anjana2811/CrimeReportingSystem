<?php 
echo "string";
$crime_id=$_POST["crime_id"];
if(isset($_POST["culpritName"]))
{

 $culpritName=$_POST["culpritName"];

$culpritAge=$_POST["culpritAge"];

//Include dboperation class file 
 include_once("../dbconnection.php");
 // code to create object of class dboperations
       $db=new dbconnection();

 $s=0;
                     for($j=0; $j<count($culpritName);$j++)
                     {
    $s=$j+1;
    $gender=$_POST["culpritGender$s"];
     $qry33="insert into tbl_culprit(culprit_name,	culprit_age,culprit_gender,crime_id)values('$culpritName[$j]','$culpritAge[$j]','$gender','$crime_id')";
                      
       $res6=$db->query_execute($qry33);


         
                     }
         

                        if($res6)
            {
              ?>
              <script type="">
              alert("Culprit is added Successfully");
             window.location="complaint_list.php";
              </script>
            <?php 
        }
      }
      else
      {
        header("location:add_culprit.php?flag=0&crime_id=$crime_id");
      }
?>

