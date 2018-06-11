<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
if(isset($_REQUEST["edit"]))
{
   $edit=$_REQUEST["edit"];
   $sql1="select * from dealers WHERE did='$edit'";
  
   $rec1=mysqli_query($con,$sql1);
   $row=mysqli_fetch_array($rec1);
   
} 

if(isset($_REQUEST["update"]))    
{
  $dname=$_REQUEST["dname"];
 
  $daddress=$_REQUEST["daddress"];
  $dphone=$_REQUEST["dphone"];
  $email=$_REQUEST["email"];

  
  $upd="UPDATE dealers set dname='$dname',daddress='$daddress',dphone='$dphone',email='$email' where did='$edit'";
   mysqli_query($con ,$upd);
  header('location:index5.php');
  
}
  
?>
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
<H1>UPDATE DEALER DETAILS  FORM</H1>
<table id="t01" width="300" border="10" cellpadding="2" cellspacing="1">

<form method="post">

<tr><td><label><b>NAME-</b></label></td><td>  <input type="text" name="dname"  value="<?php echo $row['dname']?>"></td></tr>

<tr><td><label><b>ADDRESS</b></label></td><td>  <input type="text" name="daddress"  value="<?php echo $row['daddress']?>"></td></tr>

<tr><td><label><b>PHONE-</b></label></td><td>  <input type="number"  name="dphone"  value="<?php echo $row['dphone']?>" ></td></tr>

<tr><td><label><b>EMAIL-</b></label> </td><td> <input type="text"  name="email"  value="<?php echo $row['email']?>"></td></tr>



<tr><td><input type="submit" name="update" value="update"></tr></td>
</table>
</center>
</form>
<html>
<center>
<form action="http://localhost/PROJ2/index5.php">
<input type="submit"  value="BACK"> 
<center>
</html>