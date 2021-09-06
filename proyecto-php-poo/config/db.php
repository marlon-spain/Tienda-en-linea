<?php

class Database{
	public static function connect(){
		$db = new mysqli('PMYSQL132.dns-servicio.com:3306', 'marlon', '031132', '7775862_tienda_master');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

