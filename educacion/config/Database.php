<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="caffinad_wp112";$this->pass="Sq3p@7iv(2";$this->host="localhost";$this->ddbb="caffinad_wp112";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
