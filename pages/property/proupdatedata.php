<?php include('../../includes/conf.php');
  get_header();
  get_side();

    $userid = $_GET['id'];
    $sql = "SELECT * FROM property where property_id = $userid"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="col-md-12 container d-flex justify-content-center bg">
  <div class="col-md-4">
  <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class="p-3"> 
  <div>
      <label for="land" class="form-label mt-3">Land Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="pname" value="<?= $row['property_name']?>">
      <input type="hidden" class="form-control mb-1 in"  name="property_id" value="<?= $row['property_id']?>">
    </div>
    <div>
    <label for="larea" class="form-label">Apartment Area</label>
      <select class="form-select form-select-sm in mb-1" name="ploname" aria-label=".form-select-sm example">
      <option selected>Select Your Area Area</option>
        <?php
         $sql = "SELECT * FROM area"; 
         $result = $conn->query($sql);
         while ($rows = $result->fetch_assoc()) {
        ?>
          <option value= "<?php echo $rows['area_id'];?>" <?php if($rows['area_id']==$row['property_location']){echo 'selected';}?>> 
          <?php echo$rows['area_name'];?>
        </option>
          <?php }?>
      </select>
    </div>
    <div >
      <label for="larea" class="form-label">Land Cost</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="lcost" value="<?= $row['property_cost']?>">
    </div>
    <div >
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
    <!-- <div >
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
    </div> -->
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile" name='pic'>
  </div>
    
  <input type="submit" class="btn btn-secondary" name="sub">

  </form>
</div>
</div>
 
<?php

if(isset($_POST['sub'])){
  $id=$_POST['property_id'];
  $pname=$_POST['pname'];
  $plocetion=$_POST['ploname'];
  $pcost=$_POST['lcost'];
  // $agent=$_POST['agent'];
  $status=$_POST['status'];
  $image=$_FILES['pic'];

  $sql = "UPDATE property SET property_name='$pname', property_location='$plocetion' , property_cost='$pcost' ,
  ls_id = '$status'  WHERE property_id=$id";
  if ($conn->query($sql) === TRUE) {
        header('Location: propertyview.php');
      }else{
        echo "User image update failed.";
      }
  
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

    $updateImg="UPDATE property SET land_img='$imageName' WHERE property_id='$id'";
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

