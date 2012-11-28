<?php

	spl_autoload_register(function($class) {
		$path = ROOT . '/system/classes/' . $class . '.php';
		if(file_exists($path)) {
			include($path);
		} else {
			echo "Error loading Class" . $path;
		}
	});