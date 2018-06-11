<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");

switch($_REQUEST['button_d'])
{
case 'EMPLOYEE':
include('option1.html');
break;
case 'CUSTOMER':
include('admin_cust.php');
break;
case 'PRODUCT':
include('admin_prod.php');
break;
}
?>
</html>