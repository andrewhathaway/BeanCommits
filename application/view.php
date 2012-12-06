<?php defined('SELF') or die(); 
	include_once(INCLUDES . 'header.php');
?>

<?php if($feed == null) $error->trigger('No commit feed found. Check config file for account settings OR commit something.'); ?> 

<section class="container main-body">

	<ul class="feed" id="feed">

		<?php foreach($feed as $item): 
			var_dump($item); die;
			//Setup item information
			$item = $item['revision_cache'];
			$changed_files = count($item['changed_files']);
			$repository = $repositories[$item['repository_id']];
			$time = $html->time_elapsed_string(strtotime($item['time'])) . " ago";
		?>

			<li>	
				<img src="<?php echo $html->getGravatar($item['email']); ?>">

				<div class="information">
					<h3><?=$item['message']?></h3>
					<p>Made <?=$changed_files?> changes in <?=$repository?> - <b><?=$time?></b></p>
					<a href="https://blogcase.beanstalkapp.com/commit-feed/changesets/<?=$item['hash_id']?>">View Commit on Beanstalk</a>
				</div>

				<div class="clear"></div>
			</li>

		<?php endforeach; ?>

	</ul>

	<?php 
		$page = 2;
		if(isset($_GET['page'])) $page = $_GET['page'] + 1;
	?>

	<a href="<?=$html->baseURL().'?page='.$page?>" class="button" id="load-more">LOAD MORE</a>

</section>

<?php include_once(INCLUDES . 'footer.php') ?>