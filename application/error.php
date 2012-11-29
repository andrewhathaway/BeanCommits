<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Error - Beanstalk Commits</title>
	<?php 
		$html = Html::getInstance();
		$html->css(); 
	?>
</head>
<body>
	<section class="container">
		<div class="error-message animated fadeInDown">
			<h2>Oh noes! Problemo!</h2>
			<p><?=$error_message?></p>
		</div>
	</section>
</body>
</html>