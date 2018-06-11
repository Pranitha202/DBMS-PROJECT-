<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `supply` WHERE CONCAT(`did`, `pcode`, `sstock`)LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else
{
   $query="select * from supply";
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
<form action="http://localhost/PROJ2/searchsup.php" method="POST">
<input type="text" name="valueToSearch" placeholder="type a value to search">
<input type="submit" name="search" value="filter"><br><br>
<table id=\"t01\" width="1000" border="1" cellspacing="1" cellpadding="1">
<tr>
     <th><strong>DEALER ID</strong></th>
       <th><strong>PRODUCT CODE</strong></th> <th><strong>STOCK_SUPPLIED</strong></th>
      
</tr>
  <?php  while($row=mysqli_fetch_array($search_result)):?>
   <tr>
       <td><?php echo $row['did'];?></td>
       <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['sstock'];?></td>
      
   
     
       
  </tr>
<?php endwhile;?>



</table>
</html>        
<html>

<a href="empmenu.html">BACK</a>
</br></br>

</html>        
      
        
     