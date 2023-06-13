<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<div class="col-md-10 container d-flex justify-content-center bg">
  <div class="col-md-4">
  <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
    <div class="p-3">
    <div >
      <label for="land" class="form-label mt-3">Agent Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="aname">
    </div>
    <div >
      <label for="larea" class="form-label">Agent Location</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="aarea">
    </div>
    <div >
      <label for="larea" class="form-label">Agent Contact</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="acontact">
    </div>
  
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Agent Photo</label>
      <input class="form-control" type="file" id="formFile" name="pic">
  </div>
    <button type="submit" class="btn btn-secondary" name="sub">Submit</button>
    <a  type="button"  href="agent.php" class="btn btn-secondary float-end">View All Agents</a>
  </form>
</div>
</div>
</div>
<?php
if(isset($_POST['sub'])){
  $aname=$_POST['aname'];
  $aarea=$_POST['aarea'];
  $acontact=$_POST['acontact'];
  $image=$_FILES['pic'];
  $imageName='';
  if($image['name']!=''){
    $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

if(!empty($aname)&& !empty($aarea)&& !empty($acontact)){
  $sql ="INSERT INTO land_agent (land_agent_name,land_agent_location,land_agent_contact,agent_img) 
  VALUES('$aname','$aarea','$acontact','$imageName')";
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($image['tmp_name'],'../../dist/images/agent/'.$imageName);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}




?>