
<?php
include("adminheader.php");
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  feedback";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2' align='center' ><tr><td  colspan='4' align='center'><b>Feedback Show</b></td></tr><tr><th>NAME</th><th>EMAIL ID</th><th>CONTACT NO</th><th>VIEWS</th></tr>";

while($row=mysql_fetch_array($result))
{
echo"<tr><td>".$row['name']."</td><td>".$row['emailid']."</td><td>".$row['contactno']."</td><td>".$row['views']."</td></tr>";
}

echo"</table>";
?>
<?php
include("footer.php");
?>

