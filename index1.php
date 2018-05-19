
<html>
<head>
<title>Mess Management  System Admin Panel</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
function doCheck()
{
var adminname=document.getElementById("adminname");
var emailid=document.getElementById("emailid");
var password=document.getElementById("password");
var contactno=document.getElementById("contactno");
var address=document.getElementById("address");
 
if(adminname.value=="" ) 
{
alert(" admin name should not be blank");
adminname.focus();
return false;
}
else if(parseInt(admin.value))
{
alert("Admin value is not correct");
adminname.focus();
return false;

}
if(emailid.value=="") 
{
alert(" Email id should not be blank");
emailid.focus();
return false;
}
if(paresInt(emailid.value))
{
alert("please enter valid email id");
emailid.focus();
return false;
}
if(!parseInt(contactno))
{
alert("Enter valid contact number");
contactno.focus();
return.false;
}

}</script>
</head>
<body>
<div class="jumbotron"><h1 align="center">Mess Management System Admin Panel</h1></div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MessManagement</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index1.php">Admin Signup</a></li>
      <li><a href="login.php">Admin Login</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
<div class="container">

<form method="get" action="">
ADMIN NAME<input type="text" name="adminname" id="adminname" onclick="return doCheck();"><br>
EMAIL ID<input type="email" name="emailid" id="emailid" onclick="return doCheck();"><br>
PASSWORD<input type="password" name="password" id="password" onclick="return doCheck();"><br>
CONTACT NO:<input type="text" name="contactno" id="contactno" onclick="return doCheck();"><br>
ADDRESS<input type="text" name="address" id="address" onclick="return doCheck();"><br>
GENDER<input type="radio" name="gender" value="male" >MALE
<input type="radio" name="gender" value="female" >FEMALE<br>
<input type="submit" name="action" value="login">  OR 
<input type="submit" name="action" value="signup">
</form>
<?php
if (isset($_REQUEST['action']))
{
$action=$_REQUEST['action'];
$adminname=$_REQUEST['adminname'];
$emailid=$_REQUEST['emailid'];
$password=$_REQUEST['password'];
$contactno=$_REQUEST['contactno'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
if($action=="login")
{
header("Location:login.php");
}
if($action=="signup")
{
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="insert into admin(adminname,emailid,password,contactno,address,gender) values('$adminname','$emailid','$password','$contactno','$address','$gender')";
mysql_query($query) or die(mysql_error());
echo"<h1> Data Inserted </h1>";
}
}
?>
</div>
<div class="jumbotron" style="background-color:cyan; color:black;"><h4 align='center'>All rights are reserved by MessManagementSystem</h4></div>
<body>
</html>
