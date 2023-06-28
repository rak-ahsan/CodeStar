<!DOCTYPE html>
<html>
<head>
  <title>Modal Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<<<<<<< HEAD
<button type="button" class="btn btn-info btn-lg passingID"  id = "test" value="10">Open Modal</button>
=======
>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69

<button type="button" class="btn btn-info btn-lg passingID" data-id="10">Open Modal</button>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function () {
    $(".passingID").click(function () {
<<<<<<< HEAD
      var ids = $("#test").val();
      alert(ids);
      // $("#idkl").val(ids);
=======
      var ids = $(this).attr('data-id');

      $("#idkl").val(ids);
>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69
      $('#myModal').modal('show');
    });
  });
</script>

<<<<<<< HEAD
=======

>>>>>>> c7ffd939706368ed3f2c97684175487d51501f69
</body>
</html>
