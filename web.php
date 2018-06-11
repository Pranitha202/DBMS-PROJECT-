<html>
<head>
<style>
body{
margin:0;
background:url('wo.jpg');
background-size:cover;
}
</style>
<body>

<form action="http://localhost/PROJ2/website.php">

<h1> <center> <marquee direction = "right"> WELCOME </marquee></center></h1>
<center>
<table cellspacing="20">
<tr><td><img src="cn3.jpg" width="200px" height="200px"></td> <td><img src="p001.jpg" width="200px" height="200px">
</td><td><img src="cn4.jpg" width="200px" height="200px"></td></tr>
<tr>
<td><input type="submit" name="but" value="LENS" style="height: 40px; width: 100px"> </td>
<td><input type="submit" name="but" value="SUNGLASSES" style="height: 40px; width: 100px"> </td>
<td><input type="submit" name="but" value="FRAMES" style="height: 40px; width: 100px"></td>
</tr>

</table>
</br></br>


<h2> <b> VIEW ORDER DETAILS </b></marquee></center></h2>
<center><font size="5" face="verdana" color="black"> ORDER NO::</font>
 
<select name="onum">

<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$q=mysqli_query($con,"select * from orders");
while($row=mysqli_fetch_array($q))
{
$o=$row[0];
echo "<option value=\"$o\">$o</option>";
}
?>
</select>
</td></tr>
<input type="submit" name="but" value="VIEW">

<tr><td>
</center>
</table>
</form>
</body>
<form>
<center>
</br></br>

<a href="welcome.html">BACK</a>

</center>

</html>