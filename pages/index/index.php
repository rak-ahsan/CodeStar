<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<link rel="stylesheet" href="../../dist/css/cus.css">
<div class="container col-md-10 h-50 justify-content-center">
  <span>Dashboard</span>
<div class="d-flex">
  <div class="col-sm-4 h-25">
    <div class="box1  ">
    <div class="card mt-3 text-center">
        <div class="card-header bg-success text-white">
          <h6>Total Projects</h6>
        </div>
        <div class="card-body">
          <h5>500</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 h-25">
    <div class="box1  text-center">
    <div class="card mt-3 ">
        <div class="card-header bg-success text-white">
          <h6>
          Total Agents
          </h6>
        </div>
        <div class="card-body">
          <h5>25</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 h-25">
    <div class="box1  text-center">
    <div class="card mt-3 ">
        <div class="card-header bg-success text-white">
          <h6>Total Profit</h6>
        </div>
        <div class="card-body">
          <h5>5000000$</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container vh-50 mt-5">
  <div class="col-md-12">
    <div class="chart">
    <div id="piechart" class="w-50 col-6">
    </div>
  </div>
</div>
</div>
