<!DOCTYPE HTML>
<html>
<head>
<title>Class details</title>
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
                    Class details
                </div>
                <div class="card-body">
                  <?php echo $gymClass["id"]; ?> <br>
                  <?php echo Room::getRoomById($gymClass["room_id"])["code"]; ?>
                  <br>
                  <?php echo PersonalTrainer::getPersonalTrainerById($gymClass["pt_id"])["name"] ; ?>
                  <br>
                  <?php echo ClassType::getClassTypeById($gymClass["type_id"])["name"] ; ?>
                  <br>
                  <?php echo $gymClass["date"]; ?>
                  <br>
                  <?php echo $gymClass["timefrom"]; ?>
                  <br>
                  <?php echo $gymClass["timeto"]; ?>
                  <br>
                  <img src="../FYP/storage/app/<?php echo $gymClass["image"]; ?>" alt="">

              </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>
