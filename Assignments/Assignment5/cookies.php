<?php
/*
//	Setting a cookie containing my name, expiring in 60 seconds
setcookie('name', 'Alan', time() + 60);

//	Expire in one day
setcookie('name2', 'Marty', time() + 24 * 60 * 60);

//	Expires in one week
setcookie('name3', 'Doc Brown', time() + (7 * 24 * 60 * 60));

// 	Clearing a cookie, setting an expiry in the past
setcookie('name4', 'Bo', time() - 60);*/

if(!isset($_COOKIE['count'])){
	// No cookie called count, set the count to zero
	$count = 0;

	// ...and set a cookie with the "start" time
	//	  of this stateful interaction
	$start = time();
	setcookie('start', $start, time() + 600);

}else{
	$count = $_COOKIE['count'];
	$start = $_COOKIE['start'];
	$count++;

}

setcookie("count", $count, time() + 600);

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
</head>
<body>
	<p>This pages comes with cookies: Enjoy!
	<br />count = <?= $count ?>.
	<br />start = <?= $start ?>.</p>
	<p>This session has lasted 
	<?php 
		$duration = time() - $start;
		echo "$duration";
	?>
	seconds.</p>
	<pre>
		<?=print_r($_SERVER,true); ?>
	</pre>
</body>
</html>

