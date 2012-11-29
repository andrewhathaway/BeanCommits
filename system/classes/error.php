<?php defined('SELF') or die();

class Error {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Error();
		}

		return self::$Instance;
	}

	public function trigger($error_message) {
		include_once(APP . 'error.php');
		die; // Stop rest of page loading
	}

}