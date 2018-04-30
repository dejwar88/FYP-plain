<?php

class Connection
{
	public static function getConnection(){
		try{
	       $conn = new PDO('mysql:host=localhost;dbname=plain_db', 'root', '210388');
		}
		catch (PDOException $exception)
		{
			echo "Oh no, there was a problem" . $exception->getMessage();
		}
		return $conn;
	}

	public static function closeConnection($conn)
	{
		$conn=null;
	}
}

?>
