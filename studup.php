<html>
<head>
	<title>Feedback Form</title>
  <style type="text/css">

select{width: 15.5em}
</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="jquery/jquery-ui.css">
  <link rel="stylesheet" href="jquery/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: -7, maxDate:0 });
  } );
  </script>
</head>
<body><CENTER>
<div id="frm">
	<table>
<form action="studupdate.php" method="POST">
<p>
	<tr><td>
<label>Name:</label></td>

<td>
	<select name="Name">
		<?php
		$conn = mysqli_connect('127.0.0.1','root','root','Daily_Report_Interns');
		if(!$conn)
		{
			die('Connection failed!'.mysqli_error($conn));
		}


		$sql = mysqli_query($conn, "SELECT name FROM userregdata");

		while ($row = $sql->fetch_assoc()){

		?>
		<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>

		<?php
		// close while loop
		}
		?>
</select>
   </td>
</p>
</tr>
<tr>
<p><td>
<label>Date:</label></td><td>
 <input type="text" id="datepicker" name="dt">
<label>Time:-</label>
<input type="text" value="<?php 
date_default_timezone_set('Asia/Calcutta');
$current_time=date('h:i:s:a');
echo $current_time;?>" name="CTime">



</td></p>
</tr>
<tr>
<p><td>
<label>Message:</label></td>
<td>
<textarea name="message" rows="5" cols="40" id="message"></textarea></td>
</p><tr>
<td>
<p>
	<input type="submit" id="btn" value="Submit"/></td>
	<td>
    <input type="reset" id="btn" value="Reset"/></td>
</p></tr>
</tr>
</form></table></div></CENTER>
<a href="Choose.php"><h2 align = "center">Back to Home Page</h2></a>
</body></html>