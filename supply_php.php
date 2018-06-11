<html>
<?php
$did=$_GET["did"];
$pcode=$_GET["pcode"];
$sstock=$_GET["sstock"];
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
switch($_REQUEST['button'])
{
case 'submit':
$val1 =mysqli_query($con,"select * from dealers where did='$did'");
$val2 =mysqli_query($con,"select * from product where pcode='$pcode'");
$val3=mysqli_query($con,"select * from supply where pcode='$pcode' and did='$did'");
if((mysqli_num_rows($val1)==1)and(mysqli_num_rows($val2)==1)and(mysqli_num_rows($val3)==0))
{
$var=mysqli_query($con,"insert into supply values('$did','$pcode','$sstock')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"15\" color=\"blue\">INSERTED SUCCESSFULY</font>";
echo "</br></br></br>";
echo"<center>";
 echo "<form action=\"http://localhost/PROJ2/sup_view.php\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";

}
else
{
   if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==1))
   {
    echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">DEALER WITH THE GIVEN DEALER ID".$did."DOES NOTEXISTS</font>";
    echo "</br></br></br>";
    echo "</center>";
   }
    if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==0))
   {
    echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">DEALER WITH THE GIVEN DEALER ID".$did."DOS NOTEXISTS AND PRODUCT WITH PRODUCT CODE".$pcode."DOES NOT EXISTS</font>";
    echo "</br></br></br>";
    echo "</center>";

    }
    if((mysqli_num_rows($val1)==1)and(mysqli_num_rows($val2)==0))
    {
      echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">PRODUCT WITH PRODUCT CODE ".$pcode." DOES NOT EXISTS</font>";
    echo "</br></br></br>";
    echo "</center>";

    }
   else
  {
  echo"<center>";
    echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
    echo "<font size=\"7\" color=\"blue\">DEALER WITH THE GIVEN DEALER ID".$did."EXISTS AND PRODUCT WITH PRODUCT CODE".$pcode."EXISTS</font>";
    echo "</br></br></br>";
    echo "</center>";
  }

echo"<center>";
 echo "<form action=\"http://localhost/PROJ2/sup.php\">";
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
