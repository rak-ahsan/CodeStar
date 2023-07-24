<?php 
    include("includes/function.php");
    get_header();
    get_sider();
?>
<style>
  select.form-control{
  background-color:white;
  color:#000!important;
  }
</style>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center p-2 btn-gradient-primary text-white">Add A New Student</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Student Name</label>
                        <input type="text" class="form-control" id="sname" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Father's Name</label>
                        <input type="email" class="form-control" id="fname" placeholder="Father's Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Mother's Name</label>
                        <input type="email" class="form-control" id="mname" placeholder="Mother's Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Gurdian's Number</label>
                        <input type="email" class="form-control" id="mname" placeholder=" Gurdian's Number ">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Course Fees</label>
                        <input type="email" class="form-control" id="mname" placeholder=" Course Fees ">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Taka Paid</label>
                        <input type="email" class="form-control" id="mname" placeholder=" Taka Paid ">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="gender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Course Name</label>
                        <select class="form-control" id="course">
                          <option>Graphic Design</option>
                          <option>Web Design</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Location">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">NID</label>
                        <input type="text" class="form-control" id="nid" placeholder="Location">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
              