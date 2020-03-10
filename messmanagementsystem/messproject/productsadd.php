<?php
include("adminheader.php");
?>

<form method="get" action="" align="center">
PRODUCT ID<input type="text" name="productid"><br>
PRODUCT NAME<input type="text" name="productname"><br>
PRODUCT QUANTITY<input type="text" name="productquantity"><br>
PRODUCT PRICE<input type="text" name="productprice"><br>
TOTAL PRICE<input type="text" name="totalprice"><br>
DATE<input type="date" name="date"><br>
<input type="submit" name="action" value="save">
<input type="submit" name="action" value="delete">
<input type="submit" name="action" value="update">
<input type="submit" name="action" value="search">
</form>
<?php
if(isset($_REQUEST['action']))
{
$action=$_REQUEST['action'];
$pid=$_REQUEST['productid'];
$pname=$_REQUEST['productname'];
$pquantity=$_REQUEST['productquantity'];
$pprice=$_REQUEST['productprice'];
$totalprice=$pquantity*$pprice;
$date=$_REQUEST['date'];
if($action=="save")
{
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="insert into product values('$pid','$pname','$pquantity','$pprice','$totalprice','$date')";
mysql_query($query) or die(mysql_error());
echo"record saved";
}
if($action=="delete")
{
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="delete from product where productid='$pid'";
mysql_query($query) or die(mysql_error());
echo"record deleted";

}
if($action=="update")
{
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="update product set productid='$pid',productname='$pname',productquantity='$pquantity',productprice='$pprice',totalprice='$totalprice',date='$date'";
mysql_query($query) or die(mysql_error());
echo"record updated";
}
if($action=="search")
{
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from product where productid='$pid'";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2'><tr><th>PRODUCT ID</th><th>PRODUCT NAME</th><th>PRODUCT QUANTITY</th><th>PRODUCT PRICE</th><th>TOTAL PRICE</th><th>DATE</th></tr>";
while($rows=mysql_fetch_array($result))
{
echo"<tr><td>".$row['productid']."</td><td>".$row['productname']."</td><td>".$row['productquantity']."</td><td>".$row['productprice']."</td><td>".$row['totalprice']."</td><td>".$row['date']."</td></tr>";
}
echo"</table>";
}
}

?>
<?php
include("footer.php");
?>

