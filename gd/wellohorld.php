<?php
//letting the broswer know that this file is an image
header('content-type: image/png');

//imagecreatetruecolor(width, height)
$image = imagecreatetruecolor(300, 300);

$white = imagecolorallocate($image, 255 , 255, 255);

$font_path = "CherrySwash-Bold.ttf";

$string = "Wello Horld!";

//imagettftext(image, size, angle, x, y, color, fontfile, text)

imagettftext($image, 30, 25, 30, 230, $white, $font_path, $string);

imagepng($image);

//Very important to delete the image; frees up memory

imagedestroy($image);

?>