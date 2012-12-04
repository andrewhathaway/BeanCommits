<?php defined('SELF') or die(); 

	include_once(INCLUDES . 'header.php');
?>

<section class="container main-body">
	<ul class="feed">
		<?php foreach($feed as $item): ?>
		<?php 
			//Setup item informatiomn
			$item = $item['revision_cache'];
			$repository = $repositories[$item['repository_id']];
			$changed_files = count($item['changed_files']);
			$time = date("l jS F Y - h:i A",strtotime($item['time']));
		?>
			<li>	
				<img src="<?php echo $html->getGravatar($item['email']); ?>">
				<div class="information">
					<h3><?=$item['message']?></h3>
					<p>Commit made <?=$changed_files?> changes in repository <?=$repository?> at <?=$time?> - <a href="https://blogcase.beanstalkapp.com/commit-feed/changesets/<?=$item['hash_id']?>">View Commit on Beanstalk</a></p>
				</div>
				<div class="clear"></div>
			</li>
		<?php endforeach; ?>
	</ul>
	<a href="#" class="button">Load More</a>
</section>

<?php include_once(INCLUDES . 'footer.php') ?>