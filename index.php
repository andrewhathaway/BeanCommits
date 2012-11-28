<?php 
		
	//Running in system
	define('SELF', true);

	//Define some paths
	define('ROOT', pathinfo(__FILE__, PATHINFO_DIRNAME) . '/');
	define('INCLUDES', ROOT . '/includes/');
	define('APP', ROOT . '/application/');
	define('SYS', ROOT . '/system/');

	//Boot BeanCommits
	include_once('system/bootstrap.php');
