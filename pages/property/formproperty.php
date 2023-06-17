<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<div class="col-md-12  container d-flex justify-content-center ">
 <div class="col-md-4">
 <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class=" p-3">
    <div>
      <label for="prop" class="form-label mt-3">Apartment Name</label>
      <input type="text" class="form-control mb-1 in" id="prop" name="pname">
    </div>
    <div>
      <label for="ploc" class="form-label">Apartment Location</label>
      <input type="text" class="form-control mb-1 in" id="ploc" name="ploname">
    </div>
    <div>
      <label for="pcost" class="form-label">Apartment Total Cost</label>
      <input type="text" class="form-control mb-1 in" id="pcost" name="pconame">
    </div>
    <div>
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
    <div>
    <label for="larea" class="form-label">Availability</label>
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
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile" name='pic'>
  </div>
    <button type="submit" class="btn btn-secondary" name="sub">Submit</button>
    <a  type="button"  href="propertyview.php" class="btn btn-secondary float-end">View All Proparty</a>
  </form>
 </div>
 </div>
</div>

<?php
if(isset($_POST['sub'])){
  $pname=$_POST['pname'];
  $plocetion=$_POST['ploname'];
  $pcost=$_POST['pconame'];
  $agent=$_POST['agent'];
  $status=$_POST['status'];
  $image=$_FILES['pic'];
  $imageName='';
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }
if(!empty($pname)&& !empty($plocetion)&& !empty($pcost) && !empty($agent)){
  $sql ="INSERT INTO property (property_name,property_location,property_cost,land_agent_id,ls_id,land_img ) VALUES('$pname',' $plocetion','$pcost','$agent','$status','$imageName')";
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($image['tmp_name'],'../../dist/images/land/'.$imageName);
  } else {
  }
}
}
?>