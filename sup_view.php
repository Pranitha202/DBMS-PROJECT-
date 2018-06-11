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
<h1><center>SUPPLY DETAILS</center></h1>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$qry6="select * from supply";
$view6=mysqli_query($con,$qry6);
echo "<center>";
echo " ";
echo "<table id=\"t01\" width=\"500\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">";
echo "<tr><td>"."DEALERID"."</td><td>"."PRODUCTCODE"."</td><td>"."STOCKSUPPLIED"."</tr></td>";
while($row=mysqli_fetch_array($view6))
{
echo "<tr><td>".$row['did']."</td><td>".$row['pcode']."</td><td>".$row['sstock']."</tr></td>";
}
echo "</table>";
echo "</center>";
echo "</br></br></br></br></br></br></br></br></br></br>";
echo "<center>";

echo "<form action=\"http://localhost/PROJ2/empmenu.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";

?>
</html>  