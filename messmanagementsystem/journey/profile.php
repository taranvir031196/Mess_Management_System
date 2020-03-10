<?php
include("adminheader.php");
?>

<html>
<head>
<title>Mess Management  System Admin Panel</title>

<div class="container">
<?php
session_start();
$emailid=$_SESSION['emailid'];
$password=$_SESSION['password'];

mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  admin where emailid='$emailid' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2' align='center'>";

while($row=mysql_fetch_array($result))
{
echo"<tr><th>adminid</th><td>".$row['adminid']."</td></tr>";
echo"<tr><th>Admin Name</th><td>".$row['adminname']."</td></tr>";
echo"<tr><th>Email Id</th><td>".$row['emailid']."</td></tr>";
echo"<tr><th>Password</th><td>".$row['password']."</td></tr>";
echo"<tr><th>Contact No</th><td>".$row['contactno']."</td></tr>";
echo"<tr><th>Address</th><td>".$row['address']."</td></tr>";
echo"<tr><th>Gender</th><td>".$row['gender']."</td></tr>";




}

echo"</table>";

?>
<?php
include("footer.php");
?>












