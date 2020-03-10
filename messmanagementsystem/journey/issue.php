<?php
include("adminheader.php");
?>

<form method="get" action="" align="center">
<center>
PRODUCT ID<input type="text" name="productid"><br>
PRODUCT NAME<input type="text" name="productname"><br>
PRODUCT QUANTITY<input type="text" name="productquantity"><br>
PRODUCT PRICE<input type="text" name="productprice"><br>
DATE<input type="date" name="date"><br>
<input type="submit" name="action" value="save">
</center>
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
$query="select * from product where productid='$pid'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);
$productquantity1=$row['productquantity'];
echo "The".$row['productname']."is present in stock is".$productquantity1;
if($pquantity>$productquantity1)
{
echo $row['productname']."does not exist in the  stock";	
}
else
{
	$newquantity=$productquantity1-$pquantity;
	$newtotalprice=$newquantity*$pprice;
	$query="update product set  productname='$pname' , productquantity='$newquantity' , productprice='$pprice' ,totalprice='$newtotalprice' ,date='$date' where productid='$pid'";
	$result=mysql_query($query) or die(mysql_error());
	$newtotalprice1=$pquantity*$pprice;
	$query1="insert into issue values('$pid','$pname','$pquantity','$pprice','$newtotalprice1','$date')";
	$result1=mysql_query($query1) or die(mysql_error());
	echo"<br>";
	echo"data  updated";
	
	
	
}

}
}

?>
<?php
include("footer.php");
?>

