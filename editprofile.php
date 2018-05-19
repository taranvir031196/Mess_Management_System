<?php
include("adminheader.php");
?>
<?php
session_start();
$emailid=$_SESSION['emailid'];
$password=$_SESSION['password'];

mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  admin where emailid='$emailid' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2'>";

while($row=mysql_fetch_array($result))
{
echo"<form method='get' action='modifyuser1.php'>";
echo"<tr><th>adminid</th><td><input type='text' name='adminid' value=".$row['adminid']."></td></tr>";
echo"<tr><th>Admin Name</th><td><input type='text' name='adminname' value=".$row['adminname']."></td></tr>";
echo"<tr><th>Email Id</th><td><input type='text' name='emailid'  value=".$row['emailid']."></td></tr>";
echo"<tr><th>Password</th><td><input type='text' name='password' value=".$row['password']."></td></tr>";
echo"<tr><th>Contact No</th><td><input type='text' name='contactno' value=".$row['contactno']."></td></tr>";
echo"<tr><th>Address</th><td><input type='text' name='address' value=".$row['address']."></td></tr>";
echo"<tr><th>Gender</th><td><input type='text' name='gender' value=".$row['gender']."></td></tr>";

echo "<tr><td colspan='2' align='center'><input type='submit' value='update' name='update'><input type='reset' value='clear'></td></tr>";


echo"</form>";

}

echo"</table>";


?>
<?php
include("footer.php");
?>