<html>
<?php
$did=$_GET["did"];
$dname=$_GET["dname"];
$daddress=$_GET["daddress"];
$dphone=$_GET["dphone"];
$email=$_GET["email"];
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
switch($_REQUEST['button'])
{
case 'submit':
$val1 =mysqli_query($con,"select * from dealers where did='$did'");
if(mysqli_num_rows($val1)>0)
{ echo"<center>";
 echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
 echo "<font size=\"7\" color=\"blue\">DEALER WITH THE GIVEN DEALER ID".$did."EXISTS</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/PROJ2/deal.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
else
{


  $var=mysqli_query($con,"insert into dealers values('$did','$dname','$daddress','$dphone','$email')");
 
  echo "</br></br></br></br></br></br></br></br></br>";
  echo "<center>";
  echo "<font size=\"15\" color=\"blue\">INSERTED SUCCESSFULY</font>";
  echo "</br></br></br>";
  echo "<form action=\"http://localhost/PROJ2/deal_view.php\">";
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
