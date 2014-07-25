<?php
/* Dylan Irzi */
/* Developers WebSecurityDev */

session_start();

class RequestProtection {
	private $previous_hash;
	public $hash;

	function __construct() {

		if( isset($_SESSION['request_token']) ) {
			$this->previous_hash = $_SESSION['request_token'];
		}

		$this->hash = $_SESSION['request_token'] = md5(uniqid());
			}
	public function is_valid($key = 'csrf_token') {
		return (isset($_POST[$key]) && ($_POST[$key] == $this->previous_hash)) ||
			   (isset($_GET[$key]) && ($_GET[$key] == $this->previous_hash));
	}
	public function meta_tag() {
		return '<meta name="csrf_token" value="' . $this->hash .' "  />';

	}
}
?>
