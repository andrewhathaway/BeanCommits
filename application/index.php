<?php defined('SELF') or die(); 
	include_once(INCLUDES . 'header.php');
?>

<section class="container main-body">

	<?php if(isset($_GET['repository'])): ?>
		<h3 class="repository-name">Repository: <?=$repositories[$_GET['repository']]?></h3>
	<?php endif; ?>

	<?php if(!isset($config['hide-repository-list']) || $config['hide-repository-list'] == false): ?>
		<ul class="repository-list">
			<?php foreach($repositories as $id => $repo): ?>
				<li><a href="<?=BASE . $id?>" <?php if(isset($_GET['repository']) && $_GET['repository'] == $id) echo 'class="active"' ?>><?=$repo?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<ul class="feed" id="feed">

		<?php foreach($commits as $commit): ?>
			<li>
				<img src="<?=$commit['gravatar']?>">
				<div class="information">
					<h3><?=$commit['message']?></h3>
					<p class="view">Made <?=$commit['changed_files']?> changes in 
						<a href="<?=BASE . $commit['repo_id']?>"><?=$commit['repository']?></a> - 
						<a href="<?=BASE . $commit['repo_id'] . '/' . $commit['revision'] ?>"><?=$commit['time']?></a>
					</p>
					<a href="https://<?=$config['account']?>.beanstalkapp.com/commit-feed/changesets/<?=$commit['hash']?>">View Commit on Beanstalk</a>
				</div>
				<div class="clear"></div>
			</li>
		<?php endforeach; ?>

	</ul>
</section>

<?php include_once(INCLUDES . 'footer.php') ?>