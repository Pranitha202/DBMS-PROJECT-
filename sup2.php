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
<body >

<form action="http://localhost/PROJ2/supply_php.php">
<center>
<H1>SUPPLY</H1><hr>


<table id="t01" width="300" border="10" cellpadding="2" cellspacing="1">
<tr><td><label><b>DEALER ID</b></label></td><td> 
<select name="did">
<option value=""></option>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$q=mysqli_query($con,"select * from dealers");
while($row=mysqli_fetch_array($q))
{
$did=$row[0];
echo "<option value=\"$did\">$did</option>";
}
?>
</select>
</td></tr>
<tr><td><label><b>PRODUTCT_CODE</b></label></td><td>
<select name="pcode">
<option value=""></option>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$q=mysqli_query($con,"select * from product");
while($row=mysqli_fetch_array($q))
{
$pcode=$row[0];
echo "<option value=\"$pcode\">$pcode</option>";
}
?>
</select>
</td></tr>
<tr><td><label><b>STOCK_SUPPLIED</b></label></td><td>
<input type="number" name="sstock" min="1" max="150"></td></tr>
<tr><td><input type="submit" name="button" value="submit">
</table>
</center>
</form>
<center>
<form action="http://localhost/PROJ2/empmenu.html">
<input type="submit" name="button" value="back">
</center>
</html>