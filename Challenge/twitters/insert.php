<?php

	require "connect.php";
	$tweets = mysql_real_escape_string ($_POST["tweet"]);
	$sql = "INSERT INTO tweets (status) VALUES ('{$tweets}')";
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


        <?php if (strlen($tweets) > 0 && strlen($tweets) <= 140): ?>
        <?php $result = $db->query($sql); ?>
        <?php if ($result): ?>

        	<?php  header( 'Location: form.php' ) ; ?>
        	<h1>Successful added Tweets Table</h1>
        	<?php else: ?>
        		<h1>Error Added to Tweets Table</h1>
                <?php printf(mysqli_error($db)) ?>
        		<?php endif; ?> 

        <?php else: ?>
        <h2> Either you entered no tweet or Tweet is longer then 140 Characters </h2>
        <a href="form.php">Return to Form</a>
    <?php endif; ?>

    </div>
</body>
</html>
