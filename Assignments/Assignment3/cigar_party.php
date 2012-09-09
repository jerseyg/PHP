<?php
function cigar_party($number_of_cigars, $is_weekend = false) {
	
	if($is_weekend){
		
		if ($number_of_cigars >= 40){
			echo "This Party worked out great";
		}
		else{
			echo "This Party was not successful";
		}
	}
	
	else {
		//Fix <= 60 not working 
		if ($number_of_cigars >= 40 && $number_of_cigars <= 60){
					echo "This Party worked out great";
		}
		else{
			echo "This Party was not successful";
		
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
				echo cigar_party(39, true) ." - Weekend Party. 39 cigars".  "</br>"  ;
				echo cigar_party(39) ." - Weekday Party.  39 cigars".  "</br>"  ;
				echo cigar_party(50, true) ." - Weekend Party. 50 cigars".  "</br>"  ;
				echo cigar_party(50) ." - Weekday Party. 50 cigars".  "</br>"  ;
				echo cigar_party(70, true) ." - Weekend Party. 70 cigars".  "</br>"  ;
				echo cigar_party(70) ." - Weekday Party. 70 cigars".  "</br>"  ;
				
	
			?>
	</p>
</body>
</html>

