<?php

class LocalException extends Exception {
	public function errorMessage() 	{
		return $this->getMessage();
	}

	static public function handleError($errno, $errstr, $errfile, $errline, array $errcontext) {
		// error was suppressed with the @-operator
		if (0 === error_reporting()) {
			return false;
		}

		throw new Exception($errstr);
	}

	static public function prepareErrorHandler() {
		set_error_handler(array(__CLASS__, "handleError"));
	}
}