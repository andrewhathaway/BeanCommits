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
		$content = '<div class="error-message"><h2>Oh noes!</h2><p>' . $message . '</p></div>';
		echo $content; die;
	}

}