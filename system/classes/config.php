<?php defined('SELF') or die();

class Config {

	private static $config;

	public static function get() {
		if(!static::$config) {
			static::$config = require_once(ROOT . 'config.php');
		}

		return static::$config;
	} 

}
