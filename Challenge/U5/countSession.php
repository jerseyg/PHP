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

session_start();

if (!isset($_SESSION['count']) || isset($_GET['reset'])){
	$_SESSION['count'] = 0;
	$count = 0;
	header("Location: countSession.php");
}
else{
	$count = $_SESSION['count']++;

}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>
	<p>This page comes with cookies: Enjoy!</p>
	<br /> count = <?= $count ?>.
	<br />
	<a href="countSession.php?reset">Reset</a>

	

	
</body>	
</html>	