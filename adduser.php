<?php
session_start();
$_SESSION['user'];
?>
<html>
<head>
	<title>Add User Form</title>
</head>
<body bgcolor="cyan">
<center>
	<h2>New User Registration</h2></center>
	<center>
<form action="userregdata.php" method="POST"> 
<table>
<tr>
<td>
<label>Name:-</label>
</td>
<td>
<input type="text" name="name">
</td>
</tr>

<tr>
<td>
<label>Date of Joining:-</label>
</td>
<td>
<input type="date" name="dt">
</td>
</tr>
<tr>
<td>
<label>Address:-</label>
</td>
<td>
<input type="text" name="address">
</td>
</tr>
<tr><td><button type="submit" name="submit" value="Submit">Submit</button></td>
<td><button type="reset" name="reset" value="Reset">Reset</button></td>
</tr></table></form>
<?php
		echo '<a href="adminmain.php"><h2 align = "center">Back</h2></a>';
		?>

</center></body></html>

