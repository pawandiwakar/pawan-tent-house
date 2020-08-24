<<?php
include "includes/db.php";


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>insert</title>
<script src="js/jquery.min.js"></script>
<script src="js/admin_jquery.js"></script>
<link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>
<div class="topheader_dashboard">
<div id="top-log"><button><a href="index.php">Back To Home</a></button></div>
<div id="left-top-log"><button>Log Out</button></div>
</div>

<div class="body-section">
  <marquee> Show Customer Information </marquee>
<hr>

<!-- . . . . . . . .. . . Start Customer Section. . .. . . . . . .-->
<div class="customer">
<table>
<tr><th colspan="6"> Customer Contact Information</th></tr>
<tr>
<td>Cust Id</td>
<td> Name</td>
<td>Email</td>
<td>Mobile No..</td>
<td>Adress..</td>
<td>Event.</td>
</tr>

<?php
include "includes/db.php";
 
$query= "select * from  cust_info";
 
$run= mysqli_query($conn,$query);

while($row=mysqli_fetch_array($run))
{

?>


<tr>
<td><?php echo $row['c_id'];?></td>
<td><?php echo $row['c_name'];?> </td>
<td><?php echo $row['c_eml'];?></td>
<td><?php echo $row['c_num'];?></td>
<td><?php echo $row['c_adrs'];?></td>
<td><?php echo $row['c_select'];?></td>


</tr>

<?php } ?>


</table>
</div>

<!-- . . . . . . . .. . . End Customer Section. . .. . . . . . .-->
   </div>
</body>
</html>


