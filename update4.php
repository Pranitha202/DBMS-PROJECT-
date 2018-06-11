<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
if(isset($_REQUEST['del']))
{ 
  
   $del=$_REQUEST["del"];
  


$de="delete from orders where ono='$del'";

if(mysqli_query($con,$de))
{

header('location:index4.php');
}

}
echo"<center>";
echo "<form action=\"http://localhost/PROJ2/index4.php\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
?>
</html>
