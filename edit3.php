<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
if(isset($_REQUEST["edit"]))
{
   $edit=$_REQUEST["edit"];
   $sql1="select * from product WHERE pcode='$edit'";
   //echo $sql1;
   $rec1=mysqli_query($con,$sql1);
   $row=mysqli_fetch_array($rec1);
   
} 

if(isset($_REQUEST["update"]))    
{
  $pname=$_REQUEST["pname"];
  $brand=$_REQUEST["brand"];
  $shape=$_REQUEST["shape"];
  $about=$_REQUEST["about"];
  $stock=$_REQUEST["stock"];
  $price=$_REQUEST["price"];
  
  
  $upd="UPDATE product set pname='$pname', brand='$brand', shape='$shape', about='$about', stock='$stock', price='$price' where pcode='$edit'";
  mysqli_query($con ,$upd);
  header('location:index3.php');
  
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
<H1>UPDATE PRODUCT DETAILS  FORM</H1>
<table id="t01" width="300" border="10" cellpadding="2" cellspacing="1">

<tr><td><label><b>PRODUCT NAME</b></td><td> </label><select name="pname">
<option value=""></option>
<option value="FRAMES"
<?php
if($row['pname']=='FRAMES')
{
  echo"selected";
}
?>

>FRAMES</option>
<option value="SUNGLASS"
<?php
if($row['pname']=='SUNGLASS')
{
  echo"selected";
}
?>

>SUNGLASS</option>
<option value="CONTACT LENS"
<?php
if($row['pname']=='CONTACT LENS')
{
  echo"selected";
}
?>
>CONTACT LENS</option>
</select></td></tr>
<tr><td><label><b>BRAND</b></td><td> </label><select name="brand">
<option value=""></option>
<option value="RAYBAN"
<?php
if($row['brand']=='RAYBAN')
{
  echo"selected";
}
?>
>RAYBAN</option>
<option value="VINCENT CHASE"
<?php
if($row['brand']=='VINCENT CHASE')
{
  echo"selected";
}
?>
>VINCENT CHASE</option>
<option value="JOHN JACOBS"
<?php
if($row['brand']=='JOHN JACOBS')
{
  echo"selected";
}
?>
>JOHN JACOBS</option>
<option value="VOGUE"
<?php
if($row['brand']=='VOGUE')
{
  echo"selected";
}
?>
>VOGUE</option>
<option value="SOFLENS"
<?php
if($row['brand']=='SOFLENS')
{
  echo"selected";
}
?>
>SOFLENS</option>
<option value="ACUVE"
<?php
if($row['brand']=='ACUVE')
{
  echo"selected";
}
?>
>ACUVE</option>
<option value="FRESH LOOK"
<?php
if($row['brand']=='FRESH LOOK')
{
  echo"selected";
}
?>
>FRESH LOOK</option>
</select></td></tr> 

<tr><td><label><b>SHAPE(STYLE)</b></td><td> </label><select name="shape">
<option value=""></option>
<option value="CATEYE"
<?php
if($row['shape']=='CATEYE')
{
  echo"selected";
}
?>
>CATEYE</option>
<option value="ROUND"
<?php
if($row['shape']=='ROUND')
{
  echo"selected";
}
?>
>ROUND</option>
<option value="WAYFARER"
<?php
if($row['shape']=='WAYFARER')
{
  echo"selected";
}
?>
>WAYFARER</option>

<option value="AVIATOR"
<?php
if($row['shape']=='AVIATOR')
{
  echo"selected";
}
?>
>AVIATOR</option>
<option value="SPORTS"
<?php
if($row['shape']=='SPORTS')
{
  echo"selected";
}
?>
>SPORTS</option>
<option value="MIRROR"
<?php
if($row['shape']=='MIRROR')
{
  echo"selected";
}
?>
>MIRROR</option>
<option value="-"
<?php
if($row['shape']=='-')
{
  echo"selected";
}
?>
>-</options>
</select></td></tr> 


<tr><td><b>ABOUT-</b>  </td><td> <input type="text" name="about"  value="<?php echo $row['about']?>"></td></tr> 
<tr><td><b>STOCK-</b>  </td><td> <input type="number" name="stock"  value="<?php echo $row['stock']?>"></td></tr> 

<tr><td><b>PRICE-</b></td><td> <input type="number"  name="price"  value="<?php echo $row['price']?>" ></td></tr> 
<tr><td><input type="submit" name="update" value="update"></td></tr> 

</center>
</table>

</form>
<html>
<form action="http://localhost/PROJ2/index3.php">
<input type="submit"  value="BACK"> 
</br></br>
</html>