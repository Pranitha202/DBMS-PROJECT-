<html>
<style>
body{
margin:0;
background:url('e1.jpeg');
background-size:cover;
}
table#t01 {
   width: 100%;
    background-color: #D8F0DA;
    border: 1px;
    min-width: 100%;
    position: relative;
    opacity: 0.97;
    background: transparent;
}

</style>
<h1><center>ORDERS DETAILS</center></h1>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");

$qry4="select * from orders";
$view4=mysqli_query($con,$qry4);
echo "<center>";
echo " ";
echo "<table id=\"t01\" width=\"700\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."ORDERNO"."</strong></td> <td><strong>"."CUSTOMER_ID"."</strong></td><td><strong>"."P_CODE"."</strong></td><td><strong>"."ORDER_DATE"."</strong></td><td><strong>"."DUE_DATE"."</strong></td><td><strong>"."AMOUNT"."</strong></td><td><strong>"."PAYMENT"."</strong></td></tr>";
while($row=mysqli_fetch_array($view4))
{
echo "<tr><td>".$row['ono']."</td> <td>".$row['cid']."</td><td>".$row['pcode']."</td><td>".$row['odate']."</td><td>".$row['ddate']."</td><td>".$row['amt']."</td><td>".$row['payment']."</td></tr>";
}
echo "</table>";
echo "</center>";
echo "</br></br></br></br></br></br></br></br></br></br>";
echo"<center>";
echo "<form action=\"http://localhost/PROJ2/empmenu.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
?>
</html>   