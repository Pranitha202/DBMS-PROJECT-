<html>
<?php

$uname=$_GET["uname"];
$psw=$_GET["psw"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");

switch($_REQUEST['button'])
{
case 'login':
$val =mysqli_query($con,"select * from login_admin where uname='$uname' and psw='$psw'");

if(mysqli_num_rows($val)==1)
{
include('admin_menu.html');
}
else
{
echo "<center>";
echo "<font color=blue size='20'>INVALID USER</font>";
echo "</center>";
}
break;
case 'back':
include('welcome.html');
break;
}
?>
</html>