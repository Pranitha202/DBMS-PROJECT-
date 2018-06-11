<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `customer` WHERE CONCAT(`cid`, `cname`, `caddress`, `cphone`, `power`, `rating`, `e_id`)LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else
{
   $query="select * from customer";
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
<form action="http://localhost/PROJ2/searchcust.php" method="POST">
<input type="text" name="valueToSearch" placeholder="type a value to search">
<input type="submit" name="search" value="filter"><br><br>
<table id="t01" width="1000" border="1" cellspacing="1" cellpadding="1">
<tr>
     <th><strong>CUSTOMER_ID</strong></th>
       <th><strong>NAME</strong></th> <th><strong>ADDRESS</strong></th>   <th><strong>PHONE</strong></th> 
         <th><strong>POWER</strong></th> <th><strong>RATING</strong></th> <th><strong>EMP_ID</strong></th> 
      
</tr>
  <?php  while($row=mysqli_fetch_array($search_result)):?>
   <tr>
       <td><?php echo $row['cid'];?></td>
       <td><?php echo $row['cname'];?></td>
       <td><?php echo $row['caddress'];?></td>
       <td><?php echo $row['cphone'];?></td>
   
       <td><?php echo $row['power'];?></td>
   
      <td><?php echo $row['rating'];?></td>
   
      <td><?php echo $row['e_id'];?></td>
   
       
  </tr>
<?php endwhile;?>

</table>



</html>   
<html>

<a href="admin_menu.html">BACK</a>
</br></br>

</html>        
   
     