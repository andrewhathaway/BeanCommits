<?php defined('SELF') or die(); 

	include_once(INCLUDES . 'header.php');
?>

<section class="container main-body">
	<ul class="feed">
		<?php foreach($feed as $item): ?>
		<?php $item = $item['revision_cache'] ?>
			<li>	
				<img src="<?php echo $html->getGravatar($item['email']); ?>">
				<div class="information">
					<h3><?=$item['message']?></h3>
				</div>
				<div class="clear"></div>
			</li>
		<?php endforeach; ?>
	</ul>
</section>

<?php include_once(INCLUDES . 'footer.php') ?>