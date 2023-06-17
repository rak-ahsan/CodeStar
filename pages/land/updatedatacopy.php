<?php include('../../includes/conf.php');
<<<<<<< HEAD
=======

>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM land where land_id = $userid"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="col-md-12 container d-flex justify-content-center bg">
  <div class="col-md-12">
  <form method="post" class="col-md-12 bg-light mt-3 pdiv" enctype="multipart/form-data">
  <div class="p-3"> 
  <div>
      <label for="land" class="form-label mt-3">Land Name</label>
      <input type="text" class="form-control mb-1 in" id="lname" name="lname" value="<?= $row['land_name']?>">
<<<<<<< HEAD
      <input type="hidden" class="form-control mb-1 in"  id="land_id" name="land_id" value="<?= $row['land_id']?>">
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
=======
      <input type="hidden" class="form-control mb-1 in"  id = "land_id" name="land_id" value="<?= $row['land_id']?>">
    </div>
    <div >
      <label for="larea" class="form-label">Land Area</label>
      <input type="text" class="form-control mb-1 in" id="land_area" name="larea" value="<?= $row['land_area']?>">
    </div>
    <div >
      <label for="larea" class="form-label">Land Cost</label>
      <input type="text" class="form-control mb-1 in" id="land_cost" name="lcost" value="<?= $row['land_cost']?>">
    </div>
    <div >
    <label for="larea" class="form-label">Status</label>
      <select class="form-select form-select-sm in mb-1" id ="status" name="status" aria-label=".form-select-sm example">
>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69
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
<<<<<<< HEAD
      <select class="form-select form-select-sm in mb-1" name="agent" aria-label=".form-select-sm example">
=======
      <select class="form-select form-select-sm in mb-1" id="agent" name="agent" aria-label=".form-select-sm example">
>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69
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
    
<<<<<<< HEAD
  <p class="btn btn-secondary" id="subs" name="sub"> okk </p>
=======
  <input type="submit" id= "btn" class="btn btn-secondary" name="sub" onclick="myFunction()">
>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69

  </form>
</div>
</div>
<<<<<<< HEAD
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script type='text/javascript'>
            $(document).ready(function(){
              console.log("doc")
                $('#subs').click(function(){
                  console.log("okk");
                    var lname = $("#lname").val();
                    var land_id = $("#land_id").val();
                    console.log(land_id);
                    $.ajax({
                        url: 'abe.php',
                        type: 'post',
                        data: {"lname": lname,
                              "land_id": land_id 
                        },
                        success: function(response){ 
                            alert("ok")
                        }
                    });
                  });
                
              });
=======
 
<script>
 function myFunction() {
    var lname = document.getElementById("lname").value;
    var land_id = document.getElementById("land_id").value;
    var land_area = document.getElementById("land_area").value;
    var land_cost = document.getElementById("land_cost").value;
    var status = document.getElementById("status").value;
    var agent = document.getElementById("agent").value;
  };
>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69
</script>



<<<<<<< HEAD
<?php

// if(isset($_POST['sub'])){
//   $id=$_POST['land_id'];
//   $lname=$_POST['lname'];
//   $larea=$_POST['larea'];
//   $lcost=$_POST['lcost'];
//   $status=$_POST['status'];
//   $agent=$_POST['agent'];
//   $image=$_FILES['pic'];

//   $sql = "UPDATE land SET land_name='$lname', land_area='$larea' , land_cost='$lcost' , land_agent_id= '$agent',
//   ls_id = '$status'  WHERE land_id=$id";
//   if ($conn->query($sql) === TRUE) {
//         header('Location: landview.php');
//       }else{
//         echo "User image update failed.";
//       }
  
//   if($image['name']!=''){
//     $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

//     $updateImg="UPDATE land SET land_img='$imageName' WHERE land_id='$id'";
//     if($conn->query($updateImg) === TRUE){
//       move_uploaded_file($image['tmp_name'],'../../dist/images/land/'.$imageName);
//       // header('Location:landview.php');
//     }else{
//       echo "User image update failed.";
//     }
//   }
// } else {

// } 
?>

=======










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
      // header('Location:landview.php');
    }else{
      echo "User image update failed.";
    }
  }
} else {

} 
?>



>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69
