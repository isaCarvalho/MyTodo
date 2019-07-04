<?php

class Query
{
	private static $conn;

	public static function conn()
	{
		try
		{
			self::$conn = new PDO('pgsql:host=ec2-50-19-222-129.compute-1.amazonaws.com;dbname=daai4d9af0ek7v', 'footbtalruicvi', 'c90aafb2807df2562c7028e62acdcaf335bfba8d5cf725bf34284a5be5b376f7');
			self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return self::$conn;
		}
		catch (\PDOException $err)
		{
			die('Erro: '.$err->getMessage());
		}
	}

	public static function executeQuery($query, $array = [])
	{

		$stmt = self::conn()->prepare($query);
		$stmt->execute($array);

	}

	public static function select($table, $values, $condition, $array = [])
	{
		$query = "SELECT $values FROM $table WHERE $condition";

		$stmt = self::conn()->prepare($query);
		$stmt->execute($array);

		return $stmt->fetchAll(PDO::FETCH_ASSOC); 
	}

	public static function insert($table, $fields, $values, $array = [])
	{
		$query = "INSERT INTO $table ($fields) VALUES ($values)";
		self::executeQuery($query, $array);
	}

	public static function update($table, $value, $condition, $array = [])
	{
		$query = "UPDATE $table SET $value = ? WHERE $condition";
		self::executeQuery($query, $array);
	}

	public static function delete($table, $condition, $array = [])
	{
		$query = "DELETE FROM $table WHERE $condition";
		self::executeQuery($query, $array);
	}
}