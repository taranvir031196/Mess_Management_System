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
include("adminheader2.php");

?>


<table border="0" align="center">
<form method="get" action="">
<tr>
<th align='center' colspan='2' align='center'>Customer Login</th>
</tr>
<tr>
<th>
EMAIL ID</th><th><input type="email" name="emailid" id="emailid"></th></tr>
<th>PASSWORD</th><th><input type="password" name="password" id="password"></tr>
<tr>
<th><input type="submit" name="action" value="login" onclick="return doCheck();">  </th>
<th><input type="submit" name="action" value="remove" onclick="return doCheck();">  </th>
<th><input type="submit" name="reset" value="clear"></th>
</tr>
</form>
</table>
<?php
if(isset($_REQUEST['action']))
{
$action=$_REQUEST['action'];
$emailid=$_REQUEST['emailid'];
$password=$_REQUEST['password'];
if($action=="login")
{
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from customer where emailid='$emailid' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_num_rows($result);
if($row>=1)
{
$_SESSION['emailid']=$emailid;
$_SESSION['password']=$password;
header("Location:usermain.php");
}
else
{
echo"<h2>ENTER THE CORRECT EMAIL AND PASSWORD</h2>";
}
}
if($action=="remove")
{
	mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="delete from customer where emailid='$emailid'";
$result=mysql_query($query) or die(mysql_error());
echo"customer removed";
	
}
}
?>
<?php
include("footer.php");
?>

