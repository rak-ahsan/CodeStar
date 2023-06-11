<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<div class="col-md-10 table-responsive p-3">
<?php 
    $sql = "SELECT * FROM land natural JOIN land_agent Natural JOIN land_status"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table class='table table-light align-middle text-center table-bordered'>
            <thead>
                <tr> 
                    <th>Name</th> 
                    <th>Area</th>
                    <th>Cost</th>
                    <th>Agent</th>
                    <th>Status</th>
                    <th>Photo</th>
                    <th colspan='2'>Action</th>
                </tr>
            </thead>
       <?php while ($row = $result->fetch_assoc()) {?>
            <tbody>
            <tr>
                <td><?=$row['land_name']?></td>
                <td><?=$row['land_area']?></td>
                <td><?=$row['land_cost']?></td>
                <td><?=$row['land_agent_name']?></td>
                <td><?=$row['is_name']?></td>
                <td>
                     <?php if($row['land_img']!=''){ 
                    echo "<img height='50' src='../../dist/images/land/$row[land_img]'>";
                   }else{ 
                     echo '<img height="50" src="../../dist/images/pic/avatar.png" alt="Image">';
                   }
                   ?>
                </td>
                <td>
                  <a type='button' data-id='<?=$row['land_id']?>' class='userinfo btn nav-link' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    <i class='fa-regular fa-pen-to-square fa-xl'></i>
                  </a>
                   </td>
                
                <td>
                  <a class='btn nav-link' href='Delete.php?id=<?=$row['land_id']?>'>
                  <i class='fa-solid fa-trash fa-xl' style='color: #ff0000;'></i></a>
                </td>
            <tr>
            
            
            </tbody>
            <?php }?>
        </table>
        <?php }
                
        ?>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type='text/javascript'>
  $(document).ready(function() {
  $('.userinfo').click(function() {
    var userid = $(this).data('id');
    
    $.ajax({
      url: 'updatedata.php',
      method: 'POST',
      data: { id: userid },
      success: function(response) {
        // Handle the response from PHP
        console.log(response);
      },
      error: function(xhr, status, error) {
        // Handle errors
        console.error(error);
      }
    });
  });
});

</script>
Modal
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the ID value from the AJAX request
  $idValue = $_POST['id'];

  // Process the ID value as needed
  // Example: Perform database operations or other tasks based on the ID value

  // Return a response (optional)
  $response = "Received ID: " . $idValue;
  echo $response;
}
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Land Details </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
        $sql = "SELECT * FROM land where land_id = $id"; 
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
  
?>
<div class=" container bg">
  <div class="col-md-12">
  <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class="p-3"> 
  <div>
      <label for="land" class="form-label mt-3">Land Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="lname" value="<?= $row['land_name']?>">
      <input type="hidden" class="form-control mb-1 in" id="land" name="land_id" value="<?= $row['land_id']?>">
    </div>
    <div >
      <label for="larea" class="form-label">Land Area</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="larea" value="<?= $row['land_area']?>">
    </div>
    <div >
      <label for="larea" class="form-label">Land Cost</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="lcost" value="<?= $row['land_cost']?>">
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
    <div >
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
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile" name='pic'>
  </div>
    <button type="submit" class="btn btn-secondary" name="sub">Submit</button>
  </form>
</div>
</div>
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
        header('Location: landview.php');
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

} 
?>
      </div>
    </div>
  </div>
</div>
