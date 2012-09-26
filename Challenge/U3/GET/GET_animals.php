<?php
function counter() {

	if ($_GET['count'] <= 20 && $_GET['count'] > 0) {
		return true;
	} else {
		return false;
	}
}
function animal() {
		if ($_GET['animal'] == 'cat' || $_GET['animal'] == 'rabbits' || $_GET['animal'] == 'blob fish') {
			return true;
		} else {
			return false;
		}

	}


?>

<!DOCTYPE >
<html>
	<head>
		<title></title>
	</head>
	<body>
<?php if(counter() || animal()): ?>
	
	<?php if(counter()): ?>
		
			<?php if(animal() && $_GET['animal'] == 'cat'): ?>
				
			<?php for ($i = 1; $i <= $_GET['count']; $i++) {
  			 echo "<img src='cat.jpg' alt='cats' width ='250' /> ";
				} ?>
			<?php elseif(animal() && $_GET['animal'] == 'rabbits'): ?>
				
					<?php for ($i = 1; $i <= $_GET['count']; $i++) {
  			 echo "<img src='rabbit.jpg' alt='cats' width ='250' /> 	";
				} ?>
			
			<?php elseif(animal() && $_GET['animal'] == 'blob fish'): ?>	
				
					<?php for ($i = 1; $i <= $_GET['count']; $i++) {
  			 echo "<img src='blobfish.jpg' alt='cats' width ='250' /> 	";
				} ?>
			
			<?php else: ?>	
			<p>you are missing an animal</p>
			<?php endif; ?>
			
		
	<?php else: ?>
			<p>you are missing a counter OR number is to higher then 20 or to less then 0 </p>
	<?php endif; ?>
	
<?php else: ?>
			<p>you are missing both</p>
<?php endif; ?>

	</body>

</html>