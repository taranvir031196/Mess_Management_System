<?php
mysql_connect("localhost","thegyank_myuser","admin");
mysql_select_db("thegyank_monankchopra");
$query="select * from student";
$result=mysql_query($query)or die(mysql_error());
echo "<table border='2'><tr><th>rollno</th><th>Name</th><th>Age</th></tr>";
while($row=mysql_fetch_array($result))
{

echo "<tr><th>".$row['rollno']."</th><th>".$row['name']."</th><th>".$row['age']."</th><tr>";

}

echo "</table>";
?>