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

			</div>
			<!-- END HEADER -->
			<div id="sidebar">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="#">About</a>
					</li>
				</ul>
			</div>
			<!-- END SIDEBAR -->
			
			<div id="content">
				<h2>Contact</h2>
				<form method="post" action="report.php">
					<fieldset>
						<div class="field">
							<label for="name">Your Name:</label>
							<input id="name" name="name" />
							<br />
							<label for="address">Address:</label>
							<input id="address" name="address" />
							<br />
							<label for="email">Email:</label>
								<input id="email" name="email" />

						</div>
						
						<div class=:"field2">
							<table>
								<tr>
									<td>
									<input type="radio" name="venue" value="outdoors" />
									Outdoors</td>
									<td>
									<input type="radio" name="venue" value="indoors" />
									Indoors</td>
								</tr>
								<tr>
									<td>
									<input type="checkbox" checked="checked" name="option" value="Hourly" />
									Hourly
									<br />
									</td>


								</tr>

							</table>

							<label for="urgency_class">Urgency</label>
							<select id="urgency_class" name="urgency_class">
								<option>Important</option>
								<option>Emergency</option>
								<option>Inquire</option>
								<option>Bacon Bacon Bacon</option>
						
							</select>
							<label for="description">Description:</label>
							<textarea id="description" name="description" rows="3" cols="35"></textarea>							
                
 <input type="submit" value="Submit Report" />
						</div>

					</fieldset>
				</form>

			</div>
			<!-- END CONTENT -->
			<div id="footer">
				<p>
					Ghostbusters Incorporated - 2010
				</p>
			</div>
			<!-- END FOOTER -->
		</div>
		<!-- END WRAPPER -->
	</body>
</html>