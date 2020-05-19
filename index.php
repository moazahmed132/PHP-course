<?php 
 
// indexed arrays

		// indexed arrays of strings 
		$peopleOne = ['moaz', 'nada', 'eman'];
		//echo $peopleOne[1];

		// indexed arrays of strings in another way
		$peopleTwo = array('khalaf', 'shehata');
		//echo $peopleTwo[0];

		// array of numbers and how to print it
		$ages = [20, 30, 40, 50];
		//print_r($ages);

		// over write an element of array 
		$ages[1] = 35;
		//print_r($ages);

		// add element to the end of the array 
		$ages[] = 60;
		//print_r($ages);

		// add element to the end of the array in another way 
		array_push($ages, 70);
		//print_r($ages);

		// count the array elements
		//echo count($ages);

		// merge arrays

		$peopleMerged = array_merge($peopleOne, $peopleTwo);
		//print_r($peopleMerged);

// associative arrays (key & value pairs)

		//create an associative array
		$ninjasOne = ['moaz' => 'black', 'nada' => 'orange', 'khaled' => 'brown' ];
		//print_r($ninjasOne);

		//create an associative array in another way
		$ninjasTwo = array('khalaf' => 'red', 'shehata' => 'blue');
		//print_r($ninjasTwo);

		// over write an element
		$ninjasTwo['khalaf'] = 'pink' ;
		//print_r($ninjasTwo);

		// count the associative array elements
		//echo count($ninjasTwo)

		// merge two associative arrays 
		$ninjasMerged = array_merge($ninjasOne, $ninjasTwo);
		//print_r($ninjasMerged);


// multi-dimensional arrays
		// create multi-dimensional indexed arrays
		/* $blogs = [
			['mario party', 'mario', 'lorem', 30],
			['nada party', 'nada', 'lorem', 25],
			['saleh party', 'saleh', 'lorem', 25]
		];
		
		print_r($blogs[1][0]); */

		// create multi-dimensional associative arrays
		 $blogs = [
			['title' => 'mario party', 'author' => 'mario','content' =>  'lorem','likes' => 30],
			['title' => 'nada party',  'author' => 'nada', 'content' => 'lorem', 'likes' =>25],
			['title' => 'saleh party', 'author' => 'saleh','content' =>  'lorem','likes' => 25]
		];
		//echo $blogs[2] ['likes']
	
		// add new array
		$blogs[] = ['title' => 'moaz party', 'author' => 'moaz','content' =>  'lorem','likes' => 35];
		//print_r($blogs);

		// remove an array 
		//print_r(array_pop($blogs));

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Tutorials </title>
 </head>
 <body>

 </body>
 </html>