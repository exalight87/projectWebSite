<?php

/**
* 
*/
class Session
{
	
	static $instance;

	static function getInstance(){
		if (!self::$instance) {
			self::$instance = new Session();
		}
		return self::$instance;
	}

	function __construct()
	{
		session_start();
	}

	public function addUser($user){
		$_SESSION['auth']=$user;
	}

	static function delUser(){
		unset($_SESSION['auth']);
	}

	static function showUser(){
		return $_SESSION['auth'];
	}

	public function isConnect(){
		return isset($_SESSION['auth']);
	}

	public function setFlash($key, $message){
		$_SESSION['flash'][$key]=$message;
	}

	

	public function hasflashes(){
		return isset($_SESSION['flash']);
	}

	public function getFlashes(){
		$flash = $_SESSION['flash'];
		unset($_SESSION['flash']);
		return $flash;
	}



}