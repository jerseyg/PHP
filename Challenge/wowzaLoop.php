<?php
     for($i = 1; $i < 101; $i++){
  
		if ($i % 3 == 0 && $i % 5 == 0){
			echo "WowzaCowza</br>";
		}
		elseif ($i % 3 == 0){
		echo "Wowza</br>";
		} 
		elseif ($i % 5 == 0){
			echo "Cowza</br>";
		}
		else{
			echo "$i </br>";
		}	
	
    }

?>
