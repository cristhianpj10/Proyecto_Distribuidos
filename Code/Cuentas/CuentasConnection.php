<?php

class Connection {

	const SERVER_NAME = "34.123.255.217";
	const USER_NAME = "root";
	const PASSWORD = "root123";
	const DATABASE = "sd_db";

	public static function getConnection() {
		$cnx = new mysqli(self::SERVER_NAME, self::USER_NAME, self::PASSWORD, self::DATABASE);
		echo "> Conexion a la bd: abierta.\n";
		return $cnx;
	}
}

?>