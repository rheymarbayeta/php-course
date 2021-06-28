<!DOCTYPE html>
<html>
	<head>
		<title>PHP Store</title>
	</head>	
	<body>
		<?php
		$name = "PHP Store";
		$credit = 1000;

		// Using two forward slashes we create comments in php.
		//within the php tag, we can insert values into out HTML.
		echo "<h1>Welcome to ".$name."</h1>";
		echo "<h2> You have $".$credit." in your wallet.</h2>";

			$products['Computer']=750;
			$products['Car']=15000;
			$products['iPhone']=1000;
			$products['Toaster']=75;

			foreach ($products as $key => $value) {
				echo "<p>The ".$key." costs ".$value."</p>";
			}

			echo "<h2>Items you can afford</h2>";

			foreach ($products as $key => $value) {
				if ($value <= $credit) {
						echo "<p>".$key."</p>";
				}
			}

			$amount=800;
			$taxRate=0.0825;
			$addedTax= $amount*$taxRate;  //amount = 800, tax = .0825
				//echo $addedTax;
			round(811.882,2); // should return 811.88
			 
			function tax_calc($amount,$tax){
  				$calculate_tax = $amount*$tax;
  				$amount = round($amount+$calculate_tax,2);
  				return $amount;
  			}
  			echo tax_calc(750,0.223); // When you refresh your page you should the value 917.25 at the bottom of the screen.


		?>
	</body>

</html>