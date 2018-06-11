<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
switch($_REQUEST['button'])
{
case 'EDIT':
$upd="UPDATE supply set did='$_POST[did]',pcode='$_POST[pcode]',sstock='$_POST[sstock]'
where did='$_POST[did]'";

if(mysqli_query($con,$upd))
{

header("refresh:3;url=sup_und.php");
echo"updated";
}

else
echo"error update";
break;
case 'DELETE':
$del="delete from supply where did='$_POST[did]'";

if(mysqli_query($con,$del))
{

echo"deleted";
}
break;
}
echo"<center>";
echo "<form action=\"http://localhost/PROJ/menu.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
?>
</html>
