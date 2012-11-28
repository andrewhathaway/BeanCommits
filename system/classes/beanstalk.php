<?php

class Beanstalk {
			
	private static $Instance;

	public static function getInstance() {
		if(!self::$Instance) {
			self::$Instance = new Beanstalk();
		}

		return self::$Instance;
	}

	

}