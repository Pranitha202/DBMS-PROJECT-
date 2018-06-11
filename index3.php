<html>
<h1> <center>PRODUCT DETAILS</center></h1>
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
<body>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$sql1="select * from product";
$rec1=mysqli_query($con,$sql1);


echo "<table id=\"t01\" width=\"800\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."PRODUCT CODE"."</strong></td>"
."<td><strong>"."PRODUCT NAME"."</strong></td><td><strong>"."BRAND"."</strong></td><td><strong>"."SHAPE"."</strong></td><td><strong>"."ABOUT"."</strong></td><td><strong>"."STOCK"."</strong></td><td><strong>"."PRICE"."</strong></td><td><strong>"."DISCOUNT PRICE(15%)"."</strong></td><td>"."EDIT"."</td><td>"."DELETE"."</td></tr>";
?>
 <?php while($row=mysqli_fetch_array($rec1)) :?>

 <tr>
  <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['pname'];?></td>
       <td><?php echo $row['brand'];?></td>
      
   
       <td><?php echo $row['shape'];?></td>
   
      <td><?php echo $row['about'];?></td>
   
      <td><?php echo $row['stock'];?></td>
   
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['disc_price'];?></td>
   
      
      <td><a href="edit3.php?edit=<?php echo $row['pcode'] ?>">EDIT</a></td>
       <td><a href="update3.php?del=<?php echo $row['pcode'] ?>">DELETE</a></td>
</tr>
<?php endwhile;?>
</table>

</br></br></br>
<center>
<form action="http://localhost/PROJ2/empmenu.html">
<input type="submit"  value="BACK">
</center> 
</body>
</html>
  
  
  
  
  