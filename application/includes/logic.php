<?php

	//Keep all page data handling in here etc
	
	//Required classes
	$html = Html::getInstance();
	$beanstalk = Beanstalk::getInstance();

	$feed = $beanstalk->request("GET", "changesets");