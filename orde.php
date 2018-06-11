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

<form action="http://localhost/PROJ2/orde_php.php">
<center>
<H1>ORDERS DETAILS FORM</H1><hr>


<table id="t01" width="500" border="10" cellpadding="2" cellspacing="1">
<tr><td><label><b>ORDER NO-</b></label></td><td> <input type="text" name="ono" ></td></tr>

<tr><td><label><b>CUST_ID-</b></label></td><td>
<select name="cid">
<option value=""></option>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$q=mysqli_query($con,"select * from customer");
while($row=mysqli_fetch_array($q))
{
$cid=$row[0];
echo "<option value=\"$cid\">$cid</option>";
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

<tr><td><label><b>ORDER_DATE-</b></label></td><td>  <input type="date"  name="odate" ></td></tr>

<tr><td><label><b>DUE_DATE-</b></label></td><td>  <input type="date"  name="ddate"></td></tr>




<tr><td><label><b>PAYMENT-</b></label></td><td><input type="radio" name="payment" value="yes">yes
                                   
                                   <input type="radio" name="payment" value="no">no</td></tr>
<tr><td><input type="submit" name="button" value="submit"></td></tr>

</center>
</table>
</form>
</body>

<center>
<form action="http://localhost/PROJ2/empmenu.html">
<input type="submit" name="button" value="back">
</center>
</html>








