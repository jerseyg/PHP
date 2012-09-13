<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title>User Input Via a Form</title>
</head>
<body>
   <h1>User Input Form Using GET</h1>
   <form action="index.php" method="get">
       <label for="frogs">How Many Frogs?</label>
       <input type="text" name="frogs" id="frogs" />
       <input type="submit" value="FROG IT" />
   </form>
   <h1>User Input Form Using POST</h1>
   <form action="post.php" method="post">
       <p>
           <label for="frogs">How Many Frogs?</label>
           <input type="text" name="frogs" id="frogs" />
       </p>
       <p>
           <label for="description">Tell me about these frogs:</label>
           <textarea name="description" id="description"></textarea>
       </p>
       <input type="submit" value="FROG IT" />
   </form>
</body>
</html>
