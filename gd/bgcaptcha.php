<?php 
putenv('GDFONTPATH=' . realpath('.')); 
header("Content-type: image/png"); 

// Generate some random characters 
$possible_chars = array_merge(range('A','Z'),range('0','9')); 
shuffle($possible_chars); 
$string = substr(implode($possible_chars),0,5); 

// Build an image resource using an existing image as a starting point.

 $backgroundimage = "kitty.jpg"; 
$im=imagecreatefromjpeg($backgroundimage); 
$colour = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)); 

// Output the string of characters using a true type font. 
// Above we set the font path to the current directory, this 
// means that arial.ttf font file must be in this directory. 
$font = 'CherrySwash-Bold.ttf'; 
$angle = rand(-5,5); 
//	imagettftext(image, size, angle, x, y, color, fontfile, text)
imagettftext($im, 50, $angle, rand(0,100), rand(80,120), $colour, $font, $string); 

$colour = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)); 
// Draw some annoying lines across the image. 
imagesetthickness($im, 2); 
for ($i = 0; $i <6; $i++) { 
    imageline($im, rand(0,100), rand(0,200), rand(300,500), rand(100,250), $colour); 
} 

// Output the image as a PNG and the free the used memory. 
imagepng($im); 
imagedestroy($im); 

?>