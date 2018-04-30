<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "models/gym-class-model.php";
include_once "models/room-model.php";
include_once "models/pt-model.php";
include_once "models/class-type-model.php";

$gymClid=$_GET['id'];

$gymClass = GymClass::getGymClassById($gymClid);
// $room = Room::getRoomById($gymClass["room_id"]);
// $pt = PersonalTrainer::getPersonalTrainerById($gymClass["pt_id"]);
// $classType = ClassType::getClassTypeById($gymClass["type_id"]);

require "views/details-view.php";
?>
