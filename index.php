<!-- <!DOCTYPE HTML>
<html>
<head>
<title>Dejwar Gym</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
	<li><a href="create.php">Create</a></li>
	<li><a href="edit.php">Update</a></li>
	<li><a href="delete.php">Delete</a></li>
	<a href="logout.php">Logout</a>

</ul>
</body>
</html> -->

<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include_once "models/gym-class-model.php";
include_once "models/pt-model.php";
include_once "models/class-type-model.php";
include_once "models/room-model.php";
include_once "helpers/auth.php";

$gymCls = GymClass::getAllGymClasses();
require "views/list-view.php";
?>
