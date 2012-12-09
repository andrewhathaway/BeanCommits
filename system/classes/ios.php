<?php defined('SELF') or die();

class iOS {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new iOS();
		}

		return self::$Instance;
	}

	public function bar() {
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

				if(isset($icons['72x72'])) {
					echo '<link rel="' . $rel . '" sizes="72x72"  href="' . BASE . 'application/img/ios/' . $icons['72x72'] . '">';
				}

				if(isset($icons['114x114'])) {
					echo '<link rel="' . $rel . '" sizes="114x144" href="' . BASE . 'application/img/ios/' . $icons['114x114'] . '">';
				}

				if(isset($icons['144x144'])) {
					echo '<link rel="' . $rel . '" sizes="144x144" href="' . BASE . 'application/img/ios/' . $icons['144x144'] . '">';
				}

			}
		}
	}

}