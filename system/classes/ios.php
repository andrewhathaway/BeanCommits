<?php defined('SELF') or die();

class iOS {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new iOS();
		}

		return self::$Instance;
	}

	public function find() {
		global $config;

		if(isset($config['ios'])) {
			$ios = $config['ios'];	

			if(isset($ios['app-capable']) && $ios['app-capable'] == true) {
				echo '<meta name="apple-mobile-web-app-capable" content="yes">';
			}

			if(isset($ios['status-bar'])) {
				echo '<meta name="apple-mobile-web-app-status-bar-style" content="' . $ios['status-bar'] . '"/>';
			}

			if(isset($ios['detect-format']) && $ios['detect-format'] == true) {
				echo '<meta name="format-detection" content="telephone=no">';
			}

			if(isset($ios['app-title'])) {
				echo '<meta name="apple-mobile-web-app-title" content="' . $ios['app-title'] . '">';
			}

			if(isset($ios['app-icons'])) {
				$icons = $ios['app-icons'];
				$rel = 'apple-touch-icon';

				if(isset($icons['precomposed']) && $icons['precomposed'] == true) {
					$rel = 'apple-touch-icon-precomposed';
				}

				if(isset($icons['57x57'])) {
					echo '<link rel="' . $rel . '" href="' . BASE . 'application/img/ios/' . $icons['57x57'] . '">';
				}

				unset($icons['57x57'], $icons['precomposed']);

				foreach($icons as $key => $path) {
					echo '<link rel="' . $rel . '" sizes="' . $key . '"  href="' . BASE . 'application/img/ios/' . $path . '">';
				}

			}
		}
	}

}