<?php
include("../../includes/db.php");
  $plocetion=$_POST['ploname'];
  $pname=$_POST['project_id'];
  $pcost=$_POST['project_price'];
  $selling_p=$_POST['pcost'];
  $agent=$_POST['agent'];
  $status=$_POST['status'];
  
//   $pcost=$_POST['pconame'];
//   $selling_p=$_POST['selling_p'];
//   $status=$_POST['status'];
//   $image=$_POST['pic'];
//   $imageName='';
//   if($image['name']!=''){
//     $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
//   }
if(!empty($pname)&& !empty($plocetion)&& !empty($pcost)){
  $sql ="INSERT INTO property (property_name,property_location,property_cost,ls_id,agent,selling_p ) VALUES('$pname',' $plocetion','$pcost','$status','$agent','$selling_p')";
  if ($conn->query($sql) === TRUE) {
    // move_uploaded_file($image['tmp_name'],'../../dist/images/land/'.$imageName);
    echo "done";
    // header('location:ajxrpo.php');
  } else {
  }
}













?>