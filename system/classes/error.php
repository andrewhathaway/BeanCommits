<?php

class Error {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Error();
		}

		return self::$Instance;
	}

	public function trigger($message) {
		echo $message; die;
	}

}