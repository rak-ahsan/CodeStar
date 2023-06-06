<?php include('../config/header.php')?>
<?php include('../config/sidebar.php')?>

<div class="col-10 form">
<form method="post">
  <div class="col-4">
    <label for="land" class="form-label mt-3">Land Name</label>
    <input type="text" class="form-control mb-3 in" id="land" name="lname">
  </div>
  <div class="col-4">
    <label for="larea" class="form-label">Land Area</label>
    <input type="text" class="form-control mb-3 in" id="larea" name="larea">
  </div>
  <div class="col-4">
    <label for="larea" class="form-label">Land Cost</label>
    <input type="text" class="form-control mb-3 in" id="larea" name="lcost">
  </div>
  <div class="col-2">
  <label for="larea" class="form-label">Status</label>
    <select class="form-select form-select-sm in mb-3" aria-label=".form-select-sm example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>