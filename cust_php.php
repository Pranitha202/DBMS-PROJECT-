<html>
<?php
$cid=$_GET["cid"];
$cname=$_GET["cname"];
$cad=$_GET["caddress"];
$cphone=$_GET["cphone"];
$power=$_GET["power"];
$rating=$_GET["rating"];
$eid=$_GET["e_id"];
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
switch($_REQUEST['button'])
{
case 'submit':
$val1 =mysqli_query($con,"select * from customer where cid='$cid'");
$val2 =mysqli_query($con,"select * from employee where e_id='$eid'");
if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==1))
{
$var=mysqli_query($con,"insert into customer values('$cid','$cname','$cad','$cphone','$power','$rating','$eid')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"15\" color=\"blue\">INSERTED SUCCESSFULY</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/PROJ2/cust_view.php\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";


}
else
{
   if((mysqli_num_rows($val1)>0)and(mysqli_num_rows($val2)==1))
    { echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">CUSTOMER WITH THE GIVEN CUSTOMER ID".$cid."EXISTS</font>";
    echo "</br></br></br>";
    echo "</center>";
   }
    if((mysqli_num_rows($val1)>0)and(mysqli_num_rows($val2)==0))
   {
    echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">CUSTOMER WITH THE GIVEN CUSTOMER ID".$cid."EXISTS AND EMPLOYEE WITH EMPLOYEE ID".$eid."DOES NOT EXISTS</font>";
    echo "</br></br></br>";
    echo "</center>";

    }
    if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==0))
    {
      echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">EMPLOYEE WITH EMPLOYEE ID".$eid."DOES NOT EXISTS</font>";
    echo "</br></br></br>";
    echo "</center>";

    }

echo"<center>";
 echo "<form action=\"http://localhost/PROJ2/c.php\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
break;
case 'back':
include('menu.html');
break;
}
?>
</html>
