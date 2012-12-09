<?php include_once('logic.php'); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?=$config['header_title']?></title>
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" />

	<?php if(!isset($_GET['revision'])): ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<?php $html->js(); ?>
	<?php endif; ?>
	
	<?php $html->css(); ?>

	<?php $iOS->bar(); ?>
</head>
<body>
	<div class="header">
		<section class="container">
			<h1 class="float-left"><?=$config['header_title']?></h1>
			<a href="<?=BASE?>" class="button float-right small">RESET</a>
		</section>
	</div>
	