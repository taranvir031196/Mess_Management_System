
<?php
include("adminheader.php");
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  contactus";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2' align='center' ><tr><td  colspan='4' align='center'><b>Contact Show</b></td></tr><tr><th>NAME</th><th>EMAIL ID</th><th>SUBJECT</th><th>MESSAGE</th></tr>";

while($row=mysql_fetch_array($result))
{
echo"<tr><td>".$row['name']."</td><td>".$row['email']."</th><th>".$row['subject']."</th><th>".$row['message']."</th></tr>";
}

echo"</table>";
?>
<?php
include("footer.php");
?>

