<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<link rel="stylesheet" href="../../dist/css/cus.css">
<div class="col-md-10 ">
        <div class="container bg-light d-flex rak">
            <div class="col-md-6">
                <div class="p-3 d-flex flex-column">
                    <span>
                    <i class="fa-solid fa-chart-pie fa-bounce fa-2xl m-3" style="color: #ff8000;">
                        <span>50000</span>
                    </i>
                    </span>
                        <h4 class="pad ">Total Investment</h4>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end rak">
                <div class="p-3 d-flex flex-column">
                    <span>
                        <i class="fa-solid fa-dollar-sign fa-2xl m-3" style="color: #ff8000;"> <span>50124</span></i>
                    </span>
                    <h4 class="pad text-center">Total sales</h4>
                </div>
                <div class="p-3  d-flex flex-column">
                    <span>
                        <i class="fa-solid fa-arrow-trend-up fa-2xl m-3" style="color: #ff8000;">
                            <span style="color: #ff8000;">50124</span>
                        </i>
                    </span>
                    <h4 class="pad text-center">Total Profit</h4>
                </div>
                <div class="p-3 d-flex flex-column">
                    <span>
                        <i class="fa-solid fa-arrow-trend-down fa-2xl m-3" style="color: #ff8000;">
                            <span>50124</span>
                        </i>
                    </span>
                    <h4 class="pad text-center">Total loss</h4>
                </div>
            </div>
        </div>
        <div class="container d-flex bg-light rak">
            <div class="col-md-6 vh-80 p-3 table-responsive">
            <?php 
                $sql = "SELECT * FROM booking 
                natural JOIN booking_type 
                JOIN property ON property.property_id = booking.property_id
                JOIN payment ON payment.pay_id = booking.payment 
                ORDER BY date DESC
                limit 5
                
                "; 
                
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                ?>
                <table class="table text-center">
                    <thead>
                        <h6>Booking List:</h6>
                        <th>Name</th>
                        <th>Property Name</th>
                        <th>Date</th>
                        <th>Payment</th>
                    </thead>
                    <tbody>
                <?php while ($row = $result->fetch_assoc()) {?>
                    
                        <tr>
                            <td><?=$row['bkng_name']?></td>
                            <td><?=$row['property_name']?></td>
                            <td><?=$row['date']?></td>
                            <td><?=$row['payname']?></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <?php }?>
            </div>
            <div class="col-md-6 d-flex mt-3  bg-light rak">
                <div class=" col-md-6  text-center p-3">
                    <div class="d1 bg-success con1">
                        <i class="fa-solid fa-users fa-xl m-3 text-light"></i>
                    </div>
                    <div class="d2">
                        <?php 
                            $sql = "SELECT COUNT(*) as total_rows FROM land_agent";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <h6>Total Agents: <?= $row['total_rows']?></h6>
                        <h6>Total Sold:</h6>
                    </div>
                    <div class="d1 bg-success con1">
                        <i class="fa-solid fa-users fa-xl m-3 text-light"></i>
                    </div>
                    <?php 
                            $sql = "SELECT COUNT(*) as total_rows FROM p_contactor";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                    ?>
                    <div class="d2">
                        <h6>Total Developer:<?= $row['total_rows']?></h6>
                        <h6>Under Construction:</h6>
                    </div>
                </div>
                <div class=" col-md-6  text-center p-3">
                    <div class="d1 bg-success con1">
                    <i class="fa-solid fa-person-digging fa-xl m-3" style="color: #ffffff;"></i>
                    </div>
                    <?php 
                            $sql = "SELECT COUNT(*) as total_rows FROM project where ps_id =1 ";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();

                            $sqls="SELECT COUNT(*) as total_rowss FROM project where ps_id =3 ";
                            $results = $conn->query($sqls);
                            $rows = $results->fetch_assoc();
                    ?>
                    <div class="d2">
                        <h6>Ongoing Project: <?=$row['total_rows']?></h6>
                        <h6>Compeleted Project: <?=$rows['total_rowss']?> </h6>
                    </div>
                    <div class="d1 bg-success con1">
                    <i class="fa-solid fa-building fa-xl m-3" style="color: #ffffff;"></i>
                    </div>
                    <div class="d2">
                        <h6>Total Developer:</h6>
                        <h6>Total Developer:</h6>
                    </div>
                </div>
            </div>
            
        </div> 
        <div class="container bg-light">
        <div class="row p-3">
        <div class="col-md-6 vh-80 table-responsive">
                <table class="table ">
                    <thead>
                        <h6></h6>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6  d-flex align-items-center ">
                <div class="container" id="chartContainer"></div>
               
            </div>
        </div>
    </div>
    </div>
    
