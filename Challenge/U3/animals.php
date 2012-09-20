
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title>User Input Via a Form</title>
</head>
<body>
   <h1>User Input Form Using GET</h1>
   <form action="GET_animals.php" method="GET">
   	<legend>Only Options are: cat, rabbits, blob fish. All Lowercase</legend><br /> <br />
       <label for="animal">cat, rabbits, or blob fish</label>
       <input type="text" name="animal" id="animal" />
        <label for="count">No. Of times</label>
       <input type="text" name="count" id="count" />
       <input type="submit" value="submit" />
   </form>
</body>
</html>