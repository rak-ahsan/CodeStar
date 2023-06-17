<?php include('../../includes/conf.php');
  get_header();
  get_side();

    $userid = $_GET['id'];
    $sql = "SELECT * FROM booking where bking_id = $userid";  // id value name changes 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="col-md-10  container d-flex justify-content-center bg">
 <div class="col-md-4">
 <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class=" p-3">
    <div>
      <label for="name" class="form-label mt-3">Name</label>
      <input type="text" class="form-control mb-1 in" id="name" name="bname">
    </div>
    <div>
      <label for="bkarea" class="form-label">Address</label>
      <input type="text" class="form-control mb-1 in" id="bkarea" name="barea">
    </div>
    <div>
      <label for="bcost" class="form-label">Booking Cost</label>
      <input type="text" class="form-control mb-1 in" id="bcost" name="bcost">
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
    <button type="submit" class="btn btn-secondary " name="sub">Submit</button>
    <a  type="button"  href="landview.php" class="btn btn-secondary float-end">View All land</a>
  </form>
 </div>
 </div>
</div>
 
<?php
if(isset($_POST['sub'])){
  $bname=$_POST['bname'];
  $barea=$_POST['barea'];
  $bcost=$_POST['bcost'];
  $status=$_POST['status'];
  $agent=$_POST['agent'];
  $image=$_FILES['pic'];

  $sql = "UPDATE booking SET bkng_name='$bname', bkng_area='$barea' , bkng_cost='$bcost' , land_agent_id= '$agent',
  ls_id = '$status'  WHERE bking_id=$id";
  if ($conn->query($sql) === TRUE) {
        header('Location: bookingview.php');
      }else{
        echo "User image update failed.";
      }
  
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

    $updateImg="UPDATE booking SET land_img='$imageName' WHERE bking_id='$id'";
    if($conn->query($updateImg) === TRUE){
      move_uploaded_file($image['tmp_name'],'../../dist/images/land/'.$imageName);
      // header('Location:landview.php');
    }else{
      echo "User image update failed.";
    }
  }
} else {

} 
?>

