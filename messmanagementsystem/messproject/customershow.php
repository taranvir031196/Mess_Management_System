
<?php
include("adminheader.php");
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  customer";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2' align='center' ><tr><td  colspan='8' align='center'><b>Customer Show</b></td></tr><tr><th>ROLL NO</th><th>NAME</th><th>PASSWORD</th><th>CLASS</th><th>STREAM</th><th>YEAR</th><th>EMAIL ID</th><th>CONTACT NO</th></tr>";

while($row=mysql_fetch_array($result))
{
echo"<tr><td>".$row['rollno']."</td><td>".$row['name']."</td><td>".$row['password']."</td><td>".$row['class']."</td><td>".$row['stream']."</td><td>".$row['year']."</td><td>".$row['emailid']."</td><td>".$row['contactno']."</td></tr>";
}

echo"</table>";
?>
<?php
include("footer.php");
?>

