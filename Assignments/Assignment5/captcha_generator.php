<?php
	session_start();
	//	Set some important CAPTCHA Constants
	define('CAPTCHA_NUMCHARS', 6);	//# OF CHARS IN PASS PHRASE
	define('CAPTCHA_WIDTH', 100);	//WIDTH OF IMAGE
	define('CAPTCHA_HEIGHT', 25);	//HEIGHT OF IMAGE

	//	Set MIME-type to PNG
	header("Content-type:image/png");

	//Generate Random pass phrase
	$pass_phrase = "";
	for ($i = 0; $i < CAPTCHA_NUMCHARS;$i++){
		$pass_phrase .= chr(rand(97,122)); //We are using ASCII codes for pas phrase


	}
		//Store the encryptred pass phrase in a session

		$_SESSION['pass_phrase'] = sha1(strtoupper($pass_phrase));

		//create the image

		$image = imagecreatetruecolor(CAPTCHA_WIDTH, CAPTCHA_HEIGHT);

		//set a white background with red text and grey graphics

		$background = imagecolorallocate($image, 255, 255, 255);
		$text_colour = imagecolorallocate($image, 255, 0, 0);
		$graphic_colour = imagecolorallocate($image, 64, 64, 64);
 
 		// Fill the background

		imagefilledrectangle($image, 0, 0, CAPTCHA_WIDTH, CAPTCHA_HEIGHT, $background);



		for($i =0;$i < 5; $i++){
			imageline($image, 0, rand() % CAPTCHA_HEIGHT, CAPTCHA_WIDTH, rand() % CAPTCHA_HEIGHT, $graphic_colour);
		}


		// Sprinkle in some random dots

		for($i =  0; $i < 50; $i++){
			imagesetpixel($image, rand() % CAPTCHA_WIDTH, rand() % CAPTCHA_HEIGHT, $graphic_colour);
		}


		// Draw the pass_phrase string

		imagettftext($image, 18, 1, 10, CAPTCHA_HEIGHT - 5, $text_colour, "CherrySwash-Bold.ttf", $pass_phrase);

		//Output the image as a PNG
		imagepng($image);

		//Clean up
		imagedestroy($image);


?>







