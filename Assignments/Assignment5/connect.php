<?php
     //define our database connection parameters using constants
   define('DB_HOST','localhost');
   define('DB_USER','serveruser');
   define('DB_PASS','gorgonzola7!');
   define('DB_NAME','serverside');
   
   //Create a MySQL resource object called $db
   $db = new PDO('mysql:host=localhost;dbname=serverside', 'serveruser', 'gorgonzola7!');
   
 ?>
 