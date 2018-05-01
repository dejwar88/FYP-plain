<!DOCTYPE HTML>
<html>
<head>
<title>Edit class details</title>
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    Edit Class details
                </div>
                <div class="card-body">
                  <form id="editForm" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $gymClass["id"]; ?>">
                    <div class="form-group">
                      <label for="room_id" class="control-label">Room</label>
                      <div class="dropdown">
                        <select id="room_id" class="form-control" name="room_id">
                          <?php foreach ($rooms as $room) { ?>
                            <option value='<?php echo $room["id"];?>' <?php if($gymClass["room_id"] == $room["id"]) echo 'selected="selected"'; ?> ><?php echo $room["code"];?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pt_id" class="control-label">Personal Trainer</label>
                      <div class="dropdown">
                        <select id="pt_id" class="form-control" name="pt_id">
                          <?php foreach ($pts as $pt) { ?>
                            <option value='<?php echo $pt["id"];?>' <?php if($gymClass["pt_id"] == $pt["id"]) echo 'selected="selected"'; ?>><?php echo $pt["name"];?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="type_id" class="control-label">Class Type</label>
                      <div class="dropdown">
                        <select id="type_id" class="form-control" name="type_id">
                          <?php foreach ($classTypes as $clsTyp) { ?>
                            <option value='<?php echo $clsTyp["id"];?>' <?php if($gymClass["type_id"] == $clsTyp["id"]) echo 'selected="selected"'; ?>><?php echo $clsTyp["name"];?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="date" class="control-label">Class Date</label>
                      <input type="date" name="date" value="<?php echo $gymClass["date"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="timefrom" class="control-label">Class Time From</label>
                      <input type="time" name="timefrom" value="<?php echo $gymClass["timefrom"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="timeto" class="control-label">Class Time To</label>
                      <input type="time" name="timeto" value="<?php echo $gymClass["timeto"]; ?>">
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                    <input form="editForm" type="submit" name="submitBtn" class="btn btn-sm btn-primary" value="Update class details">
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
