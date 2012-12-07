<?php	
	//Required classes
	$html = Html::getInstance();
	$beanstalk = Beanstalk::getInstance();

	//Get repositories & create array
	$repos = $beanstalk->request('GET', 'repositories');
	$repositories = array();	

	foreach($repos as $repo) {
		$id = $repo['repository']['id'];

		if(!isset($repositories[$id])) {
			$repositories[$id] =  $repo['repository']['title'];
		}
	}

	//Setup parameters for GET request
	$page = 1;
	if(isset($_GET['page'])) $page = $_GET['page'];
	$params = array('page' => $page);
	if(isset($_GET['repository'])) $params['repository_id'] = $_GET['repository'];
	if(isset($_GET['revision'])) $params['revision'] = $_GET['revision'];

	//Get feed & create nicer array of commits
	$commits = array();
	$feed = $beanstalk->request('GET', 'changesets', $params);

	foreach($feed as $item) {
		//Saves repeat revision_cache index
		if(!isset($_GET['revision'])) $item = $item['revision_cache'];

		//Do not add to array if contains [hide]
		if(strpos($item['message'], '[hide]') !== false) continue;

		$commit_info = array(
			'hash' => $item['hash_id'],
			'message' => $item['message'],
			'gravatar' => $html->getGravatar($item['email']),
			'changed_files' => count($item['changed_files']),
			'repository' => $repositories[$item['repository_id']],
			'time' => $html->time_elapsed_string(strtotime($item['time'])) . " ago"
		);

		$commits[] = $commit_info;
	}
