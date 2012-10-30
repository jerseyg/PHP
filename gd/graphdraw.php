<? 
// Inform the browser of the mime-type.
header("Content-type: image/png"); 

// Define variables 
$values = array(); 

//	20 random values for use in the graph
for ($i = 0; $i < 20; $i++) { 
    $values[] = rand(20,100); 
} 

$imgWidth=500; 
$imgHeight=200; 
$grid=25; 
$graphspacing=0.07; 
//Scales number of vertical grid lines for the number of data to print 
$gridW=$imgWidth/(count($values)-1); 

//Get min and max values to scale image 
for ($i=0; $i<count($values); $i++){ 
  if ($values[$i]>$max){$max=$values[$i];} 
} 

//Min values are less the maximum... 
$min = $max; 

for ($i=0; $i<count($values); $i++){ 
  if ($values[$i]<$min){$min=$values[$i];} 
} 

for ($i=0; $i<count($values); $i++){ 
  $graphValues[$i] = 
 ($values[$i] - $min*(1-2*$graphspacing)) * 
 (($imgHeight*(1-$graphspacing))/($max-$min)); 
} 

// Create image and define colors 
$image=imagecreate($imgWidth, $imgHeight); 
$colorWhite=imagecolorallocate($image, 0xFF, 255, 255); 
$colorGrey=imagecolorallocate($image, 192, 192, 192); 
$colorBlue=imagecolorallocate($image, 0, 0, 255); 

// Create border around image 
imageline($image, 0, 0, 0, $imgHeight, $colorGrey); 
imageline($image, 0, 0, $imgWidth, 0, $colorGrey); 
imageline($image, $imgWidth-1, 0, $imgWidth-1, $imgHeight-1, $colorGrey); 
imageline($image, 0, $imgHeight-1, $imgWidth-1, $imgHeight-1, $colorGrey); 

// Create grid 
for ($i=1; $i<($imgWidth/$gridW); $i++) 
   {imageline($image, $i*$gridW, 0, $i*$gridW, $imgHeight, $colorGrey);} 
for ($i=1; $i<($imgHeight/$grid); $i++) 
   {imageline($image, 0, $i*$grid, $imgWidth, $i*$grid, $colorGrey);} 

//Create the lines connecting points 
for ($i=0; $i<count($graphValues)-1; $i++) 
   {imageline($image, $i*$gridW, ($imgHeight-$graphValues[$i]), 
 ($i+1)*$gridW, ($imgHeight-$graphValues[$i+1]), $colorBlue);} 

// Outputs the image to the browser as a png,
// since this is the mime-type we specified above.
imagepng($image); 
// Removes the image from memory. Important!
imagedestroy($image); 
?>