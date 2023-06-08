<?php include('../config/nav.php')?>
<?php include('../config/sidebar.php')?>
<div class="col-md-10">
<?php 
    $sql = "SELECT * FROM land_agent"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class= 'table table-light border-primary align-middle text-center table-bordered'; >";
        echo "<tr> 
                <th class='col'>Name</th> 
                <th class='col'>Area</th>
                <th class='col'>Contact</th>
                <th class='col'>Agent Photo</th>
                <th class='col' colspan=3>Action</th>
            </tr>"; 
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[land_agent_name]</td>
                <td>$row[land_agent_location]</td>
                <td>$row[land_agent_contact]</td>
                <td>";
                     if($row['agent_img']!=''){ 
                    echo "<img height='50' src='../upload/agent/$row[agent_img]'/>";
                   }else{ 
                     echo '<img height="50" src="../img/avatar.png" alt="Image"/>';
                   }

                 echo "</td>
                <td><a class='btn btn-success' href=agentupdate.php?id=$row[land_agent_id]>Update</a></td>
                <td><a class='btn btn-danger' href=agentdelete.php?id=$row[land_agent_id]>Delete</a></td>
            <tr>
            
            
            
            ";
        };
    
        echo "</table>";
    } else {
        echo "No data found.";
    }




?>
</div>