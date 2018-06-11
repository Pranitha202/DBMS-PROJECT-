<html>
<?php
$pcode=$_GET["pcode"];
$pname=$_GET["pname"];
$brand=$_GET["brand"];
$shape=$_GET["shape"];
$about=$_GET["about"];
$stock=$_GET["stock"];
$price=$_GET["price"];




$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
switch($_REQUEST['button'])
{
case 'submit':
$val1 =mysqli_query($con,"select * from product where pcode='$pcode'");

if(mysqli_num_rows($val1)>0)
{ echo"<center>";
 echo"<font size=\"7\" color=\"red\">ERROR!!</font></br>";
 echo "<font size=\"7\" color=\"blue\">PRODUCT WITH THE GIVEN PRODUCT CODE".$pcode."EXISTS</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/PROJ2/prod.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
else
{
$var=mysqli_query($con,"insert into product values('$pcode','$pname','$brand','$shape','$about','$stock','$price',0)");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"15\" color=\"blue\">INSERTED SUCCESSFULY</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/PROJ2/prod_view.php\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
break;
case 'back':
include('empmenu.html');
break;
}
?>
</html>