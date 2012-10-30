<?php
	session_start();
?>
<!doctype html>
<html>
<head>
	<title>Robot Catcher!</title>
</head>
<body>
	<h2>Captcha!</h2>
	<?php
		if(isset($_POST['submit'])){
			$user_pass_phrase = sha1($_POST['verify']);
			if($_SESSION['pass_phrase'] == $user_pass_phrase){
				echo "<h3>You're no skin job!</h3>";
			}else{
				echo "<h3>Frakking Toaster!</h3>";
			}
		}
	?>
	<form action="robotcatcher.php" method="post">
		<label for="verify">Verify Captcha:</label>
		<input type="text" id="verify" name="verify" />
		<img src="captcha.php" alt="Verify this!" /><br />
		<input type="submit" value="submit" name="submit" />
	</form>
</body>
</html>