<h1 align="center">Your Feedback Is IMPORTANT</h1>

<form method="get" action="" >
<div class="container" align="center">

Your Name<input type="text" name="name"><br>
Email Id<input type="email" name="emailid"><br>
Contact No:<input type="text" name="contactno"><br>
Your Views<br><textarea rows="20" cols="20" name="views">
</textarea ><br>
<input type="submit" name="clickhere" value="click Here">

</div>
</form>
<?php
if(isset($_REQUEST['clickhere']))
{
$name=$_REQUEST['name'];
$emailid=$_REQUEST['emailid'];
$contactno=$_REQUEST['contactno'];
$views=$_REQUEST['views'];
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="insert into feedback values('$name','$emailid','$contactno','$views')";
mysql_query($query) or die(mysql_error());
echo"<h1> Data Inserted </h1>";
}
?>
