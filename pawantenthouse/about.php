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

 $glry_sql="select * from parties where services='left logo' order by rand() limit 0,1";
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

<div class="manue_list">
<ul>
<a href="index.php"><li>Home</li></a>
<a href="contect.php"><li>Contact</li></a>
<a href="services.php"><li>Services</li></a>


<h1 id="all-gallery-heading-style"> ABOUT US..</h1>


</div>
<!-- . .. .. ..  End right slider of Body Section . . . . . -->




 
<div class="services-img-details">
    <h1 id="all-gallery-heading-style-2">About Us. . . </h1>
      <div id="booking"><p></p><p></p> </div>
     <div id="booking_img"><p><img src="images/dinner-decoration2.jpg"></img></p> </div>
  </div> 
 
 <div class="services-img-details">
    <h1 id="all-gallery-heading-style-2">OUR TEAM...</h1>
      <div id="booking"><p></p><p></p> </div>
     <div id="booking_img"><p><img src="images/dinner-decoration2.jpg"></img></p> </div>
  </div>
 <hr color="#999999">
 <h1 id="all-gallery-heading-style"> Our Services..</h1>
 <div class="services-img-details"> 
    <h1 id="all-gallery-heading-style-1">Catering</h1>
     <div id="one_img"><p><img src="images/dinner-decoration2.jpg"></img></p></div>
	 <div id="addrs" > <h1 align="center" style="font-size:18px; color:#990000; margin-top:7px;"> .</h1><br><br/>
	<span></span><p></p><p></p><p>.</p><span>@</span><p></p></div>
 </div>
 <div class="services-img-details">
    <h1 id="all-gallery-heading-style-2">Wedding Planner</h1>
      <div id="booking"> </div>
     <div id="booking_img"><p><img src="images/dinner-decoration2.jpg"></img></p> </div>
  </div>
 
<!-- . .. .. ..  Start Viseo & Image gallery section . . . . . -->








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
