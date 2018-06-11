<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
if(isset($_REQUEST["edit"]))
{
   $edit=$_REQUEST["edit"];
   $sql1="select * from customer WHERE cid='$edit'";
   //echo $sql1;
   $rec1=mysqli_query($con,$sql1);
   $row=mysqli_fetch_array($rec1);
   
} 

if(isset($_REQUEST["update"]))    
{
  $cname=$_REQUEST["cname"];
  $caddress=$_REQUEST["caddress"];
 
  $cphone=$_REQUEST["cphone"];
  $power=$_REQUEST["power"];
  $rating=$_REQUEST["rating"];
  $e_id=$_REQUEST["e_id"];
  
  
  $upd="UPDATE customer set cname='$cname',caddress='$caddress',cphone='$cphone',power='$power',rating='$rating',e_id='$e_id' where cid='$edit'";
  mysqli_query($con ,$upd);
  header('location:index2.php');
  
}
  
?>
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
<form method="post">
<center>
<H1>UPDATE CUSTOMER DETAILS  FORM</H1>
<table id="t01" width="300" border="10" cellpadding="2" cellspacing="1">

<tr><td><b>CUSTOMER_NAME-</b></td><td> <input type="text"  name="cname" value="<?php echo $row['cname']?>"></td></tr>
<tr><td><b>ADDRESS-</b></td><td>  <input type="text"  name="caddress" value="<?php echo $row['caddress']?>"></td></tr>


<tr><td><b>PHONE NUMBER-</b> </td><td> <input type="number" name="cphone"  value="<?php echo $row['cphone']?>"></td></tr>
<tr><td><b>POWER-</b> </td><td> <input type="text" name="power"  value="<?php echo $row['power']?>"></td></tr>
<tr><td><label><b>RATING</b></label></td><td> <select name="rating" >
<option value="">---select an option-----</option>
<option value="POOR(1/5)" 
<?php
if($row['rating']=='POOR(1/5)')
{
  echo"selected";
}
?>
>POOR(1/5)</option>
<option value="AVERAGE(2/5)"
<?php
if($row['rating']=='AVERAGE(2/5)')
{
  echo"selected";
}
?>
>AVERAGE(2/5)</option>
<option value="GOOD(3/5)"
<?php
if($row['rating']=='GOOD(3/5)')
{
  echo"selected";
}
?>
>GOOD(3/5)</option>
<option value="VERY GOOD(4/5)"
<?php
if($row['rating']=='VERY GOOD(1/5)')
{
  echo"selected";
}
?>
>VERY GOOD(4/5)</option>
<option value="EXCELLENT(5/5)"
<?php
if($row['rating']=='EXCELLENT(1/5)')
{
  echo"selected";
}
?>
>EXCELLENT(5/5)</option>
</select></td></tr>



<tr><td><input type="submit" name="update" value="update"></td></tr>
</table>
</center>
</body>

</form>
<html>
<center>
<form action="http://localhost/PROJ2/index2.php">
<input type="submit"  value="BACK"> 
</br></br>
</center>
</html>