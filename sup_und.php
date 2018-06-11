<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$sql1="select * from supply";
$rec1=mysqli_query($con,$sql1);
echo "<table>";


echo "<tr><td>"."DEALER_ID"."</td>"
."<td>"."PRODUCT_ID"."</td><td>"."STOCK_SUPPLIED"."</tr></td>";

while($row=mysqli_fetch_array($rec1))
{
echo"<tr>";
echo "<form action=\"http://localhost/PROJ2/update6.php \"method=post>";
echo"<td><input type=text name=did value='".$row['did']."'</td>";
echo"<td><input type=text name=pcode value='".$row['pcode']."'</td>";
echo"<td><input type=number name=sstock value='".$row['sstock']."'</td>";
echo"<td><input type=\"submit\" name=\"button\"  value=\"EDIT\" ></td>";
echo "<td><input type=\"submit\" name=\"button\"  value=\"DELETE\" ></td>";

echo"</form></tr>";
}
echo"</table>";
?>
</html>
