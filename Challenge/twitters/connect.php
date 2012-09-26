<?php
     //define our database connection parameters using constants
   define('DB_HOST','localhost');
   define('DB_USER','jerseyg');
   define('DB_PASS','123456789');
   define('DB_NAME','serverside');
   
   //Create a MySQL resource object called $db
   $db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   
 ?>
 