<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once "models/gym-class-model.php";
include_once "models/room-model.php";
include_once "models/pt-model.php";
include_once "models/class-type-model.php";


include_once "helpers/auth.php";

if($_SESSION[role] =="admin")
{
  $gymClid=$_GET['id'];

  $gymClass = GymClass::getGymClassById($gymClid);
  $rooms = Room::getAllRooms();
  $pts = PersonalTrainer::getAllPersonalTrainers();
  $classTypes = ClassType::getAllClassTypes();
  require "views/edit-view.php";

}else {
  echo "user";
  header("Location: access.php");

}

?>
