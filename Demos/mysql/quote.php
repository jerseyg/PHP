<?php
    //connect to the DB, get the passed ID
    //create SQL to select the appropriate qoute
    require "connect.php";
	$id =$_GET['id'];
	
	if (!is_numeric($id)) {
		header('Location: select.php');
		die;
	}
	
	$sql = "SELECT * FROM quotes WHERE id = {$id}";
	$result = $db->query($sql);
	
	if (!$result || $result->num_rows !=1) {
		header('Location: select.php');
		die;
	}
	
	$quote = $result->fetch_assoc();
	
?>
<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SELECT Single Quote Example</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="wrapper">
        <h1>Your Quote</h1>
        <p>
           <!--display the appropriate quote -->
           <?= $quote['quote']; ?>
        </p>
        <a href="select.php">View All Quotes.</a> - 
        <a href="form.html">Add Another Quote.</a>
    </div>    
</body>
</html>
