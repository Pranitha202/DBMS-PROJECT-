<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$sql1="select * from product";
$rec1=mysqli_query($con,$sql1);
echo "<table>";


echo "<tr><td>"."PCODE"."</td>"
."<td>"."PRODUCT"."</td><td>"."BRAND"."</td><td>"."SIZE"."</td><td>"."SHAPE"."</td><td>"."COLOR"."</td><td>"."TYPE"."</td><td>"."ABOUT"."</td><td>"."STOCK"."</td><td>"."PRICE"."</tr></td>";

while($row=mysqli_fetch_array($rec1))
{
echo"<tr>";
echo "<form action=\"http://localhost/PROJ2/update3.php \"method=post>";
echo"<td><input type=text name=pcode value='".$row['pcode']."'</td>";
echo"<td><input type=text name=pname value='".$row['pname']."'</td>";
echo"<td><input type=text name=brand value='".$row['brand']."'</td>";
echo"<td><input type=text name=size value='".$row['size']."'</td>";
echo"<td><input type=text name=shape value='".$row['shape']."'</td>";
echo"<td><input type=text name=color value='".$row['color']."'</td>";
echo"<td><input type=text name=type value='".$row['type']."'</td>";
echo"<td><input type=text name=about value='".$row['about']."'</td>";
echo"<td><input type=text name=stock value='".$row['stock']."'</td>";
echo"<td><input type=text name=price value='".$row['price']."'</td>";


echo"<td><input type=\"submit\" name=\"button\"  value=\"EDIT\" ></td>";
echo "<td><input type=\"submit\" name=\"button\"  value=\"DELETE\" ></td>";

echo"</form></tr>";
}
echo"</table>";
?>
</html>
