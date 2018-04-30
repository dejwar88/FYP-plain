<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once "models/room-model.php";
include_once "models/pt-model.php";
include_once "models/class-type-model.php";
include_once "helpers/auth.php";

$rooms = Room::getAllRooms();
$pts = PersonalTrainer::getAllPersonalTrainers();
$classTypes = ClassType::getAllClassTypes();

if($_SESSION[role] =="admin")
{
  require "views/create-view.php";

}else {
  header("Location: access.php");

}


?>
