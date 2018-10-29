<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>verkoopstaat</title>
  </head>

<body>

<?php require 'navbar.php'; ?>

<div class="out-frame">
<container>
  <div class="frame">
      <div class="frame-spacing"></div>

<div class="form-div">

    <form class="form-inline">
  <label for="inlineFormInput">van <br></label>
  <input class="form-control form-control-sm mr-sm-2" type="text" placeholder="" id="form-inline-div">
<br>
  <label for="inlineFormInput">tot <br></label>
  <input class="form-control form-control-sm mr-sm-2" type="text" placeholder="" id="form-inline-div">
<br>
  <button type="button" class="btn btn-primary btn-sm">bijwerken</button>
</form>
</div>

<div class="form-div">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Datum & Tijd</th>
      <th scope="col">Aantal</th>
      <th scope="col">Gewicht</th>
      <th scope="col">Prijs/kg</th>
      <th scope="col">Korting</th>
      <th scope="col">Notities</th>
      <th scope="col">Totale Prijs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
    <div class="frame-spacing"></div>
              </div>
            </div>

</container>
</div>
<?php require 'dashboard_bon_modal.php'?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
