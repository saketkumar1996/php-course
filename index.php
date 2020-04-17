<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    $name = "PHP Store";
	$credit = 1000;
  	 echo "<h1>Welcome to ".$name."!</h1>";
	 echo "<h2>You have $".$credit." in your wallet.</h2>";
    ?>
  </body>
</html>