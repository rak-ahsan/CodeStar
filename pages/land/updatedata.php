<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<?php
    $id=$_GET['id'];
    $sql = "SELECT * FROM land where land_id = $id"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="col-md-10 ">
  <form method="post" class="form" enctype="multipart/form-data">
    <div class="col-md-4">
      <label for="land" class="form-label mt-3">Land Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="lname" value="<?= $row['land_name']?>">
      <input type="hidden" class="form-control mb-1 in" id="land" name="land_id" value="<?= $row['land_id']?>">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Land Area</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="larea" value="<?= $row['land_area']?>">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Land Cost</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="lcost" value="<?= $row['land_cost']?>">
    </div>
    <div class="col-md-4">
    <label for="larea" class="form-label">Status</label>
      <select class="form-select form-select-sm in mb-1" name="status" aria-label=".form-select-sm example">
      <option >Open this select menu</option>
        <?php
         $sql = "SELECT * FROM land_status"; 
         $result = $conn->query($sql);
         while ($rows = $result->fetch_assoc()) {
        ?>
          <option value= "<?=$rows['ls_id'];?>" <?php if($rows['ls_id']==$row['ls_id']){echo 'selected';}?>><?php echo$rows['is_name'];?></option>
          <?php }?>
      </select>
    </div>
    <div class="col-md-4">
    <label for="larea" class="form-label">Agent</label>
      <select class="form-select form-select-sm in mb-1" name="agent" aria-label=".form-select-sm example">
      <option>Select Agent</option>
        <?php
         $sql = "SELECT * FROM land_agent"; 
         $result = $conn->query($sql);
         while ($rows = $result->fetch_assoc()) {
        ?>
          <option value= "<?= $rows['land_agent_id'];?>" <?php if($rows['land_agent_id']==$row['land_agent_id']){echo 'selected';};?>> 
          <?php echo$rows['land_agent_name'];?>
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
  $id=$_POST['land_id'];
  $lname=$_POST['lname'];
  $larea=$_POST['larea'];
  $lcost=$_POST['lcost'];
  $status=$_POST['status'];
  $agent=$_POST['agent'];
  $image=$_FILES['pic'];
  
  $sql = "UPDATE land SET land_name='$lname', land_area='$larea' , land_cost='$lcost' , land_agent_id= '$agent',
  ls_id = '$status'  WHERE land_id=$id";
  if ($conn->query($sql) === TRUE) {
        // header('Location: landview.php');
      }else{
        echo "User image update failed.";
      }
  
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

    $updateImg="UPDATE land SET land_img='$imageName' WHERE land_id='$id'";
    if($conn->query($updateImg) === TRUE){
      move_uploaded_file($image['tmp_name'],'../../dist/images/land/'.$imageName);
      header('Location:landview.php');
    }else{
      echo "User image update failed.";
    }
  }
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>