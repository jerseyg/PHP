<?php

if(!isset($_POST['submit']) || ($_POST['email'] == "")){

	header('Location:emailimage.php');
}
else{
	header('Content-type:image/jpeg');
	$email = $_POST['email'];
	$fontsize = 20;
	$font ="Courier New Bold.tff";

	$image = imagecreate(300, 100);

	imagecolorallocate($image, 255, 255, 255);
	$text_color = imagecolorallocate($image, 35, 103, 122);
	
	imagettftext($image, $fontsize, 0, 30, 50, $text_color, $font, $email);

	imagejpeg($image);
	imagedestroy($image);

}

?>
