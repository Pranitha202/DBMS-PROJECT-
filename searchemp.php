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
<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `employee` WHERE CONCAT(`e_id`, `e_name`, `e_address`, `dob`, `e_phone`, `designation`, `j_date`, `gender`, `salary`)LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else
{
   $query="select * from employee";
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
<form action="http://localhost/PROJ2/searchemp.php" method="POST">
<input type="text" name="valueToSearch" placeholder="type a value to search">
<input type="submit" name="search" value="SEARCH"><br><br>
<table id="t01" width="1000" border="1" cellspacing="1" cellpadding="1">
<tr>
     <th><strong>EMP_ID</strong></th>
       <th><strong>NAME</strong></th> <th><strong>ADDRESS</strong></th>  <th><strong>DOB</strong></th> <th><strong>PHONE</strong></th> 
         <th><strong>DESIGNATION</strong></th> <th><strong>JOINING DATE</strong></th> <th><strong>GENDER</strong></th>  <th><strong>SALARY</strong></th>
      
</tr>
  <?php  while($row=mysqli_fetch_array($search_result)):?>
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
       
  </tr>
<?php endwhile;?>
</table>

</html>



</br></br></br>

<html>

<a href="admin_menu.html">BACK</a>
</br></br>

</html>        
   
     