<html>
<?php
$ono=$_GET["ono"];
$cid=$_GET["cid"];
$pcode=$_GET["pcode"];
$odate=$_GET["odate"];
$ddate=$_GET["ddate"];
$payment=$_GET["payment"];
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
switch($_REQUEST['button'])
{
case 'submit':
$val1 =mysqli_query($con,"select * from orders where ono='$ono'");
$val2 =mysqli_query($con,"select * from product where pcode='$pcode'");
$val3 =mysqli_query($con,"select * from customer where cid='$cid'");
while($row=mysqli_fetch_array($val2))
{
$amt=$row[7];
}


if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==1)and(mysqli_num_rows($val3)==1))

{

   $var=mysqli_query($con,"insert into orders values('$ono','$cid','$pcode','$odate','$ddate','$amt','$payment')");
   echo "</br></br></br></br></br></br></br></br></br>";
   echo "<center>";
   echo "<font size=\"15\" color=\"blue\">INSERTED SUCCESSFULY</font>";
   echo "</br></br></br>";
    echo "<form action=\"http://localhost/PROJ2/orde_view.php\">";
    echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
    echo "</form>";
     echo "</center>";
    
     
}
else
{
     echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">INVALID INPUTS</font>";
    echo "</br></br></br>";
    
    echo "<form action=\"http://localhost/PROJ2/orde.php\">";
    echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
    echo "</center>";
   }

break;
case 'back':
include('menu.html');
break;
}
?>
</html>
