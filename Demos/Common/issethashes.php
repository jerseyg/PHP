<?php
function toy_box_contains($toy, $toy_box){
	if (isset($toy_box[$toy])){
		echo "You have {$toy_box[$toy]} $toy. </br>";	
	}
	else {
		echo "You have no $toy.";
	}
}

    $toy_box = array('tin soldier'	=> 52,
					 'pickup_sticks'	=> 35,
					 'dice'	=> 6,
					 'transformers'	=> 4);
	
	toy_box_contains('dice', $toy_box);
	toy_box_contains('robots', $toy_box);
?>