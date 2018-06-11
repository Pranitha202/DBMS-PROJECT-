<html>
<style>
body{
margin:0;
background:url('jj.jpg');
background-size:cover;
}
table {
   width: 100%;
    background-color: #D8F0DA;
    border: 1px;
    min-width: 100%;
    position: relative;
    opacity: 0.97;
    background: transparent;
}


</style>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");

switch($_REQUEST['but'])
{
case 'LENS':
$qry3="select * from product where pname='CONTACT LENS'";
$view3=mysqli_query($con,$qry3);
echo "<center>";
echo " ";
echo "<table  width=\"900\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";

echo "<tr><td><strong>"."PCODE"."</strong></td><td><strong>"."PRODUCT"."</strong></td><td><strong>"."BRAND"."</strong></td><td><strong>"."SHAPE"."</strong></td><td><strong>"."ABOUT"."</strong></td><td><strong>"."STOCK"."</strong></td><td><strong>"."MRP"."</strong></td><td><strong>"."DISCOUNT PRICE"."</strong></td><td><strong>"."IMAGE"."</strong></td></tr>";
?>
<?php while($row=mysqli_fetch_array($view3))  :?>

 <tr>
  <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['pname'];?></td>
       <td><?php echo $row['brand'];?></td>
    
   
       <td><?php echo $row['shape'];?></td>
   
      <td><?php echo $row['about'];?></td>
   
      <td><?php echo $row['stock'];?></td>
   
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['disc_price'];?></td>
      <?php  $p= "$row[0]".".jpg";?>
      <td> <?php echo "<img src=\"$p\"  width=\"100px\" height=\"100px\" >" ;?> </td>
     
       
</tr>
<?php endwhile;?>
<?php
echo "</table>";
echo "</center>";
echo "</br></br></br></br></br></br></br></br></br></br>";

break;

case 'SUNGLASSES':
$qry3="select * from product where pname='SUNGLASS'";
$view3=mysqli_query($con,$qry3);
echo "<center>";
echo " ";
echo "<table width=\"900\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";

echo "<tr><td><strong>"."PCODE"."</strong></td><td><strong>"."PRODUCT"."</strong></td><td><strong>"."BRAND"."</strong></td><td><strong>"."SHAPE"."</strong></td><td><strong>"."ABOUT"."</strong></td><td><strong>"."STOCK"."</strong></td><td><strong>"."MRP"."</strong></td><td><strong>"."DISCOUNT PRICE"."</strong></td><td><strong>"."IMAGE"."</strong></td></tr>";
?>
<?php while($row=mysqli_fetch_array($view3))  :?>

 <tr>
  <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['pname'];?></td>
       <td><?php echo $row['brand'];?></td>
    
   
       <td><?php echo $row['shape'];?></td>
   
      <td><?php echo $row['about'];?></td>
   
      <td><?php echo $row['stock'];?></td>
   
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['disc_price'];?></td>
      <?php  $p= "$row[0]".".jpg";?>
      <td> <?php echo "<img src=\"$p\"  width=\"100px\" height=\"100px\" >" ;?> </td>
     
       
</tr>
<?php endwhile;?>
<?php
echo "</table>";
echo "</center>";
echo "</br></br></br></br></br></br></br></br></br></br>";
break;
case 'FRAMES':
$qry3="select * from product where pname='FRAMES'";
$view3=mysqli_query($con,$qry3);
echo "<center>";
echo " ";
echo "<table width=\"900\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";

echo "<tr><td><strong>"."PCODE"."</strong></td><td><strong>"."PRODUCT"."</strong></td><td><strong>"."BRAND"."</strong></td><td><strong>"."SHAPE"."</strong></td><td><strong>"."ABOUT"."</strong></td><td><strong>"."STOCK"."</strong></td><td><strong>"."MRP"."</strong></td><td><strong>"."DISCOUNT PRICE"."</strong></td><td><strong>"."IMAGE"."</strong></td></tr>";
?>
<?php while($row=mysqli_fetch_array($view3))  :?>

 <tr>
  <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['pname'];?></td>
       <td><?php echo $row['brand'];?></td>
    
   
       <td><?php echo $row['shape'];?></td>
   
      <td><?php echo $row['about'];?></td>
   
      <td><?php echo $row['stock'];?></td>
   
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['disc_price'];?></td>
      <?php  $p= "$row[0]".".jpg";?>
      <td> <?php echo "<img src=\"$p\"  width=\"100px\" height=\"100px\" >" ;?> </td>
     
       
</tr>
<?php endwhile;?>
<?php
echo "</table>";
echo "</center>";
echo "</br></br></br></br></br></br></br></br></br></br>";
break;
case 'VIEW':
$onum=$_GET['onum'];
$qry4="select * from orders where ono='$onum'";
$view4=mysqli_query($con,$qry4);
echo "<center>";
echo"<h1>ORDER DETAILS</h1>";
echo " ";
echo "<table id=\"t01\" width=\"700\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."ORDERNO"."</strong></td> <td><strong>"."CUSTOMER_ID"."</strong></td><td><strong>"."P_CODE"."</strong></td><td><strong>"."ORDER_DATE"."</strong></td><td><strong>"."DUE_DATE"."</strong></td><td><strong>"."AMOUNT"."</strong></td><td><strong>"."PAYMENT"."</strong></td></tr>";
while($row=mysqli_fetch_array($view4))

{
$c=$row[1];
$p=$row[2];
echo "<tr><td>".$row['ono']."</td> <td>".$row['cid']."</td><td>".$row['pcode']."</td><td>".$row['odate']."</td><td>".$row['ddate']."</td><td>".$row['amt']."</td><td>".$row['payment']."</td></tr>";
}

echo "</table>";
echo "</center>";
$qry2="select * from customer where cid='$c'";
$view2=mysqli_query($con,$qry2);
echo "<center>";
echo"<h1>CUSTOMER DETAILS</h1>";
echo " ";
echo "<table id=\"t01\" width=\"700\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."ID"."</strong></td>"
."<td><strong>"."NAME"."</strong></td><td><strong>"."ADDRESS"."</strong></td><td><strong>"."PHONE"."</strong></td><td><strong>"."POWER"."</strong></td><td><strong>"."RATING"."</strong></td><td><strong>"."ATTENDED BY"."</strong></td></tr>";

while($row=mysqli_fetch_array($view2))
{
echo "<tr><td>".$row['cid']."</td> <td>".$row['cname']."</td><td>".$row['caddress']."</td><td>".$row['cphone']."</td><td>".$row['power']."</td><td>".$row['rating']."</td><td>".$row['e_id']."</td></tr>";
}
echo "</table>";
echo "</center>";
$qry3="select * from product where pcode='$p'";
$view3=mysqli_query($con,$qry3);
echo "<center>";
echo"<h1>PRODUCT DETAILS</h1>";
echo " ";
echo "<table id=\"t01\" width=\"900\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";

echo "<tr><td><strong>"."PCODE"."</strong></td><td><strong>"."PRODUCT"."</strong></td><td><strong>"."BRAND"."</strong></td><td><strong>"."SHAPE"."</strong></td><td><strong>"."ABOUT"."</strong></td><td><strong>"."STOCK"."</strong></td><td><strong>"."MRP"."</strong></td><td><strong>"."DISCOUNT PRICE"."</strong></td><td><strong>"."IMAGE"."</strong></td></tr>";
?>
<?php while($row=mysqli_fetch_array($view3))  :?>

 <tr>
  <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['pname'];?></td>
       <td><?php echo $row['brand'];?></td>
    
   
       <td><?php echo $row['shape'];?></td>
   
      <td><?php echo $row['about'];?></td>
   
      <td><?php echo $row['stock'];?></td>
   
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['disc_price'];?></td>
      <?php  $p= "$row[0]".".jpg";?>
      <td> <?php echo "<img src=\"$p\"  width=\"100px\" height=\"100px\" >" ;?> </td>
     
       
</tr>
<?php endwhile;?>
<?php
echo "</table>";
echo "</center>";

break;
}
echo "<form action=\"http://localhost/PROJ2/find.php\">";
$q=mysqli_query($con,"select distinct(pname) from product");
echo "<center>";
echo "BY PRODUCT:   ";
echo "<select name=\"pname\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($q))
{
$pname=$row['pname'];
echo "<option value=\"$pname\">$pname</option>";
}
echo "</select>";

$q1=mysqli_query($con,"select distinct(brand) from product");
echo "<center>";
echo "BY BRAND:   ";
echo "<select name=\"brand\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($q1))
{
$brand=$row['brand'];
echo "<option value=\"$brand\">$brand</option>";
}
echo "</select>";


$q3=mysqli_query($con,"select distinct(shape) from product");
echo "<center>";
echo "BY SHAPE:   ";
echo "<select name=\"shape\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($q3))
{
$shape=$row['shape'];
echo "<option value=\"$shape\">$shape</option>";
}
echo "</select>";



$q6=mysqli_query($con,"select distinct(price) from product");
echo "<center>";
echo "BY PRICE:   ";
echo "<select name=\"price\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($q6))
{
$price=$row['price'];
echo "<option value=\"$price\">$price</option>";
}
echo "</select>";
echo "</select>";

echo "</br></br>";
echo "</br><input type=\"submit\" name=\"button\"  value=\"search\" style=\"height: 40px; width: 100px\">";
echo "</center>";
echo "</form>";
echo "</br>";
echo "<center>";
echo "<form action=\"http://localhost/PROJ2/web.php\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";








?>
</html>   