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

<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$qry2="select * from customer";
$view2=mysqli_query($con,$qry2);
echo "<center>";
echo"<h1>CUSTOMER DETAILS</h1>";
echo " ";
echo "<table id=\"t01\" width=\"700\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."ID"."</strong></td>"
."<td><strong>"."NAME"."</strong></td><td><strong>"."ADDRESS"."</strong></td><td><strong>"."PHONE"."</strong></td><td><strong>"."POWER"."</strong></td><td><strong>"."RATING"."</strong></td><td><strong>"."ATTENDED BY"."</strong></td></tr>";

while($row=mysqli_fetch_array($view2))
{
echo "<tr><td>".$row['cid']."</td> <td>".$row['cname']."</td><td>".$row['caddress']."</td><td>".$row['cphone']."</td><td>".$row['power']."</td><td>".$row['rating']."</td><td>".$row['e_id']."</td></tr>";
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