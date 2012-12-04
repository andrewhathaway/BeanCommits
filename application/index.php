<?php defined('SELF') or die(); 
	//Include header -> fires logic file
	include_once(INCLUDES . 'header.php');
?>

<?php if($feed == null) $error->trigger('No commit feed found. Check config file for account settings OR commit something.'); ?> 

<section class="container main-body">

	<ul class="feed">

		<?php foreach($feed as $item): 
			//Setup item informatiomn
			$item = $item['revision_cache'];
			$changed_files = count($item['changed_files']);
			$repository = $repositories[$item['repository_id']];
			$time = date("l jS F Y - h:i A", strtotime($item['time']));
		?>

			<li>	
				<img src="<?php echo $html->getGravatar($item['email']); ?>">

				<div class="information">
					<h3><?=$item['message']?> - <span><?=$item['author']?></span></h3>
					<p>Commit made <?=$changed_files?> changes in repository <?=$repository?> at <?=$time?> - <a href="https://blogcase.beanstalkapp.com/commit-feed/changesets/<?=$item['hash_id']?>">View Commit on Beanstalk</a></p>
				</div>

				<div class="clear"></div>
			</li>

		<?php endforeach; ?>

	</ul>

	<a href="#" class="button">LOAD MORE</a>

</section>

<?php include_once(INCLUDES . 'footer.php') ?>