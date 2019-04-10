<?php
$conn = mysqli_connect('127.0.0.1','root','root','Daily_Report_Interns');
if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}
$name = $_POST['Name'];
$date = $_POST['dt'];
$time= $_POST['CTime'];
$message = $_POST['message'];

$mysql = "INSERT INTO studup(name,dt,ctime,message) VALUES('$name','$date','$time','$message')";

if(mysqli_query($conn,$mysql))
{
	echo "Successfully Stored";
}
else
{
	echo mysqli_error($conn);
}
echo '<a href="choose.php"><h2 align = "center">Back</h2></a>';
?>






		
 
       