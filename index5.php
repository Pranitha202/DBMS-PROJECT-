<html>
<h1> <center>DEALER DETAILS</center></h1>
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
$sql1="select * from dealers";
$rec1=mysqli_query($con,$sql1);


echo "<table id=\"t01\" width=\"800\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."DEALER_ID"."</strong></td>"
."<td><strong>"." NAME"."</strong></td><td><strong>"."ADDRESS"."</strong></td><td><strong>"."PHONE"."</strong></td><td><strong>"."EMAIL"."</strong></td><td>"."EDIT"."</td><td>"."DELETE"."</td></tr>";
?>
 <?php while($row=mysqli_fetch_array($rec1)) :?>

 <tr>
  <td><?php echo $row['did'];?></td>
       <td><?php echo $row['dname'];?></td>
       <td><?php echo $row['daddress'];?></td>
       <td><?php echo $row['dphone'];?></td>
   
       <td><?php echo $row['email'];?></td>
   
 
  
      <td><a href="edit5.php?edit=<?php echo $row['did'] ?>">EDIT</a></td>
      <td><a href="update5.php?del=<?php echo $row['did'] ?>">DELETE</a></td>
      
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
  
  
  
  
  