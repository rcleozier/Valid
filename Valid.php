<?php

namespace Valid;

use \Exception;

class Valid {

    /**
     * Available Methods
     *
     */
    private static $methods = [
    	'email'    => FILTER_VALIDATE_EMAIL,
    	'int'      => FILTER_VALIDATE_INT,
    	'ip'       => FILTER_VALIDATE_IP,
    	'bool'     => FILTER_VALIDATE_BOOLEAN,
    	'boolean'  => FILTER_VALIDATE_BOOLEAN,
    	'float'    => FILTER_VALIDATE_FLOAT,
    	'mac'      => FILTER_VALIDATE_MAC,
    	'regex'    => FILTER_VALIDATE_REGEXP,
    	'url'      => FILTER_VALIDATE_URL,
    	'float'    => FILTER_FLAG_ALLOW_THOUSAND
    ];

    /**
     * Magic static method to call available methods
     *
     */
  	public static function __callStatic($method, $args) {
  		if (!array_key_exists($method, self::$methods)) {
  			throw new Exception('Method not defined.');
  		}

        $arg = (isset($args[0]) ? $args[0] : false );
        $method = self::$methods[$method];

        return self::sendResult($arg, $method);
  	}

    private static function sendResult($arg, $method) {
       return filter_var($arg, $method) !== false; 
    }
}
?>