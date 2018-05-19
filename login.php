<html>
<head>
<title>Mess Management  System Admin Panel</title>
<script>
function doCheck()
{
var username=document.getElementById("emailid");
var password=document.getElementById("password");

if(username.value=="")
{
alert("please enter the emailid");
username.focus();
return false;
}
else if(parseInt(username.value))
{
alert("please enter the username in character");
username.focus();
return false;


}
if(password.value=="")
{
alert("please enter the password");
password.focus();
return false;
}
}
</script>

<?php
session_start();
include("adminheader.php");

?>



<form method="get" action="">
EMAIL ID<input type="email" name="emailid" id="emailid"><br>
PASSWORD<input type="password" name="password" id="password"><br>
<input type="submit" name="action" value="login" onclick="return doCheck();">  
<input type="submit" name="reset" value="clear">
</form>
<?php
if(isset($_REQUEST['action']))
{
$emailid=$_REQUEST['emailid'];
$password=$_REQUEST['password'];
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from admin where emailid='$emailid' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_num_rows($result);
if($row>=1)
{
$_SESSION['emailid']=$emailid;
$_SESSION['password']=$password;
header("Location:main.php");
}
else
{
echo"<h2>ENTER THE CORRECT EMAIL AND PASSWORD</h2>";
}
}
?>
<?php
include("footer.php");
?>

