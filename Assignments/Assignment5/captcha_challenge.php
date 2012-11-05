<?php
require 'connect.php';

define('ALLOWED_ATTEMPTS', 5);
define('ACCUMULATED_TIME', 30);
define('LOCKOUT_TIME', 120);

session_start();



?>
<!doctype html>
<html>
<head>
	<title>Comments</title>
</head>
<body>
	<h2>Add a Comment!</h2>
<?php if(isset($_COOKIE['lockout'])): ?>

	<h3>YOU HAVE BEEN LOCKED OUT FOR 2 MINUTES</h3>
				<br />
				<p>Here is a cat!</p><br /><br />
				<img src="worak-cat-reading.jpg" alt="I Cans read!"/>

<?php else: ?>



	<?php
		if(isset($_POST['submit'])): ?>

		<?php
			$user_pass_phrase = sha1(strtoupper($_POST['verify'])); 
		?>
			
			<?php if($_SESSION['pass_phrase'] == $user_pass_phrase): ?>
				
				
				<?php $count = 0; ?>
				<?php 
					$query = $db->prepare("INSERT INTO comments (email, content) VALUES (:email, :content)");
					$query->bindParam(':email', $_POST['email']);	
					$query->bindParam(':content', $_POST['content']);
					$query->execute();

					setcookie("counter", $count, time() - ACCUMULATED_TIME);
					$_SESSION = array();
				?>

				<h2>Success! you have inserted your comment to the table!</h2> <br />

				<p>Email: <?= $_POST['email']; ?></p>
				<p>Content: <?= $_POST['content']; ?></p>

			
			<?php else: ?>
				
				<?php if(!isset($_COOKIE['counter'])): ?>

					<?php 
					$count = 0;
					?>
					
				<?php else: ?>

					<?php  
						$count = $_COOKIE['counter'];
						$count++;
					?>

				<?php endif; ?>


				<?php 
						
					setcookie("counter", $count, time() + ACCUMULATED_TIME); 
					if($count >= ALLOWED_ATTEMPTS - 1){
						$lockout = 1;
						setcookie("lockout", $lockout, time() + LOCKOUT_TIME); 
					}

				?>


					<p>Number of attempts left <?= ALLOWED_ATTEMPTS - $count?> in the next 30 seconds</p>
			<form action="captcha_challenge.php" method="post">
					<label for="email">Email:</label><br />
				<input type="text" id="email" name="email" value="<?= $_POST['email'] ?>"/><br />

					<label for="content">Content:</label><br />
					<textarea name="content" id="content" rows="4" cols="50"><?= $_POST['content']?></textarea><br />
					
				<label for="verify">Verify Captcha:</label>
				<input type="text" id="verify" name="verify" />
				<img src="captcha_generator.php" alt="Verify this!" /><br />
				<input type="submit" value="submit" name="submit" />
			</form>
				

		<?php endif; ?>

<?php else: ?>
	<form action="captcha_challenge.php" method="post">
		<label for="email">Email:</label><br />
		<input type="text" id="email" name="email" /><br />

			<label for="content">Content:</label><br />
			<textarea name="content" id="content" rows="4" cols="50"></textarea><br />
			
		<label for="verify">Verify Captcha:</label>
		<input type="text" id="verify" name="verify" />
		<img src="captcha_generator.php" alt="Verify this!" /><br />
		<input type="submit" value="submit" name="submit" />
	</form>

<?php endif; ?>
<?php endif; ?>	
</body>
</html>