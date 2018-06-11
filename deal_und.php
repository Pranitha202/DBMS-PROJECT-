<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$sql1="select * from dealers";
$rec1=mysqli_query($con,$sql1);
echo "<table>";


echo "<tr><td>"."DEALER ID"."</td>"
."<td>"."NAME"."</td><td>"."ADDRESS"."</td><td>"."PHONE"."</td><td>"."EMAIL ID"."</tr></td>";

while($row=mysqli_fetch_array($rec1))
{
echo"<tr>";
echo "<form action=\"http://localhost/PROJ2/update5.php \"method=post>";
echo"<td><input type=text name=did value='".$row['did']."'</td>";
echo"<td><input type=text name=dname value='".$row['dname']."'</td>";
echo"<td><input type=text name=daddress value='".$row['daddress']."'</td>";
echo"<td><input type=text name=dphone value='".$row['dphone']."'</td>";
echo"<td><input type=text name=email value='".$row['email']."'</td>";
echo"<td><input type=\"submit\" name=\"button\"  value=\"EDIT\" ></td>";
echo "<td><input type=\"submit\" name=\"button\"  value=\"DELETE\" ></td>";
echo"</form></tr>";
}
echo"</table>";

?>
<html>