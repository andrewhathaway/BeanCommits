<?php

	//Keep all page data handling in here etc
	
	//Required classes
	$html = Html::getInstance();
	$beanstalk = Beanstalk::getInstance();

	$page = 1;

	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	}

	$params = array('page' => $page);

	if(isset($_GET['repository'])) $params['repository_id'] = $_GET['repository'];
	if(isset($_GET['revision'])) $params['revision'] = $_GET['revision'];

	//Get feed
	$feed = $beanstalk->request('GET', 'changesets', $params);

	//Get repositories
	$repos = $beanstalk->request('GET', 'repositories');

	//Make array out of repositories
	$repositories = array();	

	foreach($repos as $repo) {
		$id = $repo['repository']['id'];

		if(!isset($repositories[$id])) {
			$repositories[$id] =  $repo['repository']['title'];
		}
	}
