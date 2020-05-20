<?php 

// functions
	// we can use default value
	function sayHello($name = 'moaz', $time = 'morning'){
		echo "good $time $name";
	}

	//sayHello('ahmed', 'after noon');

	function formatProduct($product){
		//echo "{$product['name']} costs {$product['price']} to buy";
		return "{$product['name']} costs {$product['price']} to buy";
	}
	/* $formatted = formatProduct(['name' => 'gold star', 'price' => '20']);
	echo $formatted; */
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Tutorials </title>
 </head>
 <body>
 
 </body>
 </html>