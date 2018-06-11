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
$qry5="select * from dealers";

$view5=mysqli_query($con,$qry5);
echo "<center>";
echo " ";
echo"<h1>DEALER DETAILS</h1>";
echo "<table id=\"t01\" width=\"600\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">";;
echo "<tr><td>"."DEALER ID"."</td> <td>"."NAME"."</td><td>"."ADDRESS"."</td><td>"."PHONE"."</td><td>"."EMAIL ID"."</td></tr>";
while($row=mysqli_fetch_array($view5))
{
echo "<tr><td>".$row['did']."</td><td>".$row['dname']."</td><td>".$row['daddress']."</td><td>".$row['dphone']."</td><td>".$row['email']."</td></tr>";
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