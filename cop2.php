<html>
<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `product` WHERE CONCAT(`pcode`, `pname`, `brand`,  `shape`, `about`, `stock`, `price`,`disc_price`)LIKE '%".$valueToSearch."%'";
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
<form action="http://localhost/PROJ2/searchprod.php" method="POST">
<input type="text" name="valueToSearch" placeholder="type a value to search">
<input type="submit" name="search" value="filter"><br><br>
<table id= "t01" width="1000" border="1" cellspacing="1" cellpadding="1">
<tr>
     <th><strong>PRODUCT CODE</strong></th>
       <th><strong>NAME</strong></th> <th><strong>BRAND</strong></th>   <th><strong>SHAPE</strong></th> 
          <th><strong>ABOUT</strong></th>  <th><strong>STOCK</strong></th><th><strong>PRICE</strong><th><strong>DISCOUNT PRICE(15%)</strong></th><th><strong>IMAGE</strong></th>
      
</tr>
  <?php  while($row=mysqli_fetch_array($search_result)):?>
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



</table>
</html>        
<html>

<a href="empmenu.html">BACK</a>
</br></br>

</html>        
      
     