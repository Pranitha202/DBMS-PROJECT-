<html>
<h1> <center>ORDER DETAILS</center></h1>
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
$sql1="select * from orders";
$rec1=mysqli_query($con,$sql1);


echo "<table id=\"t01\" width=\"800\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."ORDER_ID"."</strong></td>"
."<td><strong>"."CUSTOMER ID"."</strong></td><td><strong>"."PRODUCT CODE"."</strong></td><td><strong>"."ORDER DATE"."</strong></td><td><strong>"."DUE DATE"."</strong></td><td><strong>"."AMOUNT"."</strong></td><td><strong>"."PAYMENT"."</strong></td><td>"."EDIT"."</td><td>"."DELETE"."</td></tr>";
?>
 <?php while($row=mysqli_fetch_array($rec1)) :?>

 <tr>
  <td><?php echo $row['ono'];?></td>
       <td><?php echo $row['cid'];?></td>
       <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['odate'];?></td>
   
       <td><?php echo $row['ddate'];?></td>
   
      <td><?php echo $row['amt'];?></td>
   
      <td><?php echo $row['payment'];?></td>
  
      <td><a href="edit4.php?edit=<?php echo $row['ono'] ?>">EDIT</a></td>
       
      <td><a href="update4.php?del=<?php echo $row['ono'] ?>">DELETE</a></td>
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
  
  
  
  
  