<html>

<style>
body{
margin:0;
background:url('cn.jpg');
background-size:cover;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
</style>
<body>

<form action="http://localhost/PROJ2/cust_php.php">
<center>
<H1>CUSTOMER DETAILS  FORM</H1>
<table id="t01" width="300" border="10" cellpadding="2" cellspacing="1">

<tr><td><label><b>ID-</b></label></td><td><input type="text" name="cid" ></td></tr>
<tr><td><label><b>NAME-</b></label> </td><td> <input type="text" name="cname" ></td></tr>
<tr><td><label><b>ADDRESS-</b></label> </td><td> <input type="text" name="caddress" ></td></tr>
<tr><td><label><b>PHONE-</b></label></td><td>  <input type="number" name="cphone" ></td></tr>
<tr><td><label><b>POWER</b></label> </td><td> <input type="text" name="power" ></td></tr>
<tr><td><label><b>RATING</b></label></td><td> <select name="rating">

<option value="POOR(1/5)">POOR(1/5)</option>
<option value="AVERAGE(2/5)">AVERAGE(2/5)</option>
<option value="GOOD(3/5)">GOOD(3/5)</option>
<option value="VERY GOOD(4/5)">VERY GOOD(4/5)</option>
<option value="EXCELLENT(5/5)">EXCELLENT(5/5)</option>
</select> </td></tr>

<tr><td><b>EMP_ID</b></td><td> 
<select name="e_id">
<option value=""></option>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$q=mysqli_query($con,"select * from employee");
while($row=mysqli_fetch_array($q))
{
$e_id=$row[0];
echo "<option value=\"$e_id\">$e_id</option>";
}
?>
</select>
</td></tr>
<tr><td><input type="submit" name="button" value="submit"></td></tr>
</table>


</center>
</form>
</body>
<form action="http://localhost/PROJ2/empmenu.html">
<center>
<input type="submit"  value="back">
</center>
</html>