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
<?php
// . . . . . . .  created left logo query.. . . . . .

 $glry_sql="select * from parties where services='left logo' order by rand() limit 0,5";
 $run = mysql_query($glry_sql); 
 while($row=mysql_fetch_array($run)){
 
 ?>

   <div class="left-logo"> <img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></div>
 
 <?php }
 //  . . . . . . End left query . .. . . . 
  ?>
 
 
    <div class="right-section">
       	  <div class="right-top-number"><p><span style="color:#00CCFF; padding-left:10px; padding-top:5px;">Contact no.. +91</span><mark> 7607551338, 8318442162</mark></p> <br><p><span style="color:#00CCFF">Email:-</span> pawantenthouse@gmail.com</p></div>
       
	    <div class= "right-top-image">
	<?php
// . . . . . . .  created top image  query.. . . . . .

 $glry_sql="select * from parties where services='bottom image' order by rand() limit 0,1";
 $run = mysql_query($glry_sql); 
 while($row=mysql_fetch_array($run)){
 
 ?>	
		
		<img src="admin/images/<?php echo $row['imgs'];?>" width="100" height="100"></img>
     
	 
	 <?php } 
	 
	//  .. ..  .  ..End top images query. . .  .. . . . . ...  
	 
	 ?>
	 </div>
	 </div>





<!-- Start main body section-->

<div class="body-section">
<div id="manue_list-1">
<ul>
<a href="index.php"><li>Home</li></a>
<a href="contect.php"><li>Contact</li></a>
<a href="services.php"><li>Services</li></a>
<a href="about.php"><li>About Us</li></a>
</ul>
</div>

<!-- . .. .. ..  Start  slider of Body Section . . . . . -->
<h1 id="all-gallery-heading-style">Wedding & Party Gallery</h1>

<div class="slider-1">
 
<div class="alternate">

<?php
 $glry_sql="select * from parties where services='Pandal decoration' order by rand() limit 0,5";
 $run = mysql_query($glry_sql); 
 while($row=mysql_fetch_array($run)){
 
 ?>
  
<img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></img>
<img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></img>
<img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></img>
<img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></img>
<img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></img>


<?php } ?>
</div>
</div>


<!-- . .. .. ..  End right slider of Body Section . . . . . -->



<!-- . .. .. ..  Start Viseo & Image gallery section . . . . . -->
 <div class="services-img-details">
 <?php
 $glry_sql="select * from parties where services ='wedding' order by rand() limit 0,1";
 $run = mysql_query($glry_sql); 
 while($row=mysql_fetch_array($run)){
 
 ?> 
    <h1 id="all-gallery-heading-style-1">Video Gallery  .<?php echo $row['heading']; ?> </h1>
    <p><img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"></p> 
 </div>
  <?php } ?>
 
 <div class="services-img-details">
 <?php
 $glry_sql="select * from parties where services ='Fllower' order by rand() limit 0,1";
 $run = mysql_query($glry_sql); 
 while($row=mysql_fetch_array($run)){
 
 ?> 
 
 <h1 id="all-gallery-heading-style-2">Photos Gallery  <?php echo $row['heading']; ?></h1>
 
 <p><img src="admin/images/<?php echo $row['imgs']; ?>" width="100" height="100"> </p>


 <?php } ?>
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
<a href="#all-gallery-heading-style-2"><p>Photo Gallery</p></a><a href="#all-gallery-heading-style-1"><p>Video Gallery</p></a><a href=""><p>Musical Events</p></a>
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
