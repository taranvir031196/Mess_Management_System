<?php
include("adminheader.php");
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("messmanagement");
$query="select * from  product";
$result=mysql_query($query) or die(mysql_error());
echo"<table border='2' align='center'><tr><td colspan='7' align='center'><b>PRODUCT SHOW<b></td></tr><tr><th>PRODUCT ID</th><th>PRODUCT NAME</th><th>PRODUCT  QUANTITY</th><th>PRODUCT PRICE</th><th>TOTAL PRICE</th><th>DATE</th></tr>";

while($row=mysql_fetch_array($result))
{
echo"<tr><td>".$row['productid']."</td><td>".$row['productname']."</td><td>".$row['productquantity']."</td><td>".$row['productprice']."</td><td>".$row['totalprice']."</td><td>".$row['date']."</td></tr>";
}

echo"</table>";
?>
<?php
include("footer.php");
?>

