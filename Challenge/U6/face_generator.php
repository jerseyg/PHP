<?php 

header('Content-type: image/png'); 

$face =imagecreatetruecolor(400,400); 
$outline = imagecolorallocate($face, 0, 0, 0);
$background = imagecolorallocate($face, 255, 255, 255);
imagefilledrectangle($face, 0, 0, 400, 400, $background);

$randColor1 = imagecolorallocate($face, rand(0,255), rand(0,255), rand(0,255));
$randColor2 = imagecolorallocate($face, rand(0,255), rand(0,255), rand(0,255));
$randColor3 = imagecolorallocate($face, rand(0,255), rand(0,255), rand(0,255));
$randColor4 = imagecolorallocate($face, rand(0,255), rand(0,255), rand(0,255));

$randSmile = rand(100,200);


//face
imagearc($face,200,200,300,300,0,360,$outline); 
//smile
imagearc($face,200,225,$randSmile,rand(-150,150),0,180,$outline); 
imagearc($face,200,225,$randSmile,123,0,rand(-180,180),$outline);

//eyes
imagearc($face,  140,  150,  50,  50,  0, 360, $outline);
imagearc($face,  140,  150,  20,  20,  0, 360, $outline);
imagearc($face, 260,  150,  50,  50,  0, 360, $outline);
imagearc($face, 260,  150,  20,  20,  0, 360, $outline);

$hairPOS = array(150,170,190,210,190,170);
$hairPOS2 = array(60,55,50,45,40,35);

for($i = 0; $i < 6; $i++){
	imagerectangle($face, $hairPOS[$i], $hairPOS2[$i], $hairPOS[$i], 100, $outline);
}

imagefill($face, 200, 200, $randColor1);
imagefill($face, 200, 290, $randColor2);
imagefill($face, 140, 150, $randColor3);
imagefill($face, 260, 150, $randColor4);
imagepng($face); 


imagedestroy($face);
?>