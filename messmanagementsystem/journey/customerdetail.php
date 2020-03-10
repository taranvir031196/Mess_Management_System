
<html>
<head>
<title>Mess Management  System User Panel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

</script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</body>
<div class="jumbotron" style="background-color:#32bdbd; color:black;"><h1 align="center">Mess Management System User Panel</h1></div>

<h2 align="center">CUSTOMER DETAILS</h2>
<table border="2" align="center">
<form method="get" action="" >
<center>
<tr>
<th>
ROLL NO</th><th><input type="text" name="rollno"></th></tr>
<tr><th>
NAME</th><th><input type="text" name="name"></th></tr>
<tr><th>
PASSWORD</th><th><input type="password" name="password"></th></tr>
<tr><th>
CLASS:</th><th><input type="checkbox" name="class" value="btech">B.Tech
<input type="checkbox" name="class" value="mtech">M.Tech<br>
<input type="checkbox" name="class" value="bca">B.C.A.<br>
<input type="checkbox" name="class" value="mba">M.B.A.<br>
<input type="checkbox" name="class" value="mca">M.C.A.<br></th>
</tr>
<th>
STREAM</th><th><select name="stream">
<option value="cse">CSE</option>
<option value="civil">CIVIL</option>
<option value="mechanical">MECHANICAL</option>
<option value="electrical">ELECTRICAL</option>
<option value="electronics">ELECTRONICS</option>
</select></th></tr>
<tr><th>
YEAR</th><th><select name="year">
<option value="firstyear">First Year</option>
<option value="secondyear">Second Year</option>
<option value="thirdyear">Third Year</option>
<option value="finalyear">Final Year</option>
</select></th>
</tr>
<tr><th>
EMAIL ID</th><th><input type="text" name="emailid"></th></tr>
<tr><th>CONTACT NO</th><th><input type="text" name="contactno"></th></tr>
<tr><th>
<input type="submit" name="action" value="save"> </th><th>
<input type="submit" name="reset" value="clear"></th></tr>
</center>
</form>
</table>
<?php
if (isset($_REQUEST['action']))
{
$action=$_REQUEST['action'];
$rollno=$_REQUEST['rollno'];
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$class=$_REQUEST['class'];
$stream=$_REQUEST['stream'];
$year=$_REQUEST['year'];
$emailid=$_REQUEST['emailid'];
$contactno=$_REQUEST['contactno'];

mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="insert into customer values('$rollno','$name','$password','$class','$stream','$year','$emailid','$contactno')";
mysql_query($query) or die(mysql_error());
echo"<h1> Data Inserted </h1>";
header("Location:customerlogin.php");
}
?>
<?php
include("footer.php");
?>

</body>
</html>