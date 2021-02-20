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
			<img src="captcha.php" id="captcha-img">
			<img src="refresh.png" id="refresh-btn" style="height:25px;width:25px;">
			refresh
			<br/>
			<input type="text" name="captcha"/>
		</p>
		<p>
			<input type="submit" name="submit" />
		</p>
	</form>
	<script type="text/javascript" src="jquery.js">
	</script>
	<script>
		
	$(document).ready(function(){
			$("#refresh-btn").on("click",function(){
				var img_element = $("#captcha-img").attr('src','captcha.php');
			});
	});
	
	</script>
</body>
</html>

