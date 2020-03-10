<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/forms.js"></script>
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
         
          <li><a href="contacts.html">Contact Us</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="main">
  <div class="content">
    <div class="container_12">
      <div class="grid_9">
        <h3>Mess Management System</h3>
        <div class="map">
          <figure class="img_inner fleft">
            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
          </figure>
          <address>
          <dl>
            <dt>Administrative Office:
 </dt>
            <dd><span>SCO 160-161, Sector 9 C,
                Chandigarh 160 009, India.</dd>
            <dd>Tel : Sandeep Sharma : 9501105714,
               Umed Saini : 9501105715+1 800 603 6035</dd>
           
            <dd>E-mail: <a href="#" class="link-1"> admissions@chitkara.edu.in</a></dd>
          </dl>
          </address>
          <address class="mb0">
          <dl>
            <dt> Chandigarh-Patiala National Highway (NH-64)<br>
                  Punjab-140 401, India
             . </dt>
            <dd><span>Freephone:</span>+1 800 559 6580</dd>
            <dd><span>Telephone:</span>+1 800 603 6035</dd>
            <dd>Tel:- +91.1762.507084-86, Mandeep Berwal – 9501105718</dd>
            
          </dl>
          </address>
        </div>
      </div>
      <div class="grid_3">
        <h3>Contact Us</h3>
       <form method="get" action="">
          <div class="success_wrapper">
            <div class="success"><h2></h2><br>
              <strong>We will be in contact soon once you fill the contact form.</strong> </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Name" name="name">
              <br class="clear">
                         <label class="email">
              <input type="text" value="Email" name="email">
              <br>
             
            <label class="name">
              <input type="text" value="Subject" name="subject">
              <br>
            <label class="message">
              <textarea name="message">Message</textarea>
            
            <div class="clear"></div>
         <!--   <div class="btns"><a data-type="reset" class="btn">Clear</a>-->
			
              <div class="none"></div>
			  <br><br>
              <input type="submit" value="contact" name="contact">
              <div class="clear"></div>
            </div>
          </fieldset>
		   </form>
		  <?php
		  if(isset($_REQUEST['contact']))
		  {
			  echo "Contact form Submited";
			  
		  $name=$_REQUEST['name'];
		  $email=$_REQUEST['email'];
		  $subject=$_REQUEST['subject'];
		  $message=$_REQUEST['message'];
		  mysql_connect("localhost","root","");
		  mysql_select_db("messmanagement");
		  $query="insert into contactus values('$name','$email','$subject','$message')";
		  mysql_query($query) or die(mysql_error());
		  echo"      Thank you";
		  }
		  
		  ?>
       
      </div>
      <div class="clear"></div>
    </div>
  </div>
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
