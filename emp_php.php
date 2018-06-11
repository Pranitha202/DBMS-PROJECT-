<html>
<?php
$eid=$_GET["e_id"];
$ename=$_GET["e_name"];
$ead=$_GET["e_address"];
$dob=$_GET["dob"];
$ephone=$_GET["e_phone"];
$desig=$_GET["designation"];
$jdate=$_GET["j_date"];
$gen=$_GET["gender"];
$sal=$_GET["salary"];
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
switch($_REQUEST['button'])
{
case 'submit':
$val1 =mysqli_query($con,"select * from employee where e_id='$eid'");
if(mysqli_num_rows($val1)>0)
{ echo"<center>";
 echo"<font size=\"7\" color=\"red\">ERROR!!</font>";
 echo "<font size=\"7\" color=\"blue\">EMPLOYEE WITH THE GIVEN EMPLOYEE ID".$eid."EXISTS</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/PROJ2/emp.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
else
{
$Euname=$ename;
$Epsw=$eid;
echo $Euname;
echo $Epsw;
$var=mysqli_query($con,"insert into employee values('$eid','$ename','$ead','$dob','$ephone','$desig','$jdate','$gen','$sal')");
$var=mysqli_query($con,"insert into login_user values('$Euname','$Epsw')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"15\" color=\"blue\">INSERTED SUCCESSFULY</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/PROJ2/emp_view.php\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
break;
case 'back':
include('emp_php.php');
break;
}
?>
</html>