<?php

require 'connect.php';
$sql = "SELECT status FROM tweets";
$result = $db -> query($sql);

$rows = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <link rel="stylesheet" type="text/css" href="main.css" />

<script type="text/javascript">
//<![CDATA[
// content of your Javascript goes here
    function textCounter(field, cntfield, maxlimit) {
        if (field.value.length > maxlimit)// if too long...trim it!
            field.value = field.value.substring(0, maxlimit);
        // otherwise, update 'characters left' counter
        else
            cntfield.value = maxlimit - field.value.length;
    }

    //  End -->
  //  ]]>
</script>

</head>
<body>
    <div id="wrapper">
        <h2>Tweet Here</h2>
        <form name="tweet" action="insert.php" method="post">
            <fieldset>
                <label for="tweets">Quote</label>
                
                <input type="text" name="tweet" class="tweets" id="tweets"
                onKeyDown="textCounter(document.tweet.tweet,document.tweet.counter,140)"
				onKeyUp="textCounter(document.tweet.tweet,document.tweet.counter,140)" />
			
				<input readonly type="text" name="counter" size="3" maxlength="3" value="140"/>
					characters left
				<br>
                
                <input type="submit" class="sub_button" />
                
                

            </fieldset>
                        <ul>
            <!--display each quote in a new <li> element-->
            <!--display each quote in a new <li> element-->
        
            <?php if(empty($rows)): ?>
                    <li>
                        No Tweets Found
                    </li>
            <?php else: ?>
      
        <?php while ($row = $result->fetch_assoc()):  ?>
                <li>
                    <?= $row['status']; ?>

                </li>
                <?php endwhile; ?>
      <?php endif; ?>
            </ul>
        </form>

    </div>
</body>
</html>
