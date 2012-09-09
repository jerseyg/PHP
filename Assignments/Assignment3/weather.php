<?php						
/*
 * Jersey Galapon
 * September 8, 2012
 * Outptus the weather from the arrays
 */
$weather_wpg = array(
                    'location'               => 'Winnipeg, MB',
                    'current_date'           => '9 Jan 2009',
                    'current_conditions' => array(
                                                'temp' => -23,
                                                'text' => 'Sunny'),
                    'forecast'               => array(
                                                array(
                                                    'date' => '10 Jan 2009',
                                                    'high' => -17,
                                                    'low'  => -25),
                                                array(
                                                    'date' => '11 Jan 2009',
                                                    'high' => -14,
                                                    'low'  => -22)));
$weather_sun = array(
                    'location'               => 'Sunnyvale, CA',
                    'current_date'           => '9 Jan 2009',
                    'current_conditions' => array(
                                                'temp' => 15,
                                                'text' => 'Partly Cloudy'),
                    'forecast'               => array(
                                                array(
                                                    'date' => '10 Jan 2009',
                                                    'high' => 18,
                                                    'low'  => 12),
                                                array(
                                                    'date' => '11 Jan 2009',
                                                    'high' => 17,
                                                    'low'  => 14),
                                                array(
                                                    'date' => '12 Jan 2009',
                                                    'high' => 17,
                                                    'low'  => 12)));

function weathernetwork ($weather){
	
	$location = $weather['location'];
	$date = $weather['current_date'];
	$condi = $weather['current_conditions'];
	$condi_temp = $condi['temp']; 	
	$condi_text = $condi['text']; 	
	$forecast = $weather['forecast'];
	$i = 0;
	echo "<br/>On " . $date . " in " . $location . " it is currently " . $condi_text . " with a temperature of " . $condi_temp . ".<br/> ";
	echo "<br/> The forecast for the next " . count($forecast) . " days: <br/><br/>" ;
	foreach ($forecast as $for){
		$for[$i];
		$i += 1;
		$for_date = $for['date'];
		$for_high = $for['high'];
		$for_low  = $for['low'];
		echo "[" . $for_date . "] " . "High: " . $for_high . " Low: " . $for_low . "<br/>";
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
	<h1>The Weather</h1>
	<p>
			<?php
				weathernetwork($weather_sun);
				weathernetwork($weather_wpg);
			?>
	</p>
</body>
</html>
