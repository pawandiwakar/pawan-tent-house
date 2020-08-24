<?php
include "includes/db.php";


if(isset($_POST['add_services']))
{
  
  $u_id=uniqid();

$new_service=$_POST['new-service'];



$serve_query = "insert into services(u_id,all_services) values('$u_id','$new_service')";

   if(mysql_query($serve_query ))

        {

        header("location:add_services_form.php?result=101");

      }

else 
   {
      header("location:add_services_form.php?error=404");
   }

}


?>