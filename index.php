<?php 

// include and require

include('ninjas.php'); // can written like include 'ninjas.php'
require('ninjas.php'); // can written like require 'ninjas.php'

// the difference between them is the include function will render the rest of the code of the attached file crashed but require will not display any thing if there was a problem


echo 'end of php';
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Tutorials </title>
 </head>
 <body>
	<?php include 'content.php'; ?>
 </body>
 </html>