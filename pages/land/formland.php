<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<div class="col-md-10 ">
  <form method="post" class="form" enctype="multipart/form-data">
    <div class="col-md-4">
      <label for="land" class="form-label mt-3">Land Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="lname">
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
        <?php
         $sql = "SELECT * FROM land_status"; 
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
        ?>
          <option value= "<?php echo$row['ls_id'];?>"><?php echo$row['is_name'];?></option>
          <?php }?>
      </select>
    </div>
    <div class="col-md-4">
    <label for="larea" class="form-label">Agent</label>
      <select class="form-select form-select-sm in mb-1" name="agent" aria-label=".form-select-sm example">
      <option selected>Select Agent</option>
        <?php
         $sql = "SELECT * FROM land_agent"; 
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
        ?>
          <option value= "<?php echo $row['land_agent_id'];?>"> 
          <?php echo$row['land_agent_name'];?>
        </option>
          <?php }?>
      </select>
    </div>
    <div class="mb-3 col-md-4">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile" name='pic'>
  </div>
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
</div>

<?php
if(isset($_POST['sub'])){
  $lname=$_POST['lname'];
  $larea=$_POST['larea'];
  $lcost=$_POST['lcost'];
  $status=$_POST['status'];
  $agent=$_POST['agent'];
  $image=$_FILES['pic'];
  $imageName='';
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }
if(!empty($lname)&& !empty($larea)&& !empty($lcost)&& !empty($status) && !empty($agent)){
  $sql ="INSERT INTO land (land_name,land_area,land_cost,ls_id,land_agent_id,land_img ) VALUES('$lname','$larea','$lcost','$status','$agent','$imageName')";
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($image['tmp_name'],'../upload/'.$imageName);
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
?>