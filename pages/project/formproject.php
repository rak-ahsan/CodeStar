<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<div class="col-md-10  container d-flex justify-content-center  ">
 <div class="col-md-3"></div>
 <div class="col-md-4">
 <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class=" p-3">
    <div>
      <label for="pjname" class="form-label mt-3">Project Name</label>
      <input type="text" class="form-control mb-1 in" id="pjname" name="pjname">
    </div>
    <div>
      <label for="pjlocetion" class="form-label">Project Locetion</label>
      <input type="text" class="form-control mb-1 in" id="pjlocetion" name="pjloname">
    </div>
    <div>
      <label for="pjprice" class="form-label">Project Price</label>
      <input type="text" class="form-control mb-1 in" id="pjprice" name="pjpname">
    </div>
    <div>
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
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile" name='pic'>
  </div>
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
 </div>
 </div>
 <div class="col-md-3"></div>
</div>

<?php
if(isset($_POST['sub'])){
  $pjname=$_POST['pjname'];
  $pjlocetion=$_POST['pjloname'];
  $pjprice=$_POST['pjpname'];
  $status=$_POST['status'];
  $agent=$_POST['agent'];
  $image=$_FILES['pic'];
  $imageName='';
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }
if(!empty($pjname)&& !empty($pjlocetion)&& !empty($pjprice)&& !empty($status) && !empty($agent)){
  $sql ="INSERT INTO project (project_name,project_location,project_price,ls_id,land_agent_id,land_img )
   VALUES('$pjname','$pjlocetion','$pjprice','$status','$agent','$imageName')";
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($image['tmp_name'],'../../dist/images/land/'.$imageName);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
?>