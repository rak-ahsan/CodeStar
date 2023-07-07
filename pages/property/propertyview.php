<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<div class="col-md-10 table-responsive p-3">
<?php 
    $sql = "SELECT * FROM property natural JOIN land_status
    JOIN area ON property.property_location = area.area_id
    
    
    "; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table class='table table-light align-middle text-center table-bordered'>
            <thead>
                <tr> 
                    <th>Property Name</th> 
                    <th>Property Area</th>
                    <th>Property Cost</th>
                    <th>Availability</th>
                    <th>Photo</th>
                    <th colspan='3'>Action</th>
                </tr>
            </thead>
       <?php while ($row = $result->fetch_assoc()) {?>
            <tbody>
            <tr>
                <td><?=$row['property_name']?></td>
                <td><?=$row['area_name']?></td>
                <td><?=$row['property_cost']?></td>
                <td><?=$row['is_name']?></td>
                <td>
                     <?php if($row['land_img']!=''){ 
                    echo "<img height='50' src='../../dist/images/land/$row[land_img]'>";
                   }else{ 
                     echo '<img height="50" src="../../dist/images/pic/avatar.png" alt="Image">';
                   }
                   ?>
                </td>
                <!-- <td>

                  <button class='btn nav-link' class="btn btn-primary " id = "passingID" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?=$row['property_id']?>">
                  <i class='fa-regular fa-pen-to-square fa-xl'></i></button>
                   </td> -->

                   <?php if($_SESSION['loc'] == $row['property_location']) { ?>
                    <td>
                        <a class='btn nav-link' href='proupdatedata.php?id=<?=$row['property_id']?>'>
                        <i class='fa-regular fa-pen-to-square fa-xl'></i></a>
                    </td>
                    <td>
                      <a class='btn nav-link' href='Delete.php?id=<?=$row['property_id']?>'>
                      <i class='fa-solid fa-trash fa-xl' style='color: #ff0000;'></i></a>
                    </td>
                <?php }?>

                <?php if($_SESSION['role'] == 1) { ?>
                    <td>
                        <a class='btn nav-link' href='proupdatedata.php?id=<?=$row['property_id']?>'>
                        <i class='fa-regular fa-pen-to-square fa-xl'></i></a>
                    </td>
                    <td>
                      <a class='btn nav-link' href='Delete.php?id=<?=$row['property_id']?>'>
                      <i class='fa-solid fa-trash fa-xl' style='color: #ff0000;'></i></a>
                    </td>
                <?php }?>
                
            <tr>
            
            
            </tbody>
            <?php }?>
        </table>
        <?php }
                
        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function () {
    $("#passingID").click(function () {
      var ids = $(this).data("id");
      alert(ids);
    });
  });
</script>