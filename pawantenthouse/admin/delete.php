

<?php
include "includes/db.php";

$dlt_id = $_GET['dlt_id'];

$dlt_qurey="delete from  parties where p_id =$dlt_id";

$dlt_run= mysqli_query($conn,$dlt_qurey);

if($dlt_run){

header("location:view_all_image.php?dlt=401");

}
else{

echo "nothing";

}



?>