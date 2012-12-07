<section class="container">
	<?php if(!isset($_GET['revision'])): ?>
		<?php 
			$page = 2;
			if(isset($_GET['page'])) $page = $_GET['page'] + 1;
		?>
		<a href="<?=$html->baseURL().'?page='.$page?>" class="button" id="load-more">LOAD MORE</a>
	<?php endif; ?>
</section>
</body>
</html>