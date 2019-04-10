<?php


$conn = mysqli_connect('127.0.0.1','root','root','Daily_Report_Interns');
if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}
$name = $_POST['name'];
$date = $_POST['dt'];
$address = $_POST['address'];

$mysql = "INSERT INTO userregdata(name,dt,address) VALUES('$name','$date','$address')";

if(mysqli_query($conn,$mysql))
{
	echo "Registerd Successfully";
}
else
{
	echo mysqli_error($conn);
}
echo '<a href="adminmain.php"><h2 align = "center">Back</h2></a>';
?>






		
 
       