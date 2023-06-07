<?php include('../config/head.php')?>
<?php include('../config/sidebar.php')?>
<div class="col-6">
<?php 
    include('../config/db.php');
    $sql = "SELECT * FROM land NATURAL JOIN land_agent "; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class= 'table table-light border-primary align-middle text-center table-bordered'; >";
        echo "<tr> 
                <th class='col'>Name</th> 
                <th class='col'>Area</th>
                <th class='col'>Cost</th>
                <th class='col'>Agent</th>
                <th class='col' colspan=2>Action</th>
            </tr>"; 
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[land_name]</td>
                <td>$row[land_area]</td>
                <td>$row[land_cost]</td>
                <td>$row[land_agent_name]</td>
                <td> 
                    <a class='btn btn-success' href='updatedata.php?id=$row[land_id]' > Update </a>
                </td>
                <td><a class='btn btn-danger' href=#>Delete</a></td>
            <tr>
            
            
            
            ";
        };
    
        echo "</table>";
    } else {
        echo "No data found.";
    }




?>
</div>