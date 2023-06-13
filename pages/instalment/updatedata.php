<?php include('../../includes/conf.php');
  get_header();
  get_side();

    $userid = $_GET['id'];
    $sql = "SELECT * FROM instalment where land_id = $userid"; // land id check or change
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="col-md-10  container d-flex justify-content-center bg">
 <div class="col-md-4">
 <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class=" p-3">
    <div>
      <label for="lno" class="form-label mt-3">Loan Identification No</label>
      <input type="text" class="form-control mb-1 in" id="lno" name="loan">
    </div>
    <div>
      <label for="catagory" class="form-label">Loan Catagory</label>
      <input type="text" class="form-control mb-1 in" id="catagory" name="cata">
    </div>
    <div>
      <label for="date" class="form-label">Date</label>
      <input type="text" class="form-control mb-1 in" id="date" name="ldate">
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
  $lnumb=$_POST['loan'];
  $lcatagory=$_POST['cata'];
  $date=$_POST['ldate'];
  $status=$_POST['status'];
  $agent=$_POST['agent'];
  $image=$_FILES['pic'];

  $sql = "UPDATE instalment SET loan_no='$lnumb', loan_catagory='$lcatagory' , date_loan='$date' , land_agent_id= '$agent',
  ls_id = '$status'  WHERE land_id=$id";
  if ($conn->query($sql) === TRUE) {
        header('Location: loanview.php');
      }else{
        echo "User image update failed.";
      }
  
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

    $updateImg="UPDATE instalment SET land_img='$imageName' WHERE land_id='$id'";
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

