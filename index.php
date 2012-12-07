<?php 

	//BEANCOMMITS -> This file sets defintions up and runs the Bootstrap
		
	//Running in system
	define('SELF', true);

	//Define some paths
	define('ROOT', pathinfo(__FILE__, PATHINFO_DIRNAME) . '/');
	define('APP', ROOT . 'application/');
	define('INCLUDES', APP . 'includes/');
	define('SYS', ROOT . 'system/');
	define('BASE', "http://" . $_SERVER['SERVER_NAME'] . str_replace('index.php', '', $_SERVER['PHP_SELF']));

	//Run BeanCommits - http://bukk.it/run.gif
	include_once(SYS . 'bootstrap.php');
