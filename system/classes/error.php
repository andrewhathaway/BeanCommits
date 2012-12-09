<?php defined('SELF') or die();

class Error {

	private static $instance;

	public static function getInstance() {
		if(!self::$instance) {
			self::$instance = new Error();
		}

		return self::$instance;
	}

	public function trigger($error_message) {
		include_once(APP . 'error.php');
		die; // Stop rest of page loading
	}

}