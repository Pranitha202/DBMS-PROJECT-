<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");


if(isset($_REQUEST['del']))
{ 
  
   $del=$_REQUEST["del"];
  
  $de="delete from product where pcode='$del'";

if(mysqli_query($con,$de))
{
header('location:index3.php');
}

}
echo"<center>";
echo "<form action=\"http://localhost/PROJ2/index3.php\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
?>
</html>
