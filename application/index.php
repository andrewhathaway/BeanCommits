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
					<p>In repo <?=$repositories[$item['repository_id']]?> & <?=count($item['changed_files'])?> files changed. <?=date("l jS F Y - h:i A",strtotime($item['time']))?></p>
				</div>
				<div class="clear"></div>
			</li>
		<?php endforeach; ?>
	</ul>
	<a href="#" class="button">Load More</a>
</section>

<?php include_once(INCLUDES . 'footer.php') ?>