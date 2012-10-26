<?php
//Setting a cookie containing my name, expiring in 60 seconds
//setcookies(key, param , timelimit)
// setcookie('name', 'Jersey', time() + 60);

// //expire in one day
// setcookie('name2', 'Amelia', time() + (24 * 60 * 60));

// //expire in one week
// setcookie('name3', 'Amy', time() + (7 * 24 * 60 * 60))

// //Clear cookie
// setcookie('name', 'Doctor', time() - 60);
$start = time();
setcookie('start', $start, time() + 600);

if(!isset($_COOKIE['count'])){
	$count = 0;

	// .. and set a cookie with the "start" time
	// of this stateful interaction
	

	

}
else{
	$count = $_COOKIE['count'];

	$start = $_COOKIE['start'];
	$count++;

}


setcookie('count', $count, time() + 600);


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
</head>
<body>
	<p>This page comes with cookies: Enjoy!</p>
	<br /> count = <?= $count ?>.
	<br /> start = <?= $start ?>.
	<p>This sessions 
	<?php 
	$duration = time() - $start;
	echo $duration; ?>
	seconds </p>
	<pre>
		<?= print_r($_SERVER,true); ?>
	</pre>

	
</body>	
</html>	