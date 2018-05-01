<!DOCTYPE HTML>
<html>
<head>
<title>List the gym classes</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="list.php">Plain PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="list.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Create a class</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<?php
echo $msg;
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    Classes list
                </div>
                <div class="card-body">
                  <table class="table">
                    <tr>
                      <th>Room code</th>
                      <th>Personal Trainer</th>
                      <th>Class type</th>
                      <th>Date</th>
                      <th>Time From</th>
                      <th>Time To</th>
                      <th></th>
                    </tr>
                    <?php foreach ($gymCls as $gymCl) { ?>
                    <tr>
                      <td>
                        <?php echo Room::getRoomById($gymCl["room_id"])["code"]; ?>
                      </td>
                      <td>
                        <?php echo PersonalTrainer::getPersonalTrainerById($gymCl["pt_id"])["name"] ; ?>
                      </td>
                      <td>
                        <?php echo ClassType::getClassTypeById($gymCl["type_id"])["name"] ; ?>
                      </td>
                      <td>
                        <?php echo $gymCl["date"]; ?>
                      </td>
                      <td>
                        <?php echo $gymCl["timefrom"]; ?>
                      </td>
                      <td>
                        <?php echo $gymCl["timeto"]; ?>
                      </td>
                      <td>
                        <a href='details.php?id=<?php echo $gymCl["id"];?>' class="btn btn-sm btn-primary">Details</a>
                        <a href='edit.php?id=<?php echo $gymCl["id"];?>' class="btn btn-sm btn-warning">Edit</a>
                        <a href='delete.php?id=<?php echo $gymCl["id"];?>' class="btn btn-sm btn-danger">Cancel</a>
                      </td>
                    </tr>
                    <?php }  ?>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
