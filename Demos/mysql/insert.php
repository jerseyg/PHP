<?php
	require "connect.php";
	$quote = $_POST['tweet'];
	$sql = "INSERT INTO tweet (tweets) VALUES ('{$tweets}')";
	$result = $db->query($sql);
?>

<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Form Example</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="wrapper">
        <?php if ($result): ?>
        	<h1>Successful added Tweets Table</h1>
        	<?php else: ?>
        		<h1>Error Added to Tweets Table</h1>
        		<?php endif; ?>
        		<h2>SQL Execute</h2>
        		<pre><?= $sql; ?></pre>
        		<a href="form.html">Add Tween quote.</a>
				<strong>or</strong>
				<a href="select.php">View All Tweets</a>      
    </div>
</body>
</html>
