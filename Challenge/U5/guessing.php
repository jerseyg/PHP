<?php 

session_start();
$_SESSION['gameOver'] = 0;
if (!isset($_SESSION['random']) || isset($_GET['reset'])) {
$_SESSION['count'] = 0;
$_SESSION['random'] = rand(0, 101);
$count = $_SESSION['count'];
$random = $_SESSION['random'];
header("Location: guessing.php");
}
else {
	$count = $_SESSION['count']++;
	$random = $_SESSION['random'];
}

if (isset($_GET['number'])){
	if (is_numeric($_GET['number'])){
		$guess = $_GET['number'];
		if ($guess > $random){
			$answer = "Your Guess is greater than my number!";
		}
		elseif ($guess < $random){
			$answer = "Your Guess is lower than my number!";
		}
		elseif ($guess == $random){
			$answer = "You guessed my number!";
			$_SESSION['gameOver'] = 1;
			$output = "Your Number: {$guess}, My Number: {$random}.";
		}
	}
	else{
		$answer = "Not a Number";
	}
}
else{
	$answer = "Guess the number!";
}



?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Guessing Game</title>
</head>
<body>
	<h2> Number of Attempts <?= $count ?></h2>
	
	<?= $answer ?> <br />
	<?php if(isset($output)){
	echo $output;
	} 
	?>
	
	<br />
	<br />

	<?php if ($_SESSION['gameOver'] == 1): ?>
	<a href="guessing.php?reset"> Reset Game </a>
	<?php else: ?>
	<form action="guessing.php" method="get">
		<input type="text" id="number" name="number" />
		<input type="submit" value="Guess!" />
		<br />
		<br />
		<a href="guessing.php?reset"> Reset Game </a>


	</form>
	<?php endif; ?>
</body>
</html>