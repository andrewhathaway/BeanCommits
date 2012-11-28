<?php defined('SELF') or die();

	spl_autoload_register(function($class) {
		$path = SYS . 'classes/' . $class . '.php';

		if(file_exists($path)) {
			include($path);
		} else {
			echo "Error loading Class" . $path;
		}
	});