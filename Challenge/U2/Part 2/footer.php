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
