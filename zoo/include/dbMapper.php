<?php
if (!defined('TEST_INCLUDE'))
    die("Vous ne pouvez pas accéder directement à ce fichier !");

class DBMapper
{
	protected static $database;
	
	static function init ($db)
	{
		self::$database = $db;
	}

}
