<?php
include_once "models/connection-model.php";

class ClassType
{
		public static function getAllClassTypes()
		{
			$conn = Connection::getConnection();
			$query = "SELECT * FROM class_types";
			$resultset = $conn->query($query);
			$classtypes = $resultset->fetchAll();
			Connection::closeConnection($conn);
			return $classtypes;
		}

		public static function getClassTypeById($ctId)
		{
			$conn = Connection::getConnection();
			$stmt = $conn->prepare("SELECT * FROM class_types WHERE class_types.id = :id");
			$stmt->bindValue(':id',$ctId);
			$stmt->execute();
			$ct=$stmt->fetch();
			Connection::closeConnection($conn);
			return $ct;
		}
}

?>
