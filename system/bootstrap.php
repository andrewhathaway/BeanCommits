<?php defined('SELF') or die();
	
	//Only class to be manually included
	include_once('autoload.php');

	$html = Html::getInstance();
	$error = Error::getInstance();	

	if(file_exists(SYS . 'config.php')) {
		$config = require_once('system/config.php');
	} else {
		if(file_exists(SYS . 'config.php.default')) {
			$error->trigger('Rename config.php.default to config.php and enter details');
		} else {
			$error->trigger('You need a config.php. Grab the one from the repository.');
		}
	}

	//Run content
	include_once(APP . 'index.php');





