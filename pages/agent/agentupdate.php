<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<?php
    $id=$_GET['id'];
    $sql = "SELECT * FROM land_agent where land_agent_id = $id"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="col-md-10 ">
  <form method="post" class="form" enctype="multipart/form-data">
    <div class="col-md-4">
      <label for="land" class="form-label mt-3">Agent Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="aname" value="<?= $row['land_agent_name']?>">
      <input type="hidden" class="form-control mb-1 in" id="land" name="id" value="<?= $row['land_agent_id']?>">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Agent Location</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="aarea" value="<?= $row['land_agent_location']?>">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Agent Contact</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="acontact" value="<?= $row['land_agent_contact']?>">
    </div>
    <div class="mb-3 col-md-4">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile" name="pic">
  </div>
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
</div>

<?php
if(isset($_POST['sub'])){
    $id = $_POST['id'];
  $aname=$_POST['aname'];
  $aarea=$_POST['aarea'];
  $acontact=$_POST['acontact'];
  $image=$_FILES['pic'];

$sql = "UPDATE land_agent SET land_agent_name='$aname', land_agent_location='$aarea' , land_agent_contact='$acontact'
WHERE land_agent_id=$id";
if ($conn->query($sql) === TRUE) {
      header('Location: agent.php');
    }else{
      echo "User image update failed.";
    }

    if($image['name']!=''){
        $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    
        $updateImg="UPDATE land_agent SET agent_img='$imageName' WHERE land_agent_id='$id'";
        if($conn->query($updateImg) === TRUE){
          move_uploaded_file($image['tmp_name'],'../../dist/images/agent/'.$imageName);
          header('Location: agent.php');
        }else{
          echo "User image update failed.";
        }
      }
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;

}
?>