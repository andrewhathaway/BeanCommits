<?php defined('SELF') or die();

class Html {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Html();
		}

		return self::$Instance;
	}

	//Includes CSS file(s) depending on Config
	public function css() {
		global $config;

		if(isset($config['css'])) {
			if(!is_array($config['css'])) {
				$this->echoCSS($config['css']);
			} else {
				foreach($config['css'] as $file) {
					$this->echoCSS($file);
				}
			}
		} else {
			$this->echoCSS('screen');
			$this->echoCSS('animate.min');
		}
	}

	//Saves repeating
	public function echoCSS($file) {
		echo '<link rel="stylesheet" href="application/css/' . $file . '.css">';
	}

}