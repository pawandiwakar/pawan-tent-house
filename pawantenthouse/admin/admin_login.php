<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome To Admin </title>
<script src="js/jquery.min.js"> </script>
<script src="js/admin_jquery.js"></script>

</head>
<link href="css/style.css" type="text/css" rel="stylesheet">
<body background="images/bg3.jpg">

<div class="topheader">

<h1>Welcome To Admin Panel</h1>
</div><br><br><br><br>

<div class = "loginpanel">

<p><img src = "images/admin.PNG"></img></p><br>
<form action="admin_login.php" method="post" name="f1">
<p><input type= "text" name="uname" placeholder="user name"></p><br>
<p><input type = "password" name = "upwd"   placeholder = "password" id ="strenth"></p><span class="plnth"></span><br>
<p style="color:#FFFFFF;"><input type="checkbox" name="reset" value="">keep me</p>
<br>
<p><input type = "submit"  name = "sub"  value = "LogIn" ></p>
</form>
<br><br>
</div>
</div>
</body>
</html>
