<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | About</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>

</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="images/logo11.png" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.html">Home</a></li>
		  <li><a href="about.html">About us</a></li>
		  <li><a href="gallery.html">Gallery</a></li>
          <li class="with_ul"><a href="about.html">Sign Up</a>
            <ul>
			  		<li><a href="index1.php">Admin Signup</a></li>
              <li><a href="login.php">Admin Login</a></li>
              <li><a href="customerdetail.php">Customer Sign up</a></li>
              <li><a href="customerlogin.php">Customer Login</a></li>
            </ul>
          </li>
          
          <li><a href="feedback.php">Feedback</a></li>
         
          <li><a href="contacts.php">Contact Us</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<h1 align="center">Your Feedback Is IMPORTANT</h1>

<form method="get" action="" >
<div class="container" align="center">

Name<input type="text" name="name"><br> <br>
Email Id<input type="email" name="emailid"><br><br>
Contact No:<input type="text" name="contactno"><br><br>
Your Views<br><textarea rows="20" cols="20" name="views">
</textarea ><br>
<input type="submit" name="clickhere" value="click Here">

</div>
</form>
<?php
if(isset($_REQUEST['clickhere']))
{
$name=$_REQUEST['name'];
$emailid=$_REQUEST['emailid'];
$contactno=$_REQUEST['contactno'];
$views=$_REQUEST['views'];
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="insert into feedback values('$name','$emailid','$contactno','$views')";
mysql_query($query) or die(mysql_error());
echo"<h1> Data Inserted </h1>";
}
?>

      <div class="clear"></div>
      <div class="bottom_block">
    <div class="container_12">
      <div class="grid_2 prefix_2">
        <ul>
          <li><a href="#">Address</a></li>
          <li><a href="#">Saraswati Kendra,
SCO 160-161, Sector 9 C,
Chandigarh 160 009, India.</a></li>
        </ul>
      </div>
      
      <div class="grid_2">
        <ul>
          <li><a href="#">Email:</a></li>
          <li><a href="#">admissions@chitkara.edu.in</a></li>
        </ul>
      </div>
	  
	   <div class="grid_2">
        <ul>
          <li><a href="#">Admission Helpline
</a></li>
          <li><a href="#">Sandeep Sharma : 9501105714,
Umed Saini : 9501105715</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h4>Contact Us:</h4>
       +91-172-4691800,+91-172-2746209<br>
       </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <div class="copy"> <h3>All rights are reserved by messmanagement system</h3> </div>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>
</body>
</html>


