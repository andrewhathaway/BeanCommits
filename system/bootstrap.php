<?php

	include 'autoload.php';

	$html = Html::getInstance();
	$error = Error::getInstance();	

	//Setup the config file
	if(file_exists('system/config.php')) {
		$config = require_once('system/config.php');
	} else {
		//Config does exist, help them out
		if(file_exists('system/config.php.default')) {
			$error->trigger('Rename config.php.default to config.php and enter details');
		} else {
			$error->trigger('You need a config.php. Grab the one from the repository.');
		}
	}



