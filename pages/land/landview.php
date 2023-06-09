<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<div class="col-md-10 mt-3">
<?php 
    $sql = "SELECT * FROM land natural JOIN land_agent Natural JOIN land_status"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class= 'table table-light border-primary align-middle text-center table-bordered'; >";
        echo "<tr> 
                <th class='col'>Name</th> 
                <th class='col'>Area</th>
                <th class='col'>Cost</th>
                <th class='col'>Agent</th>
                <th class='col'>Status</th>
                <th class='col'>Photo</th>
                <th class='col' colspan=2>Action</th>
            </tr>"; 
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[land_name]</td>
                <td>$row[land_area]</td>
                <td>$row[land_cost]</td>
                <td>$row[land_agent_name]</td>
                <td>$row[is_name]</td>
                <td>";
                     if($row['land_img']!=''){ 
                    echo "<img height='50' src='../upload/$row[land_img]'/>";
                   }else{ 
                     echo '<img height="50" src="../img/avatar.png" alt="Image"/>';
                   }

                 echo "</td>
                <td> 
                    <a class='btn btn-success' href='updatedata.php?id=$row[land_id]' > Update </a>
                </td>
                <td><a class='btn btn-danger' href='Delete.php?id=$row[land_id]' </a>Delete</td>
            <tr>
            
            
            
            ";
        };
    
        echo "</table>";
    } else {
        echo "No data found.";
    }




?>
</div>