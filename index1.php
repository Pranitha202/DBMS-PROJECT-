<html>
<h1> <center>EMPLOYEE DETAILS</center></h1>
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
$sql1="select * from employee";
$rec1=mysqli_query($con,$sql1);


echo "<table id=\"t01\" width=\"800\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";
echo "<tr><td><strong>"."ID"."</strong></td>"
."<td><strong>"."NAME"."</strong></td><td><strong>"."ADDRESS"."</strong></td><td><strong>"."DOB"."</strong></td><td><strong>"."PHONE"."</strong></td><td><strong>"."DESIGNATION"."</strong></td><td><strong>"."J_DATE"."</strong></td><td><strong>"."GENDER"."</strong></td><td><strong>"."SALARY"."</strong></td><td>"."EDIT"."</td><td>"."UPDATE"."</td></tr>";
?>
 <?php while($row=mysqli_fetch_array($rec1)) :?>

 <tr>
  <td><?php echo $row['e_id'];?></td>
       <td><?php echo $row['e_name'];?></td>
       <td><?php echo $row['e_address'];?></td>
       <td><?php echo $row['dob'];?></td>
   
       <td><?php echo $row['e_phone'];?></td>
   
      <td><?php echo $row['designation'];?></td>
   
      <td><?php echo $row['j_date'];?></td>
   
      <td><?php echo $row['gender'];?></td>
   
      <td><?php echo $row['salary'];?></td>
      <td><a href="edit1.php?edit=<?php echo $row['e_id'] ?>">EDIT</a></td>
      <td><a href="update1.php?del=<?php echo $row['e_id'] ?>">DELETE</a></td>
      
</tr>
<?php endwhile;?>
</table>

</br></br></br>
<center>
<form action="http://localhost/PROJ2/admin_menu.html">
<input type="submit"  value="BACK">
</center> 
</body>
</html>
  
  
  
  
  