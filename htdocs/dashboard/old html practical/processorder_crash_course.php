<html>
	<head>
		<title>Bob's Auto Parts - Order Results</title>
	</head>
	<body>
		<h1>Bob's Auto Parts</h1>
		<h2>Order Results</h2>
		<?php
			// Create short variable names
			$tireqty = $_POST['tireqty'];
			$oilqty = $_POST['oilqty'];
			$sparkqty = $_POST['sparkqty'];
			$find = $_POST['find'];
			
			$a = 27;
			$b = 10;
			$c = "homely ";
			$d = "industries";
			$e = 4;
			$f = 4;
			$g = 9;
			$h = $g;
			
					
			$home = $c.$d;
			$result = $a%$b;
			echo $result;
			echo $home;
			echo ++$e;
			echo $f++;
			echo $h;
			
			date_default_timezone_set('Australia/Sydney');			
			echo '<p>Order processed at '; // Start printing order
			echo date('H:i, jS F Y');
			echo '</p>';
			
			echo '<p>Your order is as follows: </p>';
			echo htmlspecialchars($tireqty).' tires<br />';
			echo htmlspecialchars($oilqty).' bottles of oil<br />';
			echo htmlspecialchars($sparkqty).' spark plugs<br />';
			echo "$tireqty tires<br />";
		
			$totalqty = 0;
			$totalamount = (float)$totalqty;
			
			define('TIREPRICE', 100);
			define('OILPRICE', 10);
			define('SPARKPRICE', 4);
			
			
			echo TIREPRICE;
			
			$totalqty = 0;
			$totalqty = $tireqty + $oilqty + $sparkqty;
			echo "<p>Items ordered: ".$totalqty."<br />";
			$totalamount = 0.00;
			
			$totalamount = $tireqty * TIREPRICE
						+ $oilqty * OILPRICE
						+ $sparkqty * SPARKPRICE;
			
			echo "Subtotal: $".number_format($totalamount,2)."<br />";
			
			$taxrate = 0.10;			// Local sales tax is 10%
			$totalamount = $totalamount * (1 + $taxrate);
			echo "Total including tax: $".number_format($totalamount,2)."</p>";
			
			echo 'isset($tireqty): '.isset($tireqty).'<br />';
			echo 'isset($nothere): '.isset($nothere).'<br />';
			echo 'empty($tireqty): '.empty($tireqty).'<br />';
			echo 'empty($nothere): '.empty($nothere).'<br />';
			
			if ($totalqty == 0) {
				echo '<p style="color: red">';
				echo 'You did not order anything on the previous page!';
				echo '</p>';
			} else {
				echo htmlspecialchars($tireqty).' tires<br />';
				echo htmlspecialchars($oilqty).' oil<br />';
				echo htmlspecialchars($sparkqty).'spark plugs<br />';
			}
			
			switch($find) {
				case "a" :
					echo "<p>regular customer</p>";
					break;
				case "b" :
					echo "<p>Customer referred by tv advert</p>";
					break;
				case "c" :
					echo "<p>Customer referred by Phone directory</p>";
					break;	
				case "d" :
					echo "<p>Customer referred by word of mouth</p>";
					break;
				default :
					echo "<p>We do not know how this customer found us</p>";
					break;	
			}
			
			
		?>
		
	</body>
</html>