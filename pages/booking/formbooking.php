<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<div class="col-md-10  container d-flex justify-content-center bg">
 <div class="col-md-4">
 <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class=" p-3">
    <div>
      <label for="name" class="form-label mt-3">Customar Name</label>
      <input type="text" class="form-control mb-1 in" id="name" name="bname">
    </div>
    <div>
      <label for="bkarea" class="form-label">Address</label>
      <input type="text" class="form-control mb-1 in" id="bkarea" name="barea">
    </div>
    <div>
      <label for="bcost" class="form-label">Buget</label>
      <input type="text" class="form-control mb-1 in" id="bcost" name="bcost">
    </div>
    <div>
    <label for="larea" class="form-label">Select An Apratment</label>
    <select class="form-select form-select-sm in mb-1" name="property_id" aria-label=".form-select-sm example">
      <option selected>Open this select menu</option>
        <?php
         $sql = "SELECT * FROM property"; 
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
        ?>
          <option value= "<?php echo$row['property_id'];?>"><?php echo$row['property_name'];?></option>
          <?php }?>
      </select>
    </div>

    <div>
    <label for="larea" class="form-label">Booking Type</label>
    <select class="form-select form-select-sm in mb-1" name="booking" aria-label=".form-select-sm example">
      <option selected>Please Select Your Booking Type</option>
        <?php
         $sql = "SELECT * FROM booking_type"; 
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
        ?>
          <option value= "<?php echo$row['bt_id'];?>"><?php echo$row['btype'];?></option>
          <?php }?>
      </select>
    </div>

    <div>
    <label for="larea" class="form-label">Payment Type</label>
    <select class="form-select form-select-sm in mb-1" name="Payment" aria-label=".form-select-sm example">
      <option selected>Please Select Your Payment Type</option>
        <?php
         $sql = "SELECT * FROM payment"; 
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
        ?>
          <option value= "<?php echo$row['pay_id'];?>"><?php echo$row['payname'];?></option>
          <?php }?>
      </select>
    </div>
    <div class="mb-3">
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
  $property_id=$_POST['property_id'];
  $booking=$_POST['booking'];
  $Payment=$_POST['Payment'];

if(!empty($bname)&& !empty($barea)&& !empty($bcost)&& !empty($property_id) && !empty($booking)){
  $sql ="INSERT INTO booking (bkng_name,bkng_area,bkng_cost,property_id,bt_id,Payment ) VALUES('$bname','$barea','$bcost','$property_id','$booking','$Payment')";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
?>