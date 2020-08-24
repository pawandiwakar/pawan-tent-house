<?php
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

</div>

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

<div class= "crystel-detail"> 
 <br><br>
<form action="#" method="post" enctype="multipart/form-data" >

<table id="tabl-style" align="center">
<tr>
<th colspan="2" style="font-size:25px; color:#990000; padding-bottom:40px; "> Insert All Product </th>
</tr>

<tr>
<td  colspan="5">
<select name="party">
<option>All Services</option>

<?php

//  . .. . . start select all Services form database in option . . ..  .. 
 
$query = "select * from  services";

$run=mysqli_query($conn,$query);
 
 while($row_serve=mysqli_fetch_array($run)){
 
 $cats_id = $row_serve['s_id'];
 
 $u_id = $row_serve['u_id'];

 $cats_all_serve = $row_serve['all_services'];
 
 ?>
 
<option><?php echo $cats_all_serve; ?> </option> 

<?php }

?>

</select>

</td>
</tr>

<tr>

 <td> <input type= "text" name="phead" placeholder="enter img heading here"></td>
 </tr>
<tr>

 <td> <input type= "text" name="img-name" placeholder="enter name here"></td>
 </tr>



<tr>

<td> <input type= "text" name="desc" placeholder="enter Description here"></td>
</tr>

<tr>

<td><input type= "text" name="ptitle" placeholder="enter product title "></td>
</tr>

<tr>
<td style="padding-top:15px;"><input type= "file" name="img_file"></td>
</tr>
<tr>
<td style="padding-top:15px;"><input type= "file" name="img_fil"></td>
</tr>

<tr>
<td colspan="5" align="center"><input type= "submit" name="sub" value="submit"></td>
</tr>
 
 
</table>

</form>

   </div>
   </div>
</body>
</html>


<?php

 // include "includes/admndb.php";

if(isset($_POST['sub'])){

$pro_id = uniqid();
$all_party=$_POST['party'];

$phead=$_POST['phead'];
$img_name=$_POST['img-name'];

$desc=$_POST['desc'];

$ptitle=$_POST['ptitle'];


$file=$_FILES['img_file']['name'];
$fil=$_FILES['img_fil']['name'];

// use temp.. name

$temp_file=$_FILES['img_file']['tmp_name'];
$temp_fil=$_FILES['img_fil']['tmp_name'];

// .. . use variable for targate. . . 

$target = "images/";

//...............use syntex move to another folder...... . . .

move_uploaded_file($temp_file,"$target/$file");
move_uploaded_file($temp_fil,"$target/$fil");


//. .  . . . ..start insert query for database........ . . .. . . .
 
 $query = "insert into parties(p_id,heading,services,image_name,comments,imgs,imgss) values('$pro_id','$phead','$all_party','$img_name','$desc','$file','$fil')";

 if(mysql_query($query))
   
   {

   // started header section for location or sent in any page

    header("location:view_all_image.php?result=101");
 
    // close Header
  }
   else {
 
    header("location:view_all_image.php?err=404");
    }


}

?>
