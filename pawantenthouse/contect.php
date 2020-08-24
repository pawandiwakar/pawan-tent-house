<?php

include "includes/db.php";





?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Job Support</title>
<script src="js/jquery.min.js"></script>
<script src="js/jquery2.js"></script>

<link href="css/style.css" type="text/css" rel="stylesheet">
</head>


<body style="background:#996600;">
<!-- . .. .. ..  Start Top-Header  Section . . . . . -->

<div class="top-header">

   <div class="left-logo">
   <?php
// . . . . . . .  created left logo query.. . . . . .

 $glry_sql="select * from parties where services='left logo' order by rand() limit 0,5";
 $run = mysqli_query($conn,$glry_sql); 
 while($row=mysqli_fetch_array($run)){
 
 ?>
   
   <img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100">
   
 <?php }
 //  . . . . . . End left query . .. . . . 
  ?>
   
   </div>
 
 
    <div class="right-section">
      <div class="right-top-number"><p><span style="color:#00CCFF; padding-left:10px; padding-top:5px;">Contact no.. +91</span><mark> 7607551338, 8318442162</mark></p> <br><p><span style="color:#00CCFF">Email:-</span> pawantenthouse@gmail.com</p></div>
        <div class= "right-top-image">
		
			<?php
// . . . . . . .  created top image  query.. . . . . .

 $glry_sql="select * from parties where services='bottom image' order by rand() limit 0,1";
 $run = mysqli_query($conn,$glry_sql); 
 while($row=mysqli_fetch_array($run)){
 
 ?>	
		  <img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></img>
		
		
		 <?php } 
	 
	//  .. ..  .  ..End top images query. . .  .. . . . . ...  
	 
	 ?>
		</div>
     </div>





<!-- Start main body section-->

<div class="body-section">
<ul>
<a href="index.php"><li>Home</li></a>
<a href="contect.php"><li>Contact</li></a>
<a href="services.php"><li>Services</li></a>
<a href="about.php"><li>About Us</li></a>
</ul>
<!-- . .. .. ..  Start  slider of Body Section . . . . . -->
<h1 id="all-gallery-heading-style">Your Details</h1>

<div class="slider-1">
<form action="insert_cust_detl.php" method="post" >
<table>
<tr><th colspan="2" align="center" style="padding-top:10px; padding-bottom:10px;"> Submit Your Details..</th></tr>

<tr><td align="right">Full Name:-</td> <td> <input type="text" name ="name" placeholder="enter name here" required></td></tr>

<tr><td align="right">Adress:- </td> <td><input type="text" name ="adrs" placeholder="enter adress here" required></td></tr>

<tr><td align="right">Mobile no.:-</td> <td><input type="text" name ="num" placeholder="enter number here" required></td></tr>

<tr><td align="right">Email:-</td> <td> <input type="email" name ="eml" placeholder="enter email here" ></td></tr>

<tr><td  colspan="4" id="opp">

<select tabindex="scroll" name="cust" style="margin-top:10px; margin-bottom:10px; width:47%; height:27px; background:#CCCCCC; color:#990000; font-size:16px;"><br>
<option selected="selected"> select event</option>
<option>Wedding</option>
<option>Birthday</option>
<option>Mundan</option>
<option>Baloon Dcoration</option>
<option>Musical events</option>
</select></td>
</tr>
<tr> <td colspan="2" align="center"><input type="submit" name ="sub" value="send"></td></tr>
</table>
</form>

</div>


 <div class="services-img-details"> 
    <h1 id="all-gallery-heading-style-1">Contact us</h1>
	
	
 
	
	
	
     <div id="one_img">
	 
	 <p id="frame">
	 
	     <!--. . . . . @ click on goole map
	      @ type your address and click your address area
		   @ click " 'share and Go to embed map'
		    @copy url with iframe and Paste your page  . . . . . .. -->
	
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14283.756659046772!2d80.2551030719502!3d26.489903548945982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12a9161749374370!2sPawan+tent+House!5e0!3m2!1sen!2sin!4v1523089696361" width="600" height="450" width="100%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
	</p>
	</div>
	
		 
	 
	 	  </div>


 
 <!-- .. . . .  . start booking details . . . . .-->

 <div class="services-img-details">
    <h1 id="all-gallery-heading-style-2">Booking Now</h1>
	
      <div id="addrs" > 
	  <h1 align="center" style="font-size:18px; color:#990000; margin-top:7px;"> Office Address.</h1><br><br/>
	<span>@ .</span>
	<p>117/447 L-Block</p><p>Kakadev Kanpur Nagar</p><p>Near Gopala Tower...</p><span>@</span><p>Contact no..25435235, 5345635535</p>  </div>
	
	
	 <div id="booking_img">
	  <?php
 
// . . . . . . .  created  office images fetch  query.. . . . . .

 $glry_sql="select * from parties where services='Office image' order by rand() limit 0,1";
 $run = mysqli_query($conn,$glry_sql); 
 while($row=mysqli_fetch_array($run)){
 
 ?>	
	
 <p><img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></img></p> 
 
 <?php } 
	 
	//  .. ..  .  ..End office query. . .  .. . . . . ...  
	 
	 ?> 
 </div>
 
 
  </div>
  
  
  <!-- .. . . .  . End booking details . . . . .-->









<!-- . .. . . .Start Footer part . . . . .-->

<div class="footer"><br>

<div id="social">
<h2 style= "font-size:20px; color:#993300;"> Social<h2><br><br>
<p> Follow Us On:</p> <br> <p><a href="#"><button>F</button></a> <a href="#"><button>g+</button></a><a href="#"><button>in</button></a><a href="#"><button>twt</button></a><a href="#"><button>P</button></a>
</p>
</div>

<div id="social">
<h2 style="font-size:20px; color:#993300;"> Pawan Tent House</h2>
<br>
<a href=""><p>Home</p></a> <a href=""><p><Services</p></a> <a href=""><p>Contact Us</p></a>
<a href=""><p>Services</p></a> <a href=""><p>About Us</p></a>
</div>

<div id="social">
<h2 style="font-size:20px; color:#993300;"> Our Services</h2>
<br>
<a href="#"><p>Photo Gallery</p></a><a href="#"><p>Video Gallery</p></a><a href=""><p>Musical Events</p></a>
<a href=""><p></p></a><a href=""><p>Flower Decoration</p></a><a href=""><p>Baloon Decoration</p></a>
</div>

<div id="social">
<h2 style="font-size:20px; color:#993300;"> Office Address.</h2>
<br>
<p>Address :- 117/443 </p><p>L-Block Kakadev Kanpur Nagar </p><p>[208019] </p><br><p><mark> Mo no :- </mark>7607551338, </p><p>8318442162</p>
</div>

<div id="social">
<h2 style="font-size:20px; color:#993300;"> Web Desining & Web development</h2>
<br>
<p>Created By:-  </p>
</div>

</div>

</body>

</html>
