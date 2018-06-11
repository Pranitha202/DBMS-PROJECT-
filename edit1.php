<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
if(isset($_REQUEST["edit"]))
{
   $edit=$_REQUEST["edit"];
   $sql1="select * from employee WHERE e_id='$edit'";
   //echo $sql1;
   $rec1=mysqli_query($con,$sql1);
   $row=mysqli_fetch_array($rec1);
   
} 

if(isset($_REQUEST["update"]))    
{
  $e_name=$_REQUEST["e_name"];
  $e_address=$_REQUEST["e_address"];
  $dob=$_REQUEST["dob"];
  $e_phone=$_REQUEST["e_phone"];
  $designation=$_REQUEST["designation"];
  $j_date=$_REQUEST["j_date"];
  $gender=$_REQUEST["gender"];
  $salary=$_REQUEST["salary"];
  
  $upd="UPDATE employee set e_name='$e_name',e_address='$e_address',dob='$dob',e_phone='$e_phone',designation='$designation',j_date='$j_date',gender='$gender',salary='$salary' where e_id='$edit'";
   mysqli_query($con ,$upd);
  header('location:index1.php');
  
}
  
?>
<html>
<style>
body{
margin:0;
background:url('cn.jpg');
background-size:cover;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
</style>
<body>

<form method="post">
<center>
<H1>UPDATE EMPLOYEE DETAILS<H1>
<table id="t01" width="500" border="10" cellpadding="2" cellspacing="1">

<tr><td><b>EMPLOYEE_NAME-</b></td><td> <input type="text"  name="e_name" value="<?php echo $row['e_name']?>"></td></tr>
<tr><td><b>EMPLOYEE_ADDRESS-</b></td><td>  <input type="text"  name="e_address" value="<?php echo $row['e_address']?>"></td></tr>
<tr><td><b>DATE_OF_BIRTH-</b></td><td>  <input type="date"  name="dob"  value="<?php echo $row['dob']?>">

<tr><td><b>EMPLOYEE_PHONE-</b></td><td>  <input type="number" name="e_phone"  value="<?php echo $row['e_phone']?>"></td></tr>
<tr><td><b>DESIGNATION-</b></td><td>  <input type="text" name="designation"  value="<?php echo $row['designation']?>"></td></tr>
<tr><td><b>JOINING_DATE-</b> </td><td><input type="date"  name="j_date"  value="<?php echo $row['j_date']?>" ></br></td></tr>

<tr>
<td><b>GENDER-</b></td>
<td> <input type="radio" name="gender" value="male"
<?php
if($row['gender']=='male')
  echo"checked";
?>
>MALE<input type="radio" name="gender" value="female"
<?php
if($row['gender']=='female')
  echo"checked";
?>
>FEMALE<input type="radio" name="gender" value="other" 
<?php
if($row['gender']=='female')
  echo"checked";
?>
>OTHERS</td>

<tr>

<tr><td><b>SALARY-</b></td><td> <input type="number" name="salary" value="<?php echo $row['salary']?>"></td></tr>
</br></br>
<tr><td><input type="submit" name="update" value="update"></td></tr>

</center>
</table>

</form>
<html>
<form action="http://localhost/PROJ2/index1.php">
<input type="submit"  value="BACK"> 
</br></br>
</html>