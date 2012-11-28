<?php

	//Keep all page data handling in here etc
	
	//Required classes
	$html = Html::getInstance();
	$beanstalk = Beanstalk::getInstance();

	var_dump($beanstalk->request("GET", "changesets", array('hey' => 'sup', 'aite' => 'boo')));