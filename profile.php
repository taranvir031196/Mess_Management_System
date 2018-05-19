
<?php
session_start();
include("adminheader.php");

?>

<form method="get" action="">
<center><h2>ENTER USERNAME AND PASSWORD TO SEE YOUR PROFILE</h2>
EMAIL ID<input type="email" name="eamilid"><br>
PASSWORD<input type="password" name="password"><br>
<input type="submit" name="clickhere" value="CLICK HERE"></center>
</form>
/*<?php
session_start();
$con1=$_REQUEST['con'];
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  admin where adminid='$con1'";
mysql_query($query) or die(mysql_error());
echo"<center>";
echo"ADMIN NAME<input type='text' name='adminname'><br>";
echo"EMAIL ID<input type='email' name='emailid'><br>";
echo"PASSWORD<input type='password' name='password'><br>";
echo"CONTACT NO:<input type='text' name='contactno'><br>";
echo"ADDRESS<input type='text' name='address'><br>";
echo"GENDER<input type='text' name='gender'>";
echo"</center>";
$_SESSION['adminname']=$adminname;
$_SESSION['emailid']=$emailid;
$_SESSION['password']=$contactno;
$_SESSION['contactno']=$contactno;
$_SESSION['address']=$address;
?>
<?php
include("footer.php");
?>
