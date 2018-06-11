<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$sql1="select * from orders";
$rec1=mysqli_query($con,$sql1);
echo "<table>";


echo "<tr><td>"."ORDER_NO"."</td>"
."<td>"."CUSTOMER_ID"."</td><td>"."PRODUCT_CODE"."</td><td>"."ORDER_DATE"."</td><td>"."DUE_DATE"."</td><td>"."AMOUNT"."</td><td>"."PAYMENT"."</tr></td>";

while($row=mysqli_fetch_array($rec1))
{
echo"<tr>";
echo "<form action=\"http://localhost/PROJ2/update4.php \"method=post>";
echo"<td><input type=text name=ono value='".$row['ono']."'</td>";
echo"<td><input type=text name=cid value='".$row['cid']."'</td>";
echo"<td><input type=text name=pcode value='".$row['pcode']."'</td>";
echo"<td><input type=text name=odate value='".$row['odate']."'</td>";
echo"<td><input type=text name=ddate value='".$row['ddate']."'</td>";
echo"<td><input type=text name=amt value='".$row['amt']."'</td>";
echo"<td><input type=text name=payment value='".$row['payment']."'</td>";
echo"<td><input type=\"submit\" name=\"button\"  value=\"EDIT\" ></td>";
echo "<td><input type=\"submit\" name=\"button\"  value=\"DELETE\" ></td>";

echo"</form></tr>";
}
echo"</table>";
?>
</html>
