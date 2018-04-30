<?php
include_once "models/connection-model.php";

class PersonalTrainer
{
	public static function getAllPersonalTrainers()
	{
		$conn = Connection::getConnection();
		$query = "SELECT * FROM personal_trainers";
		$resultset = $conn->query($query);
		$pts = $resultset->fetchAll();
		Connection::closeConnection($conn);
		return $pts;
	}

	public static function getPersonalTrainerById($ptId)
	{
		$conn = Connection::getConnection();
		$stmt = $conn->prepare("SELECT * FROM personal_trainers WHERE personal_trainers.id = :id");
		$stmt->bindValue(':id',$ptId);
		$stmt->execute();
		$pt=$stmt->fetch();
		Connection::closeConnection($conn);
		return $pt;
	}
}
?>
