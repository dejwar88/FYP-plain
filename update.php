<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "models/gym-class-model.php";

$id=$_POST['id'];
$room_id=$_POST['room_id'];
$pt_id=$_POST['pt_id'];
$type_id=$_POST['type_id'];
$date=$_POST['date'];
$timefrom=$_POST['timefrom'];
$timeto=$_POST['timeto'];

$msg="";

if(GymClass::updateGymClass($id,$room_id,$pt_id,$type_id,$date,$timefrom,$timeto)){
    $msg="<p>Successfully updated the details for ".$id."</p>";
}else{
    $msg="<p>There was a problem inserting the data.</p>";
}

include "list.php";
?>
