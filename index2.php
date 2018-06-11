<html>
<h1> <center>CUSTOMER DETAILS</center></h1>
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
$sql1="select * from customer";
$rec1=mysqli_query($con,$sql1);


echo "<table id=\"t01\" width=\"800\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."ID"."</strong></td>"
."<td><strong>"."NAME"."</strong></td><td><strong>"."ADDRESS"."</strong></td><td><strong>"."PHONE"."</strong></td><td><strong>"."POWER"."</strong></td><td><strong>"."RATING"."</strong></td><td><strong>"."ATTENDED BY"."</strong></td><td>"."EDIT"."</td><td>"."DELETE"."</td></tr>";
?>
 <?php while($row=mysqli_fetch_array($rec1)) :?>

 <tr>
  <td><?php echo $row['cid'];?></td>
       <td><?php echo $row['cname'];?></td>
       <td><?php echo $row['caddress'];?></td>
      
   
       <td><?php echo $row['cphone'];?></td>
   
      <td><?php echo $row['power'];?></td>
   
      <td><?php echo $row['rating'];?></td>
   
      <td><?php echo $row['e_id'];?></td>
   
      
      <td><a href="edit2.php?edit=<?php echo $row['cid'] ?>">EDIT</a></td>
       <td><a href="update2.php?del=<?php echo $row['cid'] ?>">DELETE</a></td>
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
  
  
  
  
  