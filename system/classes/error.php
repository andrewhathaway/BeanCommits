<?php defined('SELF') or die();

class Error {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Error();
		}

		return self::$Instance;
	}

	public function trigger($message) {
		//Temp trigger
		echo $message; die;
	}

}