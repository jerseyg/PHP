<?php
    function factorial($n) 
{
	$x = $n;
  if ($n < 2 ) 
    $n = 1; 
  else { 
    for ($i = $n-1; $i > 1; $i-- ) 
      $n = $n * $i; 
  } 

  return("The factorial of $x is $n.</br>"); 
} 


echo "</br>";
echo factorial(4);
echo factorial(5);
echo factorial(6);

?>