<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>winkel</title>
  </head>

<body>

    <?php require 'navbar.php';?>

<div class="out-frame">
<container>
  <div class="frame">
<div class="frame-spacing"></div>
  <div class="frame-2" id="click-options-winkel-div">
    <ul class="nav nav-tabs" style="margin-left:3px;">
  <li class="nav-item">
    <a class="nav-link" href="dashboard_winkel_intern.php">intern</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dashboard_winkel_extern.php">extern</a>
  </li>
</ul>
  </div>

  <div class="inside-frame">
    <form class="form-div">
  <div class="form-group">
    <label for="exampleInputEmail1">aantal:</label>
    <input class="form-control form-control-sm" type="number"/ id="input-width">
  </div>
  <div class="form-group">
    <label>gewicht:</label>
    <input class="form-control form-control-sm" type="text" placeholder="" id="input-width">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">prijs per kg:</label>
    <input class="form-control form-control-sm" type="text" placeholder="" id="input-width">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">schoonmaak</label>
  </div>
  <button type="button" class="btn btn-outline-info btn-sm" id="input-width">toevoegen aan bon</button>
  <br>
  <br>
  <button type="button" class="btn btn-outline-danger btn-sm" id="input-width">reset</button>
</form>

  <div class="frame-spacing"></div>
  </div>
</container>
    </div>
    <?php require 'dashboard_bon_modal.php';?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
