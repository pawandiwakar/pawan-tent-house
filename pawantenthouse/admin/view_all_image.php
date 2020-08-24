<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin dashboard</title>
<script src="js/jquery.min.js"></script>
<script src="js/admin_jquery.js"></script>
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
<div class="topheader_dashboard">

</div>

<!-- . . . . ..... . . ... . . . . start body section  . . .  . . . . -->

<div class="body-section">
  <marquee> Welcome To My Admin </marquee>
<hr>

<!-- . . . . . . . .. . . Start left library. . .. . . . . . .-->

                             <div class="left-library">

                               <a href="view_all_image.php"><p>View All images detail</p></a>

                                 <a href="contact_view.php "><p>Customer detail View</p></a>

                                 <a href="insert_details.php"><p>Tent image uploads</p></a>

                                 <a href="add_services_form.php"><p>Add Services </p></a>

	                           </div>
 
 <!-- . . . . . . . .. . . End left library. . .. . . . . . .--> 
 
 
 
  <!-- . . . . . . . .. . . Start Right section. . .. . . . . . .--> 
<div class="crystel-detail">
<!-- Request k jariye 'Header' se URL ki value catch karke kisi bhi page me request kr sakte hai-->
<?php
/*if($_REQUEST['result']){
echo "<h1 style='color:#990000; text-align:center'>data has been inserted</h1>";

}
else{

echo "<h1 style='color:#990000; text-align:center'>Data is not inserted</h1>";
}*/
?>
<!-- . . .. Close Request . . .-->
<div align="center" style="color:#990000; margin-top:10px; margin-bottom:30px; font-size:24px;">
<?php
// request start for inserted data 
                 
				  if(@$_REQUEST['result']==101)
					{
                           echo "data has been inserted";

echo " <a href='insert_details.php'> Continue insert</a>";
                     }
                          else if(@$_REQUEST['err']==404)
                              {
                                   echo "wrong insert";
                                }
 
// . . . . . . .End requested . . . . . .. . . . . . . . . . . 
?>



<?php
// Requested Start to Deleted data from database 
 
   if(@$_GET['rslt']==101)
   {
     
	 echo "Select product is Deleted";
	 echo " <a href='product_insert.php'> New Insert</a>";
   }

      else if(@$_GET['err']==404)
        {

      echo " Delete Fails";

        }
		
// End Requested
?>
</div>
<table width="700" align="center" border="2">
<tr style="background:#CCCCCC; color:#FFFFFF;" align ="center">
<td> Serial no.</td>
<td>Image name </td>
<td>Comments</td>
<td>Heading</td>
<td> img1</td>
<td>View</td>
<td>Delete</td>
<td>Edit</td>
</tr>


<?php
include "includes/db.php";


$query1="select * from  parties order by rand() LIMIT 0,6";

 

$run=mysqli_query($conn,$query1);


while($row=mysqli_fetch_array($run))

{ ?>

<tr>
   <td> <?php echo $row['id']; ?></td>
     <td> <?php echo $row['image_name']; ?></td>
      <td> <?php echo $row['comments']; ?></td>
        <td> <?php echo $row['heading']; ?></td>
		
      <td><img src="../admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></td>
	  
     <td><a href="single_pruduct_details.php?url_id='<?php echo $row['p_id']; ?>'">View</a></td>
	 
   <td><a href="delete.php?dlt_id='<?php echo $row['p_id']; ?>'">Delete</a></td>
   
  <td> <a href="">Edit</a></td>

</tr>


<?php } ?>
</table>

</div>
 </div>
</body>
</html>
