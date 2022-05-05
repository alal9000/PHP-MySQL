<!DOCTYPE html>

<head>
	<title>Bob's auto parts - Order Results</title>
</head>
<html>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<form action="processorder.php" method="post">
	<table style="border: 0px;">
		<tr style="background: #cccccc;">
			<td style="width: 150px; text-align: center;">Item</td>
			<td style="width: 15px; text-align: center;">Quanity</td>
		</tr>	
		<tr>
			<td>Tires</td>
			<td><input type="text" name="tireqty" size="3" maxlength="3" /></td>
		</tr>
		<tr>
			<td>Oil</td>
			<td><input type="text" name="oilqty" size="3" maxlength="3" /></td>
		</tr>
		<tr>
			<td>Spark plugs</td>
			<td><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
		</tr>
		<tr>
		<td colspan="2" style="text-align: center;"><input type="submit" value="Submit Order" /></td>
		</tr>
	</table>
</form>
<?php echo "<p>Order processed. dammit why </p>" ?>
</body>

</html>




