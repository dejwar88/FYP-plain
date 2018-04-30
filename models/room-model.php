<?php
include_once "models/connection-model.php";

class Room {

	public static function getAllRooms()
	{
		$conn = Connection::getConnection();
		$query = "SELECT * FROM rooms";
		$resultset = $conn->query($query);
		$rooms = $resultset->fetchAll();
		Connection::closeConnection($conn);
		return $rooms;
	}

	public static function getRoomById($roomId)
	{
		$conn = Connection::getConnection();
		$stmt = $conn->prepare("SELECT * FROM rooms WHERE rooms.id = :id");
		$stmt->bindValue(':id',$roomId);
		$stmt->execute();
		$room=$stmt->fetch();
		Connection::closeConnection($conn);
		return $room;
	}

}


?>
