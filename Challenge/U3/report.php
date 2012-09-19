<?php

  define('REPORT_EMAIL','ghostbusters_reports@mailinator.com');

  $name = $_POST['name'];
  $address = $_POST['address'];
  $description = $_POST['description'];
  $email = $_POST['email'];
  $urgency_class = $_POST['urgency_class'];
  $venue = $_POST['venue'];
  $option = $_POST['option'];
  
  
  $from    = 'From: '.$email;
  $subject = "{$urgency_class} photography appointment.";
  $msg   = "Address: {$address} \n\n";
  $msg    .= "{$name} wants to have a {$option} photoshoot {$venue}.\n\n";
  $msg    .= "Addition Notes: {$description}";

// On Linux systems this command would send an email:  
// mail(REPORT_EMAIL, $subject, $msg, $from);

// Including the xml prelude with an echo since I have php short-tags enabled.
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Captivating Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <img src="revised.png" alt="Ghostbuster" />
        </div> <!-- END HEADER -->
        <div id="sidebar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div> <!-- END SIDEBAR -->
        <div id="content">

        	<?php if($option && $venue): ?>
        	  	 <p>Thank you <?= $name ?> for your ghost report.</p>
         		 <p><?= $from ?></p>
          		 <p>Subject: <?= $subject ?></p>
          		 <p><?= nl2br($msg) ?></p>
        	<?php else: ?>
        	<h3>Either Your Venue or Options have not been chosen</h3>
        	<?php endif; ?>
        
        
        
       
          
 

          
          
        </div> <!-- END CONTENT -->
        <div id="footer">
            <p>
                Ghostbusters Incorporated - 2010
            </p>
        </div> <!-- END FOOTER -->
    </div> <!-- END WRAPPER -->
</body>
</html>