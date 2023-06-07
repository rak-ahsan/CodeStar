<?php include('../config/head.php')?>
<?php include('../config/sidebar.php')?>
<?php
    $id=$_GET['id'];
    $sql = "SELECT * FROM land where land_id = $id"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="col-md-10 ">
  <form method="post" class="form">
    <div class="col-md-4">
      <label for="land" class="form-label mt-3">Land Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="lname" value="<?php echo $row['land_name']?>">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Land Area</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="larea">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Land Cost</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="lcost">
    </div>
    <div class="col-md-4">
    <label for="larea" class="form-label">Status</label>
      <select class="form-select form-select-sm in mb-1" name="status" aria-label=".form-select-sm example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
      </select>
    </div>
    <div class="col-md-4">
    <label for="larea" class="form-label">Agent/Brokar</label>
      <select class="form-select form-select-sm in mb-3" name="agent" aria-label=".form-select-sm example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
      </select>
    </div>
    <div class="mb-3 col-md-4">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile">
  </div>
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
</div>

<?php
if(isset($_POST['sub'])){
  $lname=$_POST['lname'];
  $larea=$_POST['larea'];
  $lcost=$_POST['lcost'];
if(!empty($lname)&& !empty($larea)&& !empty($lcost)){
  $sql ="INSERT INTO land (land_name,land_area,land_cost) VALUES('$lname','$larea','$lcost')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}




?>