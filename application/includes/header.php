<?php include_once('logic.php') ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Beanstalk Commit Feed</title>
	<?php $html->css(); ?>
	<meta name="viewport" content="initial-scale=1.0">
</head>
<body>
	<div class="header">
		<section class="container">
			<h1 class="float-left"><?=$config['header_title']?></h1>
			<a href="<?=$html->currentUrl()?>" class="button float-right small">RESET</a>
		</section>
	</div>
	