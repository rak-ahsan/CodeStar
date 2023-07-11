<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rak";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['bind'])){
 $input = $_POST['bind'];
 $input;


?>

<?php 
    $sql = "SELECT *
    FROM property
    NATURAL JOIN land_status
    JOIN area ON property.property_location = area.area_id
    WHERE property_name LIKE '%{$input}%' or area_name LIKE '%{$input}%'
    
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
            <tr>
            
            
            </tbody>
            <?php }?>
        </table>
        <?php }?>
        <?php }?>