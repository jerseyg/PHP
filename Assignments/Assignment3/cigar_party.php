<?php
function cigar_party($number_of_cigars, $is_weekend = false) {
	
	if($is_weekend){
		
		if ($number_of_cigars >= 40){
			echo "This Party worked out great</br>";
		}
		else{
			echo "This Party was not successful</br>";
		}
	}
	
	else {
		//Fix <= 60 not working 
		if ($number_of_cigars >= 40 && $number_of_cigars <= 60){
					echo "This Party worked out great</br>";
		}
		else{
			echo "This Party was not successful</br>";
		
		}
	}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Cigar Party

		</title>
</head>
<body>
	<h1>HTML5 boilerplate in a PHP doc!</h1>
	<p>
			<?php
				echo "cigar_party(70, true)" . cigar_party(70, true) . "</br>";
				echo "cigar_party(39, true)" . cigar_party(39, true) . "</br>";
				echo "cigar_party(40, true)" . cigar_party(40, true) . "</br>";
				echo "cigar_party(39)" . cigar_party(39) . "</br>";
				echo "cigar_party(70)" . cigar_party(70) . "</br>";
				echo "cigar_party(40)" . cigar_party(40) . "</br>";
			?>
	</p>
</body>
</html>

