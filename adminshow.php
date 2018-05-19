<?php
include("adminheader.php");
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  admin";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2' align='center'>";
echo"<tr ><td colspan='7' align='center'><b>ADMIN SHOW</b></td></tr><tr><th>ADMIN ID</th><th>ADMIN NAME</th><th>EMAIL ID</th><th>PASSWORD</th><th>CONTACT NO</th><th>ADDRESS</th><th>GENDER</th></tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr><td>".$row['adminid']."</td><td>".$row['adminname']."</td><td>".$row['emailid']."</td><td>".$row['password']."</td><td>".$row['contactno']."</td><td>".$row['address']."</td><td>".$row['gender']."</td></tr>";
}



echo"</table>";
?>
<?php
include("footer.php");
?>

