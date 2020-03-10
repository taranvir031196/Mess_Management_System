
<?php
session_start();
include("adminheader2.php");

?>

<?php

    $rollno=$_REQUEST['rollno'];
	$name=$_REQUEST['name'];
	$class=$_REQUEST['class'];
	$stream=$_REQUEST['stream'];
	$year=$_REQUEST['year'];
	$emailid=$_REQUEST['emailid'];
	$password=$_REQUEST['password'];
	$contactno=$_REQUEST['contactno'];

mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="update Customer set name='$name',class='$class',stream='$stream',year='$year',emailid='$emailid',password='$password',contactno='$contactno' where rollno='$rollno'";
mysql_query($query) or die(mysql_error());
echo"<h1> Profile Updated </h1>";
?>

<?php
include("footer.php");
?>

