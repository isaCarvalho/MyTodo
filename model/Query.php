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
		try
		{
			$stmt = self::conn()->prepare($query);
			$stmt->execute($array);
		}
		catch (PDOException $err)
		{
			echo $err->getMessage();
		}
	}

	public static function select($table, $values, $condition, $array = [])
	{
		try
		{
			$stmt = self::conn()->prepare("SELECT $values FROM $table WHERE $condition");
			$stmt->execute($array);

			return $stmt->fetchAll(PDO::FETCH_ASSOC); 
		} 
		catch (PDOException $err)
		{
			echo $err->getMessage();
		}
		return null;
	}

	public static function insert($table, $fields, $values, $array = [])
	{
		self::executeQuery("INSERT INTO $table ($fields) VALUES ($values)", $array);
	}

	public static function update($table, $value, $condition, $array = [])
	{
		self::executeQuery("UPDATE $table SET $value = ? WHERE $condition", $array);
	}

	public static function delete($table, $condition, $array = [])
	{
		self::executeQuery("DELETE FROM $table WHERE $condition", $array);
	}
}