<?php
$adminid=$_REQUEST['adminid'];
$adminname=$_REQUEST['adminname'];
$emailid=$_REQUEST['emailid'];
$password=$_REQUEST['password'];
$contactno=$_REQUEST['contactno'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];

mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="update  admin set adminname='$adminname', emailid='$emailid',  password='$password', contactno='$contactno',address='$address',gender='$gender' where adminid='$adminid'";
mysql_query($query) or die(mysql_error());
echo"<h1> Profile Updated </h1>";
?>