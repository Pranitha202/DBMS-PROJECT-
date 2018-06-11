<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `orders` WHERE CONCAT(`ono`, `cid`, `pcode`, `odate`, `ddate`, `amt`, `payment`)LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else
{
   $query="select * from orders";
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
<body></body>
<form action="http://localhost/PROJ2/searchorde.php" method="POST">
<input type="text" name="valueToSearch" placeholder="type a value to search">
<input type="submit" name="search" value="filter"><br><br>
<table id="t01" width="1000" border="1" cellspacing="1" cellpadding="1">
<tr>
     <th><strong>ORDER NO</strong></th>
       <th><strong>CUSTOMER ID</strong></th> <th><strong>PRODUCT CODE</strong></th>   <th><strong>ORDER DATE</strong></th> 
         <th><strong>DUE DATE</strong></th> <th><strong>AMOUNT</strong></th> <th><strong>PAYMENT</strong></th> 
      
</tr>
  <?php  while($row=mysqli_fetch_array($search_result)):?>
   <tr>
       <td><?php echo $row['ono'];?></td>
       <td><?php echo $row['cid'];?></td>
       <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['odate'];?></td>
   
       <td><?php echo $row['ddate'];?></td>
   
      <td><?php echo $row['amt'];?></td>
   
      <td><?php echo $row['payment'];?></td>
   
       
  </tr>
<?php endwhile;?>



</table>
<a href="empmenu.html">BACK</a>
</br></br>
</html>        
   
     