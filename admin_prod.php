<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `product` WHERE CONCAT(`pcode`, `pname`, `brand`, `size`, `shape`, `color`, `type`, `about`, `stock`, `price`)LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else
{
   $query="select * from product";
   $search_result=filterTable($query);
   
}
function filterTable($query)
{
  $con = mysqli_connect("localhost:3306","root","");
  mysqli_select_db($con,"project_oes");
  $filter_Result=mysqli_query($con,$query);
  return $filter_Result;
   

}
?>
<html>
<body></body>
<center>
CUSTOMER DETAILS</br></br>
<form action="http://localhost/PROJ2/admin_prod.php" method="POST">
<input type="text" name="valueToSearch" placeholder="type a value to search">
<input type="submit" name="search" value="filter"><br><br>
<table width="1000" border="1" cellspacing="1" cellpadding="1">
<tr>
     <th>PCODE</th>
     <th>PNAME</th>
     
     <th>BRAND</th>
     <th>SIZE</th>
     <th>SHAPE</th>
     <th>COLOR</th>
     <th>TYPE</th>
     <th>ABOUT</th>
     <th>STOCK</th>
     <th>PRICE</th> 
</tr>
  <?php  while($row=mysqli_fetch_array($search_result)):?>
   <tr>
       <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['pname'];?></td>
       <td><?php echo $row['brand'];?></td>
       <td><?php echo $row['size'];?></td>
   
       <td><?php echo $row['shape'];?></td>
   
      <td><?php echo $row['color'];?></td>
   
      <td><?php echo $row['type'];?></td>
   
      <td><?php echo $row['about'];?></td>
   
      <td><?php echo $row['stock'];?></td>
      
      <td><?php echo $row['price'];?></td>
   
      
   
  </tr>
<?php endwhile;?>



</table>
</html>        
   
     