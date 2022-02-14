<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bf33a65e0a790e";$this->pass="985dc24a";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_f878adb6eed1989";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
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
