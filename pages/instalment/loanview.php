<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<div class="col-md-10 table-responsive p-3">
<?php 
    $sql = "SELECT * FROM instalment natural JOIN ins_type Natural JOIN land_status"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table class='table table-light align-middle text-center table-bordered'>
            <thead>
                <tr> 
                    <th>Appilier Name</th> 
                    <th>Down Payment</th>
                    <th>Percentage</th>
                    <th>Agent</th>
                    <th>Appilication Form</th>
                    <th>Monthly Payment</th>
                    <th>date</th>
                    <th colspan='2'>Action</th>

                </tr>
            </thead>
       <?php while ($row = $result->fetch_assoc()) {?>
            <tbody>
            <tr>
                <td><?=$row['appname']?></td>
                <td><?=$row['downp']?></td>
                <td value="<?=$row['ins_id']?>"><?=$row['ins_name']?></td>

                <td value="<?=$row['land_agent_id']?>"><?=$row['land_agent_name']?></td>
                <td>
                     <?php if($row['from_pic']!=''){ 
                    echo "<img height='50' src='../../dist/images/land/$row[from_pic]'>";
                   }else{ 
                     echo '<img height="50" src="../../dist/images/pic/avatar.png" alt="Image">';
                   }
                   ?>
                </td>
                <td>
                  <a class='btn nav-link' href='updatedata.php?id=<?=$row['land_id']?>'>
                  <i class='fa-regular fa-pen-to-square fa-xl'></i></a>
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