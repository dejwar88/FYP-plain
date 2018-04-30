<?php
include_once "models/connection-model.php";

class GymClass
{
		public static function getAllGymClasses()
		{
			$conn = Connection::getConnection();
			$query = "SELECT * FROM gym_classes ORDER BY gym_classes.created_at DESC";
			$resultset = $conn->query($query);
			$gymClasses = $resultset->fetchAll();
			Connection::closeConnection($conn);
			return $gymClasses;
		}

		public static function getGymClassById($gymClid)
		{
			$conn = Connection::getConnection();
			$stmt = $conn->prepare("SELECT * FROM gym_classes WHERE gym_classes.id = :id");
			$stmt->bindValue(':id',$gymClid);
			$stmt->execute();
			$gymClass=$stmt->fetch();
			Connection::closeConnection($conn);
			return $gymClass;
		}

		public static function deleteGymClass($gymclassId)
		{
			$conn = Connection::getConnection();
			$stmt = $conn->prepare("DELETE FROM gym_classes WHERE gym_classes.id = :id");
			$stmt->bindValue(':id',$gymclassId);
			$affected_rows=$stmt->execute();
			Connection::closeConnection($conn);
			if($affected_rows==1){
				return true;
			}
			return false;
		}

		public static function saveGymClass($fileToUpload, $room_id,$pt_id,$type_id,$date,$timefrom,$timeto)
		{
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imagename = $_FILES["fileToUpload"]["name"];
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			   // echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    //echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } else {
			       // echo "Sorry, there was an error uploading your file.";
			    }
			}
			$conn = Connection::getConnection();
			$query='INSERT INTO gym_classes (room_id, pt_id, type_id, date, timefrom, timeto,image) VALUES (:room_id, :pt_id, :type_id, :classdate, :timefrom, :timeto,:image)';
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
			$stmt=$conn->prepare($query);
			$stmt->bindValue(':room_id', $room_id);
			$stmt->bindValue(':pt_id', $pt_id);
			$stmt->bindValue(':type_id', $type_id);
			$stmt->bindValue(':classdate', $date);
			$stmt->bindValue(':timefrom', $timefrom);
			$stmt->bindValue(':timeto', $timeto);
			$stmt->bindValue(':image', $imagename);
			$affected_rows = $stmt->execute();
			Connection::closeConnection($conn);
			// print_r($conn->errorInfo());
			if($affected_rows==1){
				return true;
			}
			return false;
		}

		public static function updateGymClass($id,$room_id,$pt_id,$type_id,$date,$timefrom,$timeto)
		{
			$conn = Connection::getConnection();
			$query="UPDATE gym_classes SET room_id=:room_id, pt_id=:pt_id, type_id=:type_id, date=:classdate, timefrom=:timefrom, timeto=:timeto  WHERE id=:id";
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
			$stmt=$conn->prepare($query);
			$stmt->bindValue(':id', $id);
			$stmt->bindValue(':room_id', $room_id);
			$stmt->bindValue(':pt_id', $pt_id);
			$stmt->bindValue(':type_id', $type_id);
			$stmt->bindValue(':classdate', $date);
			$stmt->bindValue(':timefrom', $timefrom);
			$stmt->bindValue(':timeto', $timeto);
			$affected_rows = $stmt->execute();
			Connection::closeConnection($conn);
			 // print_r($conn->errorInfo());
			if($affected_rows==1){
				return true;
			}
			return false;
		}
}

?>
