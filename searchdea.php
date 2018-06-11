<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `dealers` WHERE CONCAT( `did`, `dname`, `daddress`, `dphone`, `email`)LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else
{
   $query="select * from dealers";
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

<form action="http://localhost/PROJ2/searchdea.php" method="POST">
<input type="text" name="valueToSearch" placeholder="type a value to search">
<input type="submit" name="search" value="filter"><br><br>
<table id="t01" width="1000" border="1" cellspacing="1" cellpadding="1">
<tr>
     <th><strong>DEALER ID</strong></th>
       <th><strong>NAME</strong></th> <th><strong>ADDRESS</strong></th>   <th><strong>PHONE</strong></th> 
        <th><strong>EMAIL</strong></th>
      
</tr>
  <?php  while($row=mysqli_fetch_array($search_result)):?>
   <tr>
       <td><?php echo $row['did'];?></td>
       <td><?php echo $row['dname'];?></td>
       <td><?php echo $row['daddress'];?></td>
       <td><?php echo $row['dphone'];?></td>
   
       <td><?php echo $row['email'];?></td>
   
     
       
  </tr>
<?php endwhile;?>



</table>

</br></br>
<a href="empmenu.html">BACK</a>
</br></br>
</html>        
   
     