<html>
<style>
body{
margin:0;
background:url('jj.jpg');
background-size:cover;
}
table {
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



$b=$_GET["brand"];
$sh=$_GET["shape"];
$p=$_GET["price"];
$w=$_GET["pname"];
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_oes");
$query="select * from product "  ;

if($w==null||$w=="select")
{
	 $query=$query." where pname LIKE '%' ";
}
else
{
	$query=$query." where pname='".$w."'";
}


if($b==null||$b=="select")
{
	 //$query=$query." and brand LIKE '%' ";
}
else
{
	$query=$query." and brand='".$b."'";
}
//echo $query;

if($sh==null||$sh=="select")
{
	//$query=$query." and shape LIKE '%' ";
}
else
{
	$query=$query." and shape='".$sh."'";
}
//echo $query;

if($p==null||$p=="select")
{
	//$query=$query." and price LIKE '%'   ";

}
else
{
	
   $query=$query." and price<=".$p." ";
}
//echo $query;
echo "<center>";
echo "<table>";
echo "</br></br>";
echo "<tr><td><font size=30\" color=\"black\"><b>PRODUCT LIST</b></font>"."</td></tr></br></br>";
$my=mysqli_query($con,$query."GROUP BY pcode");
echo "<table width=\"900\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\">";

echo "<tr><td><strong>"."PCODE"."</strong></td><td><strong>"."PRODUCT"."</strong></td><td><strong>"."BRAND"."</strong></td><td><strong>"."SHAPE"."</strong></td><td><strong>"."ABOUT"."</strong></td><td><strong>"."STOCK"."</strong></td><td><strong>"."MRP"."</strong></td><td><strong>"."DISCOUNT PRICE"."</strong></td><td><strong>"."IMAGE"."</strong></td></tr>";
?>
<?php while($row=mysqli_fetch_array($my))  :?>

 <tr>
  <td><?php echo $row['pcode'];?></td>
       <td><?php echo $row['pname'];?></td>
       <td><?php echo $row['brand'];?></td>
    
   
       <td><?php echo $row['shape'];?></td>
   
      <td><?php echo $row['about'];?></td>
   
      <td><?php echo $row['stock'];?></td>
   
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['disc_price'];?></td>
      <?php  $p= "$row[0]".".jpg";?>
      <td> <?php echo "<img src=\"$p\"  width=\"100px\" height=\"100px\" >" ;?> </td>
     
       
</tr>
<?php endwhile;?>
<?php
echo "</table>";
echo "</center>";
echo "</br></br></br></br></br></br></br></br></br></br>";



echo "<form action=\"http://localhost/PROJ2/web.php\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
