<?php defined('SELF') or die();

class Html {

	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Html();
		}

		return self::$Instance;
	}

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

	public function currentURL() {
		return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}

	public function baseURL() {
		$url = $this->currentURL();
		$new = explode('?', $url);
		return $new[0];
	}

	//Saves repeating
	public function echoCSS($file) {
		echo '<link rel="stylesheet" href="' . BASE . '/application/css/' . $file . '.css">';
	}

	public function getGravatar($email) {
		return "http://www.gravatar.com/avatar/" . md5(strtolower($email));
	}

	function time_elapsed_string($ptime) {
	    $etime = time() - $ptime;
	    
	    if ($etime < 1) {
	        return '0 seconds';
	    }
	    
	    $a = array( 12 * 30 * 24 * 60 * 60  =>  'year',
	                30 * 24 * 60 * 60       =>  'month',
	                24 * 60 * 60            =>  'day',
	                60 * 60                 =>  'hour',
	                60                      =>  'minute',
	                1                       =>  'second'
	                );
	    
	    foreach ($a as $secs => $str) {
	        $d = $etime / $secs;
	        if ($d >= 1) {
	            $r = round($d);
	            return $r . ' ' . $str . ($r > 1 ? 's' : '');
	        }
	    }
	}

}