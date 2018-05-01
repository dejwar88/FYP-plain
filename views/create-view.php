<!DOCTYPE HTML>
<html>
<head>
<title>Add a new class</title>
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
                    Add a new Gym Class
                </div>
                <div class="card-body">
                  <form id='submitForm' action="save.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="room_id" class="control-label">Room</label>
                      <div class="dropdown">
                        <select id="room_id" class="form-control" name="room_id">
                          <?php foreach ($rooms as $room) { ?>
                            <option value='<?php echo $room["id"] ?>'><?php echo $room["code"] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pt_id" class="control-label">Personal Trainer</label>
                      <div class="dropdown">
                        <select id="pt_id" class="form-control" name="pt_id">
                          <?php foreach ($pts as $pt) { ?>
                            <option value='<?php echo $pt["id"] ?>'><?php echo $pt["name"] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="type_id" class="control-label">Class Type</label>
                      <div class="dropdown">
                        <select id="type_id" class="form-control" name="type_id">
                          <?php foreach ($classTypes as $clsTyp) { ?>
                            <option value='<?php echo $clsTyp["id"] ?>'><?php echo $clsTyp["name"] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="date" class="control-label">Class Date</label>
                      <input type="date" name="date">
                    </div>
                    <div class="form-group">
                      <label for="timefrom" class="control-label">Class Time From</label>
                      <input type="time" name="timefrom">
                    </div>
                    <div class="form-group">
                      <label for="timeto" class="control-label">Class Time To</label>
                      <input type="time" name="timeto">
                    </div>
                      <input type="file" accept=".jpeg" name="fileToUpload" id="fileToUpload">

                  </form>
                </div>
                <div class="card-footer">
                  <input form="submitForm" type="submit" name="submitBtn" class="btn btn-sm btn-primary" value="Create Class">
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
