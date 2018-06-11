<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
if(isset($_REQUEST["edit"])) 
{
 if(isset($_REQUEST["edit"]))
  
  { 
 
   $edit=$_REQUEST["edit"];
   $edit1=$_REQUEST["edit1"];
   $sql1="select * from supply WHERE did='$edit' and pcode='$edit1' ";
  //echo $sql1;
   $rec1=mysqli_query($con,$sql1);
   $row=mysqli_fetch_array($rec1);
 }  
  
}

if(isset($_REQUEST["update"]))    
{
  
  $sstock=$_REQUEST["sstock"];

  
  $upd="UPDATE supply set sstock='$sstock' where did='$edit' and pcode='$edit1'";
   mysqli_query($con ,$upd);
  header('location:index6.php');
  
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

<form method="post">
<center>
<H1>UPDATE DEALER DETAILS  FORM</H1>
<table id="t01" width="400" border="10" cellpadding="2" cellspacing="1">

<tr><td><label><b>SUPPLIED STOCK-</b></label> </td><td> <input type="number" name="sstock"  value="<?php echo $row['sstock']?>"><tr></tr>


<tr><td><input type="submit" name="update" value="update"></tr></td>
</table>
</center>
</form>
<html>
<center>
<form action="http://localhost/PROJ2/index6.php">
<input type="submit"  value="BACK"> 
</center>
</br></br>
</html>