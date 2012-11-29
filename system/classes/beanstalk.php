<?php defined('SELF') or die();

class Beanstalk {
			
	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Beanstalk();
		}

		return self::$Instance;
	}

	public function request($type, $endpoint, $data = array(), $forceError = false) {
		global $config;
		$error = Error::getInstance();

		$base = "http://" . $config['account'] . ".beanstalkapp.com/api/";

		$curl = curl_init();

		$options = array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_USERPWD => $config['username'] . ":" . $config['password']
		);

		$url = $base . $endpoint . ".json";	

		if($type == "GET") {
			$url .= "?" . http_build_query($data);
		}

		$options[CURLOPT_URL] = $url;

		if($type == "POST") {
			$options[CUROPT_POSTFIELDS] = $data;
		}

		foreach($options as $key => $option) {
			curl_setopt($curl, $key, $option);
		}

		$response = curl_exec($curl);
		$json = json_decode($response, true);

		if($forceError == true) {
			$json['errors'][0] = "This is a forced error. For testing, obviously.";
		}

		if(isset($json['errors'])) {
			$message = $json['errors'][0];
			$error->trigger($message);
		} else {
			return $json;
		}

	}

}