<?php
include_once "helpers/auth.php";
if($_SESSION[role] =="admin")
{
  include_once "models/gym-class-model.php";

  $gymClid=$_GET['id'];
  if(GymClass::deleteGymClass($gymClid)){
      $msg="<p>Deleted gym class with id of ".$gymClid." from the database.</p>";
  }else{
      $msg="<p>There was a problem deleting the record.</p>";
  }
  include "list.php";

}else {
  header("Location: access.php");

}

?>
