<?php defined('SELF') or die();

class iOS {

	private static $instance;

	public static function getInstance() {
		if(!self::$instance) {
			self::$instance = new iOS();
		}

		return self::$instance;
	}

	public function find() {
		$ioshtml = '';
		$config = Config::get();
		$base = BASE . 'application/img/ios/';

		if(isset($config['ios'])) {
			$ios = $config['ios'];	

			if(isset($ios['app-capable']) && $ios['app-capable'] == true) {
				$ioshtml .= '<meta name="apple-mobile-web-app-capable" content="yes">';
			}

			if(isset($ios['status-bar'])) {
				$ioshtml .=  '<meta name="apple-mobile-web-app-status-bar-style" content="' . $ios['status-bar'] . '"/>';
			}

			if(isset($ios['detect-format']) && $ios['detect-format'] == true) {
				$ioshtml .=  '<meta name="format-detection" content="telephone=no">';
			}

			if(isset($ios['app-title'])) {
				$ioshtml .=  '<meta name="apple-mobile-web-app-title" content="' . $ios['app-title'] . '">';
			}

			if(isset($ios['app-icons'])) {
				$icons = $ios['app-icons'];
				$rel = 'apple-touch-icon';

				if(isset($icons['precomposed']) && $icons['precomposed'] == true) {
					$rel = 'apple-touch-icon-precomposed';
				}

				if(isset($icons['57x57'])) {
					$ioshtml .=  '<link rel="' . $rel . '" href="' . $base . $icons['57x57'] . '">';
				}

				unset($icons['57x57'], $icons['precomposed']);

				foreach($icons as $key => $path) {
					$ioshtml .=  '<link rel="' . $rel . '" sizes="' . $key . '"  href="' . $base . $path . '">';
				}
			} 

			if(isset($ios['start-screens'])) {
				$screens = $ios['start-screens'];

				if(isset($screens['320x460'])) {
					$ioshtml .=  '<link rel="apple-touch-startup-image" media="(device-width: 320px)" href="' . $base . $screens['320x460'] . '">';
				} 

				if(isset($screens['640x920'])) {
					$ioshtml .=  '<link rel="apple-touch-startup-image" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" href="' . $base . $screens['640x920'] . '">';
				}

				if(isset($screens['640x1096'])) {
					$ioshtml .=  '<link rel="apple-touch-startup-image" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" href="' . $base. 'application/img/ios/' . $screens['640x1096'] . '">';
				}

				if(isset($screens['landscape'])) {
					$landscape = $screens['landscape'];

					if(isset($landscape['1024x748'])) {
						$ioshtml .=  '<link rel="apple-touch-startup-image" sizes="1024x748" href="' . $base . $landscape['1024x748']  . '" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)">';
					}

					if(isset($landscape['2048x1496'])) {
						$ioshtml .=  '<link rel="apple-touch-startup-image" sizes="2048x1496" href="' . $base . $landscape['2048x1496'] . '" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 2)">';
					}
				}

				if(isset($screens['portrait'])) {
					$portrait = $screens['portrait'];

					if(isset($portrait['768x1004'])) {
						$ioshtml .=  '<link rel="apple-touch-startup-image" sizes="768x1004" href="' . $base . $portrait['768x1004'] . '" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)">';
					}

					if(isset($portrait['1536x2008'])) {
						$ioshtml .=  '<link rel="apple-touch-startup-image" sizes="1536x2008" href="' . $base . $portrait['1536x2008'] . '" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 2)">';
					}
				}

			}
		}

		return $ioshtml;
	}

}