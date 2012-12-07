<?php 

	//BEANCOMMITS -> This file sets defintions up and runs the Bootstrap
		
	//Running in system
	define('SELF', true);

	//Define some paths
	define('ROOT', pathinfo(__FILE__, PATHINFO_DIRNAME) . '/');
	define('APP', ROOT . 'application/');
	define('INCLUDES', APP . 'includes/');
	define('SYS', ROOT . 'system/');
	//define('BASE', "http://" . $_SERVER['SERVER_NAME'] . str_replace('index.php', '', $_SERVER['PHP_SELF']));
	define('BASE', 'http' . (empty($_SERVER['HTTPS']) ? '' : 's') . '://'. $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] == 80 ? '' : ':' . $_SERVER['SERVER_PORT']) . dirname($_SERVER['REQUEST_URI']) . '/' . (array_key_exists('extension', pathinfo($_SERVER['REQUEST_URI'])) ? '' : basename($_SERVER['REQUEST_URI'])));

	//Run BeanCommits - http://bukk.it/run.gif
	include_once(SYS . 'bootstrap.php');
