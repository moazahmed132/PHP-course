<?php 

// variable scope

	//local
		
		function myFunc(){ 
			$price = 20;
			echo $price;
		}

		//myFunc();
		//echo $price;

		function myFuncTwo($age){
			echo $age;
		}
		

		//myFuncTwo(25);
		//echo $age;

	// global

	$name = 'mario';

	/* function sayHello(){
		global $name; // => will not work without this line
		$name = 'moana'; // => the name will change globally
		echo "hello $name";
	}

	sayHello();
	echo $name; */

	/* function sayBye($name){
		$name = 'wario';
		echo "bye $name" . '<br />';
	}

	sayBye($name); // name => wario
	echo $name;  // name => mario */


	// if we want to change the name in all 

	function sayBye(&$name){
		$name = 'wario';
		echo "bye $name" . '<br />';
	}

	sayBye($name); // name => wario
	echo $name;  // name => wario

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Tutorials </title>
 </head>
 <body>
 
 </body>
 </html>