<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<?php
    $id=$_GET['id'];
    $sql = "SELECT * FROM metarial where metarial_id = $id"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="col-md-10  container d-flex justify-content-center bg-light ">
 <div class="col-md-3"></div>
 <div class="col-md-4">
 <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class=" p-3">
    <div>
      <label for="metaril" class="form-label mt-3">Metarials Name</label>
      <input type="text" class="form-control mb-1 in" id="metaril" name="mname" value="<?= $row['metarial_name']?>">
      <input type="hidden" class="form-control mb-1 in" id="metaril" name="id" value="<?= $row['metarial_id']?>">
    </div>
    <div>
      <label for="mlist" class="form-label">Metarial Listing</label>
      <input type="text" class="form-control mb-1 in" id="mlist" name="mliname" value="<?= $row['metarial_listing']?>">
    </div>
    <div>
      <label for="mprice" class="form-label">Metarial Pricing</label>
      <input type="text" class="form-control mb-1 in" id="mprice" name="mpname" value="<?= $row['metarial_price']?>">
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
  $id=$_POST['id'];
  $mname=$_POST['mname'];
  $mlisting=$_POST['mliname'];
  $mprice=$_POST['mpname'];
  $status=$_POST['status'];
  $agent=$_POST['agent'];
  $image=$_FILES['pic'];
  $imageName='';
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }
if(!empty($mname)&& !empty($mlisting)&& !empty($mprice)&& !empty($status) && !empty($agent)){
    $sql = "UPDATE metarial SET metarial_name='$mname', metarial_listing='$mlisting' , metarial_price='$mprice'   WHERE metarial_id=$id";
  if ($conn->query($sql) === TRUE) {
    header("location:mview.php");
    move_uploaded_file($image['tmp_name'],'../../dist/images/land/'.$imageName);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
?>

