<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if (isset($_POST)){
		echo 'your name '	.$_POST['name']; // output 2489
echo "<br>";

		echo $_POST['password']; // output tom
	}	

?>
	<table style="border: 2px;">
		<th>
			<tr>
				<td>To do List</td>
			</tr>
		</th>
		<tr>
			<td>List</td>
		</tr>
	</table>

</body>
</html>