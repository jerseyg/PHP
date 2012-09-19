<?php
   function set_not_blank($key) {
       return isset($_POST[$key]) && $_POST[$key] != '';
   }
   $valid_data = set_not_blank('frogs') && set_not_blank('description');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title>Processing a POSTed Form.</title>
</head>
<body>
  <h1>Looking into the $_POST</h1>
  <pre>

      <?php
      	print_r($_POST); 
      ?>
  </pre>
  
   <?php if($valid_data): ?>
    <h2>Well done! Thanks for filling out our form.</h2>
    <p><strong>Frogs:</strong> <?php echo $_POST['frogs'] ?></p>
    <p><strong>Description:</strong> <?php echo $_POST['description'] ?></p>
    <?php else: ?>
    	<h2>One of the text boxes is empty</h2>
   	<?php endif ?>
   	
</body>
</html>
