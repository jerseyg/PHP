<?php
	
	$the_date = date('l jS \of F Y h:i:s A');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>HTML5 boilerplate
		<?= $the_date ?>
		</title>
</head>
<body>
	<h1>HTML5 boilerplate in a PHP doc!</h1>
	<p>
			<?php
				echo "Hello Class from PHP!"
			?>
	</p>
</body>
</html>
