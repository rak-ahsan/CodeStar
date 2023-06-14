<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>

<div class="col-md-10 table-responsive p-3">

<?php 
    $sql = "SELECT * FROM running_pj natural join project_status"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-light align-middle text-center table-bordered'>
        <thead>";
        echo "<tr> 
                <th>Name</th> 
                <th>Location</th>
                <th>Project Buget</th>
                <th>Already Spend</th>
                <th>Status</th>
            </tr>
            </thead>
            "; 
        while ($row = $result->fetch_assoc()) {
            echo "<tbody>
            <tr>
                <td>$row[project_name]</td>
                <td>$row[project_location]</td>
                <td>$row[project_price]</td>
                <td>$row[spened]</td>
                <td>$row[p_status]</td>
            <tr>
            
            
            </tbody>
            ";
        }
    
        echo "</table>";
    } else {
        echo "No data found.";
    }
?>
</div>