<?php
include("adminheader.php");
?>

<h2 align="center">CUSTOMER DETAILS</h2>
<form method="get" action="" >
<center>
ROLL NO<input type="text" name="rollno"><br>
NAME<input type="email" name="name"><br>
PASSWORD<input type="password" name="password"><br>
CLASS:<input type="checkbox" name="class" value="btech">B.Tech<br>
<input type="checkbox" name="class" value="mtech">M.Tech<br>
<input type="checkbox" name="class" value="bca">B.C.A.<br>
<input type="checkbox" name="class" value="mba">M.B.A.<br>
<input type="checkbox" name="class" value="mca">M.C.A.<br>
STREAM<select name="stream">
<option value="cse">CSE</option>
<option value="civil">CIVIL</option>
<option value="mechanical">MECHANICAL</option>
<option value="electrical">ELECTRICAL</option>
<option value="electronics">ELECTRONICS</option>
</select><br>
YEAR<select name="year">
<option value="firstyear">First Year</option>
<option value="secondyear">Second Year</option>
<option value="thirdyear">Third Year</option>
<option value="finalyear">Final Year</option>
</select><br>
EMAIL ID<input type="text" name="emailid"><br>
CONTACT NO<input type="text" name="contactno"><br>
<input type="submit" name="action" value="save">  OR 
<input type="submit" name="reset" value="clear">
</center>
</form>

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
$query="insert into customer values('$rollno','$name','$password','$class','$stream','$year','emailid','contactno')";
mysql_query($query) or die(mysql_error());
echo"<h1> Data Inserted </h1>";
}
?>
<?php
include("footer.php");
?>

