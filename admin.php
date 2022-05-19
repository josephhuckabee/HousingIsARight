<html>
<head>
	<title>PHP and JSON Demo</title>
</head>
<body>
	<h1>Admin</h1>
	<hr>
	<table>
		<tr>
			<th>First</th>
			<th>Last</th>
			<th>Email</th>
      <th>Zip</th>
		</tr>

<?php
	//while in the table, get the json data
	$d = file_get_contents('data.json');
	//convert the data to a php array so we can work with it
	$d = json_decode($d, true);

	//loop through the data to create dynamic html
	foreach($d as $k => $o){
		//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
		echo '<tr>
				<td>'.++$k.'</td>
				<td>'.$o['fn'].'</td>
				<td>'.$o['ln'].'</td>
			</tr>';
	}
?>

	</table>
	<hr>
</body>
</html>