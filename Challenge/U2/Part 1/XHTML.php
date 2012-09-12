
<?php
        // Task #1 Generate the date using php.
        // Save it to a variable.
        // Echo it within a p tag in your body.
   		$the_date = date('l jS \of F Y h:i:s A');
		
        // Task #2 Hard-code an array of strings.
        // Each string is a quote.
        // Using PHP, pick a random quote and save it to a variable.
        // Echo this variable within a p tag in your body.
        	$quotes = array("Give me a fish", "There is only right in wrong", 
        					"PHP rocks my socks", "You are the Ruby in my life",);
     		$random = array_rand($quotes);
     			
     		
        // Task #3 The following array of hashes
        // contains title and URLs for websites.
        $links = array(
            array('title' => 'Stung Eye', 'href' => 'http://stungeye.com'),
            array('title' => 'Glutton', 'href' => 'http://codeglutton.tumblr.com'),
            array('title' => 'Reddit', 'href' => 'http://reddit.com' ),
        );
        // Within the xhtml, loop through this array.
        // Generate a <ul> unordered list of <a> tags using
        // the data from each of the hashes.
?>
<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>PHP Ultimate Challenge #2</title>
</head>
<body>
        <!-- This is where you will be writing and generating your XHTML. -->
        <?php
        	echo "<p>" . $the_date . "</p>";
        	echo "<p>" . $quotes[$random] . "</p>";
				
		echo "<ul>";
		foreach($links as $i=>$value){
		echo '<li>'.'<a href="' . $links[$i]['href'] . '">' . $links[$i]['title'] . '</a>'. '</li>' ;
		}
		echo "</ul>";
        ?>
</body>
</html>
