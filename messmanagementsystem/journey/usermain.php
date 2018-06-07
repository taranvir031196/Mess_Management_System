<?php
include("adminheader2.php");
?>
<?php
session_start();
$emailid=$_SESSION['emailid'];
$password=$_SESSION['password'];

mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  customer where emailid='$emailid' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2' align='center'>";

while($row=mysql_fetch_array($result))
{
echo"<form method='get' action='updateuser.php'>";
echo"<tr><th>Roll no</th><td><input type='text' name='rollno' value=".$row['rollno']."></td></tr>";
echo"<tr><th>Name</th><td><input type='text' name='name' value=".$row['name']."></td></tr>";
echo"<tr><th>Class</th><td><input type='text' name='class' value=".$row['class']."></td></tr>";
echo"<tr><th>Stream</th><td><input type='text' name='stream' value=".$row['stream']."></td></tr>";
echo"<tr><th>Year</th><td><input type='text' name='year' value=".$row['year']."></td></tr>";
echo"<tr><th>Email Id</th><td><input type='text' name='emailid'  value=".$row['emailid']."></td></tr>";
echo"<tr><th>Password</th><td><input type='text' name='password' value=".$row['password']."></td></tr>";
echo"<tr><th>Contact No</th><td><input type='text' name='contactno' value=".$row['contactno']."></td></tr>";


echo "<tr><td colspan='2' align='center'><input type='submit' value='update' name='update'><input type='reset' value='clear'></td></tr>";


echo"</form>";

}

echo"</table>";


?>


<?php
include("footer.php");
?>