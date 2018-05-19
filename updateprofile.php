
<?php
session_start();
include("adminheader.php");

?>

<?php
$con1=$_REQUEST['con'];
$adminname=$_SESSION['adminname'];
$emailid=$_SESSION['emailid'];
$password=$_SESSION['password'];
$contactno=$_SESSION['contactno'];
$address=$_SESSION['address'];
$gender=$_SESSION['gender'];

mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="update  admin set adminname='$adminname, emailid='$emailid',  password='$password', contactno='$contactno',address='$address',gender='$gender' where adminid='$con1'";
mysql_query($query) or die(mysql_error());
echo"<h1> Profile Updated </h1>";
?>

<?php
include("footer.php");
?>

