<?php

include "includes/db.php";




?>


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

                                    <a href="">  <p>Customer contact detail View</p></a>

                                  <a href="insert_details.php"><p>Tent image uploads</p></a>

                                  <a href="add_services_form.php"><p>Add Services </p></a>

	   
    
</div>
 <!-- . . . . . . . .. . . End left library. . .. . . . . . .--> 

<div class="crystel-detail">
<br><br><br><br>
<center>
<?php




?>


<br>
<form action="insert_all_services.php" method="post" >

<input type="text" name="new-service" placeholder="enter new services. .." ><br><br>
<input type="submit" name="add_services" value="Add New services">
</form>
</center>

</div>

</div>
</body>
</html>

