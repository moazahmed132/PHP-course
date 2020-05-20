<?php 

// conditional-statement

	/*  $price = 22 ; 

	if ($price > 30) {
		echo 'more than 30';
	}elseif($price > 20 && $price < 30){
		echo 'more than 20 and less than 30';
	}else{
		echo 'less than 20 ';
	}
	echo '<br />'; */

$products = [
	['name' => 'shiny star', 'price' => 20],
	['name' => 'green shell', 'price' => 10],
	['name' => 'red shell', 'price' => 15],
	['name' => 'gold coin', 'price' => 5],
	['name' => 'lightning bolt', 'price' => 40],
	['name' => 'banana skin', 'price' => 2]
]; 

/* foreach($products as $product){
	if($product['price'] > 20 || $product['price'] < 10 ){
		print_r($product);
		print_r('<br />');
	}
} */


// continue & break

	foreach($products as $product){
		if($product['name'] === 'red shell'){
		break;
		}
		if($product['price'] === 10){
			continue;
		}
		echo $product['name'] . '<br />';
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Tutorials </title>
 </head>
 <body>
 <!-- <div>
	 <ul>
			<?php  foreach($products as $product) {?>
				<?php if($product['price'] > 15){ ?>
					<li><?php echo $product['name']; ?></li>
				<?php } ?>
			<?php  } ?>
	 </ul>
 </div> -->
	
 </body>
 </html>