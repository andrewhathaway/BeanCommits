<?php defined('SELF') or die(); 
	include_once(INCLUDES . 'header.php');
?>

<?php if($commits == null) $error->trigger('No commit feed found. Check config file for account settings OR commit something.'); ?> 

<section class="container main-body">

	<ul class="feed" id="feed">

		<?php foreach($commits as $commit): ?>
			<li>
				<img src="<?=$commit['gravatar']?>">

				<div class="information">
					<h3><?=$commit['message']?></h3>
					<p>Made <?=$commit['changed_files']?> changes in <?=$commit['repository']?> - <b><?=$commit['time']?></b></p>
					<a href="https://blogcase.beanstalkapp.com/commit-feed/changesets/<?=$commit['hash']?>">View Commit on Beanstalk</a>
				</div>
				<div class="clear"></div>
			</li>
		<?php endforeach; ?>

	</ul>

	<?php 
		$page = 2;
		if(isset($_GET['page'])) $page = $_GET['page'] + 1;
	?>
	<?php if(!isset($_GET['revision'])): ?>
		<a href="<?=$html->baseURL().'?page='.$page?>" class="button" id="load-more">LOAD MORE</a>
	<?php endif; ?>

</section>

<?php include_once(INCLUDES . 'footer.php') ?>