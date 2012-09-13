<?php
   function do_i_have_frogs() {
       if (isset($_GET['frogs'])) {
           $frogs = $_GET['frogs'];
           return $frogs != '' && $frogs != 0 && is_numeric($frogs);
       } else {
           return false;
       }
   }

   $get_super = print_r($_GET,true);
   if (do_i_have_frogs()) {
       $frogs = $_GET['frogs'];
       $double_the_frogs = $frogs * 2;
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title>Working With Super Globals</title>
</head>
<body>
   <h1>The $_GET SUPER Global</h1>
   <p>Using print_r($_GET):</p>
   <pre>
       <!--use print_r to display $_GET-->
   </pre>
   <p>Using the output of print_r in a variable:</p>
   <pre>
       <!--echo get super using short_tag-->
   </pre>
   <!-- Make a decision on the number of frogs-->
</body>
</html>
