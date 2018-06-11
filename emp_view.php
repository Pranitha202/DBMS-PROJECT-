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
<h1><center>EMPLOYEE DETAILS</center></h1>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");

$qry1="select * from employee";
$view1=mysqli_query($con,$qry1);
echo "</br></br></br>";
echo "<center>";
echo " ";
echo "<table id=\"t01\" width=\"800\" border=\"10\" cellpadding=\"2\" cellspacing=\"1\">";


echo "<tr><td><strong>"."ID"."</strong></td><td><strong>"."NAME"."</strong></td><td><strong>"."ADDRESS"."</strong></td><td><strong>"."DOB"."</strong></td><td><strong>"."PHONE"."</strong></td><td><strong>"."DESIGNATION"."</strong></td><td><strong>"."J_DATE"."</strong></td><td><strong>"."GENDER"."</strong></td><td><strong>"."SALARY"."</strong></td></tr>";
while($row=mysqli_fetch_array($view1))
{
echo "<tr><td>".$row['e_id']."</td> <td>".$row['e_name']."</td><td>".$row['e_address']."</td><td>".$row['dob']."</td><td>".$row['e_phone']."</td><td>".$row['designation']."</td><td>".$row['j_date']."</td><td>".$row['gender']."</td><td>".$row['salary']."</td></tr>";
}
echo "</table>";
echo "</center>";

    
?>

<center>

<form action="http://localhost/PROJ2/admin_menu.html">
</br></br></br>
<input type="submit"  value="BACK"> 
</br></br>
</center>
</html>