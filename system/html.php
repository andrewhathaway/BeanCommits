<?php

class Html {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Html();
		}

		return self::$Instance;
	}

	//Includes CSS files depending on Config
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
		}
	}

	public function echoCSS($file) {
		echo '<link rel="stylesheet" href="css/' . $file . '.css">';
	}

}