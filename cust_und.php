<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");

$sql1="select * from customer";
$rec1=mysqli_query($con,$sql1);
echo "<table>";


echo "<tr><td>"."ID"."</td>"
."<td>"."NAME"."</td><td>"."ADDRESS"."</td><td>"."PHONE"."</td><td>"."POWER"."</td><td>"."RATING"."</td><td>"."E_ID"."</tr></td>";

while($row=mysqli_fetch_array($rec1))
{
echo"<tr>";
echo "<form action=\"http://localhost/PROJ2/update2.php \"method=post>";
echo"<td><input type=text name=cid value='".$row['cid']."'</td>";
echo"<td><input type=text name=cname value='".$row['cname']."'</td>";
echo"<td><input type=text name=caddress value='".$row['caddress']."'</td>";
echo"<td><input type=text name=cphone value='".$row['cphone']."'</td>";
echo"<td><input type=text name=power value='".$row['power']."'</td>";
echo"<td><input type=text name=rating value='".$row['rating']."'</td>";
echo"<td><input type=text name=e_id value='".$row['e_id']."'</td>";
echo"<td><input type=\"submit\" name=\"button\"  value=\"EDIT\" ></td>";
echo "<td><input type=\"submit\" name=\"button\"  value=\"DELETE\" ></td>";


echo"</form></tr>";
}
echo"</table>";
?>
</html>
