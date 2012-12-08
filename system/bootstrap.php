<?php defined('SELF') or die();

	//BEANCOMMITS 

	//This file sets up config files and then runs the application
	
	//Only class to be manually included
	include_once(SYS . 'autoload.php');
	
	$error = Error::getInstance();	

	if(file_exists('config.php')) {
		$config = require_once('config.php');
	} else {
		if(file_exists('config.php.default')) {
			$error->trigger('Rename config.php.default to config.php and enter details');
		} else {
			$error->trigger('You need a config.php. Grab the one from the repository.');
		}
	}

	if(isset($_GET['404'])) {
		$error->trigger('This page was not found. Sorry for that.');
	}
	
	include_once(APP . 'index.php');







