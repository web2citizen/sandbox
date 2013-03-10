<?php
use \Model_Crud;
class Model_Post extends Model_Crud
{
	protected static $_table_name = 'posts';
	public static function findMongo()
	{
		$table = self::$_table_name;
		$mongodb = \Mongo_Db::instance();
		return $mongodb->get($table);
	}
	
	public static function insertMongo($data)
	{
		$table = self::$_table_name;
		$mongodb = \Mongo_Db::instance();
		return $mongodb->insert($table, $data);
	}

}
