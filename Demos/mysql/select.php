<?php
    require 'connect.php';
    $sql = "SELECT * FROM quotes";
    $result = $db->query($sql);
?>
<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SELECT Example</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="wrapper">
        <h1>Quotes from Our Quotes Table</h1>
        <ul>
            <!--display each quote in a new <li> element-->
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <a href="quote.php?id=<?= $row['id'] ?>">
                    <?= $row['quote']; ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
        <a href="form.html">Add Another Quote.</a>
    </div>    
</body>
</html>
