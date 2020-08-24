<?php
include "includes/db.php";

if(isset($_POST['sub'])){
   $name =$_POST['name'];
     $adr=$_POST['adrs'];
     $num=$_POST['num'];
    $eml=$_POST['eml'];
    $cust=$_POST['cust'];
	
	$sql = "insert into  cust_info(c_name,c_adrs,c_num,c_eml,c_select) values(' $name','$adr','$num','$eml',' $cust')";

if( mysqli_query($conn,$sql))
{
header("location:contect.php?success='101'");


}

else{

header("location:contect.php?failed='404'");

}



}






?>