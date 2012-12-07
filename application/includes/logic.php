<?php	
	//Required classes
	$html = Html::getInstance();
	$beanstalk = Beanstalk::getInstance();

	//Get repositories & create array
	$repositories = array();	
	$repos = $beanstalk->request('GET', 'repositories');

	foreach($repos as $repo) {
		$id = $repo['repository']['id'];

		if(!isset($repositories[$id])) {
			$repositories[$id] =  $repo['repository']['title'];
		}
	}

	$commits = array();
	$feed = $beanstalk->getFeed();

	foreach($feed as $item) {
		if(!isset($_GET['revision'])) {
			$item = $item['revision_cache'];	
		} 
	
		if(strpos($item['message'], '[hide]') !== false) continue;

		$commit_info = array(
			'hash' => $item['hash_id'],
			'message' => $item['message'],
			'gravatar' => $html->getGravatar($item['email']),
			'changed_files' => count($item['changed_files']),
			'repo_id' => $item['repository_id'],
			'repository' => $repositories[$item['repository_id']],
			'revision' => $item['revision'],
			'time' => $html->time_elapsed_string(strtotime($item['time'])) . " ago"
		);

		$commits[] = $commit_info;
	}


	if($commits == null) {
		$error->trigger('No commit feed found. Check the config file for account settings OR commit something.'); 
	} 