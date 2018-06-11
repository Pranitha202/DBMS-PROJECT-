<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
if(isset($_REQUEST["edit"]))
{
   $edit=$_REQUEST["edit"];
   $sql1="select * from orders WHERE ono='$edit'";
   //echo $sql1;
   $rec1=mysqli_query($con,$sql1);
   $row=mysqli_fetch_array($rec1);
   
} 

if(isset($_REQUEST["update"]))    
{
  $cid=$_REQUEST["cid"];
  $pcode=$_REQUEST["pcode"];
  $odate=$_REQUEST["odate"];
  $ddate=$_REQUEST["ddate"];
  $amt=$_REQUEST["amt"];
  $payment=$_REQUEST["payment"];
  
  $upd="UPDATE orders set cid='$cid',pcode='$pcode',odate='$odate',ddate='$ddate',amt='$amt',payment='$payment' where ono='$edit'";
   mysqli_query($con ,$upd);
  header('location:index4.php');
  
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
<H1>UPDATE ORDER DETAILS  FORM</H1>
<table id="t01" width="300" border="10" cellpadding="2" cellspacing="1">



<tr><td><label><b>ORDER_DATE-</b></label></td><td>  <input type="date"  name="odate"  value="<?php echo $row['odate']?>" ></tr></td>

<tr><td><label><b>DUE_DATE-</b></label></td><td>  <input type="date"  name="ddate"  value="<?php echo $row['ddate']?>"></tr></td>


<tr><td><label><b>AMOUNT-</b></label></td><td>  <input type="NUMBER" name="amt"  value="<?php echo $row['amt']?>"></tr></td>



<tr><td><b>PAYMENT-</b>
</td><td><input type="radio" name="payment" value="yes"
<?php
if($row['payment']=='yes')
  echo"checked";
?>
>YES<input type="radio" name="payment" value="no"
<?php
if($row['payment']=='no')
  echo"checked";
?>
>NO 
</tr></td>

<tr><td><input type="submit" name="update" value="update"></tr></td>
</table>
</center>
</form>
<html>
<center><form action="http://localhost/PROJ2/index4.php">
<input type="submit"  value="BACK"></center> 
</br></br>
</html>