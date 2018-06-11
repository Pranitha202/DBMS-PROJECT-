<html>
<?php

$Euname=$_GET["Euname"];
$Epsw=$_GET["Epsw"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");

switch($_REQUEST['button'])
{
case 'login':
$val =mysqli_query($con,"select * from login_user where Euname='$Euname' and Epsw='$Epsw'");

if(mysqli_num_rows($val)==1)
{
include('empmenu.html');
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