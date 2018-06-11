<html>
<style>
body{
margin:0;
background:url('e1.jpeg');
background-size:cover;
}
table#t01 {
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
$qry3="select * from product";
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
echo "</br></br></br></br></br></br></br></br></br></br>";
echo"<center>";
echo "<form action=\"http://localhost/PROJ2/empmenu.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
?>
</html>   