<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Image Captcha Example</h1>
	<h5>http://thepiggery.net/captcha/fonts/</h5>

	<hr>
	<form action="text-code.php" method="post">

		<p>Enter the Email:
			<input type="text" name="email"/>
		</p>
		
		<p>Enter the Captcha:
			<img src="captcha.php"> <br/>
			<input type="text" name="captcha"/> 
			
		</p>

		<p>
			<input type="submit" name="submit" />
		</p>
	</form>
</body>
</html>

