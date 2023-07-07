<?php include('../../includes/conf.php');

    $userid = $_POST['userid'];
    $sql = "SELECT * FROM land natural JOIN land_agent Natural JOIN land_status where land_id = $userid"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="col-md-12 container d-flex justify-content-center">
  <div class="card col-md-12 mb-3">
    <div class="row gx-0">
      <div class="col-md-4">
          <?php 
              if($row['land_img']!=''){ 
                echo "<img height='150' src='../../dist/images/land/$row[land_img]'>";
                }else{ 
                  echo '<img height="50" src="../../dist/images/pic/avatar.png" alt="Image">';
                }
            ?>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <div class="div">
            <p>Name : <?=$row['land_name']?></p>
            <p>Buying Cost : <?=$row['land_cost']?></p>
            <p>Land Location : <?=$row['land_area']?></p]>
            <p>Broker : <?=$row['land_agent_name']?></p]>
            <p>Avaiablity : <?=$row['is_name']?></p]>
            <p>Amount Of Land : <?=$row['lme']?></p]>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>